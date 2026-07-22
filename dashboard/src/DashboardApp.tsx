import React, { useEffect, useMemo, useState } from 'react';
import { BrowserRouter, Navigate, Route, Routes, useLocation, useNavigate } from 'react-router-dom';
import { AlertTriangle } from 'lucide-react';
import Header from './components/Header';
import PortfolioCard from './components/PortfolioCard';
import Analytics from './components/Analytics';
import AssetList from './components/AssetList';
import Heatmap from './components/Heatmap';
import BottomNav from './components/BottomNav';
import TradePage from './components/TradePage';
import TradingDesk from './components/TradingDesk';
import AssetDetail from './components/AssetDetail';
import InvestAndEarnPage from './components/InvestAndEarnPage';
import WalletPage from './components/WalletPage';
import ProfilePage from './components/ProfilePage';
import WatchlistPage from './components/WatchlistPage';
import LandingPage from './components/LandingPage';
import AuthPage from './components/AuthPage';
import ChaportLiveChat from './components/ChaportLiveChat';
import SiteLayout from './components/site/Layout';
import SiteHome from './components/site/pages/Home';
import SiteAbout from './components/site/pages/About';
import SitePrivacy from './components/site/pages/Privacy';
import SiteProducts from './components/site/pages/Products';
import SiteRisk from './components/site/pages/Risk';
import SiteTerms from './components/site/pages/Terms';
import { apiPublicSettings } from './lib/api';
import { resolveBrandName } from './lib/branding';
import { MarketProvider, useMarket } from './context/MarketContext';
import type { PublicSettings, SelectableAsset } from './types';

const DASHBOARD_MAX_WIDTH_CLASS = 'max-w-[768px]';

const DASHBOARD_LAST_ROUTE_KEY = 'runwayalgo.dashboard.last-route';

const TAB_TO_ROUTE = {
  Home: '/dashboard/home',
  Market: '/dashboard/market',
  Trade: '/dashboard/trade',
  Copy: '/dashboard/copy',
  Wallet: '/dashboard/wallet',
  Profile: '/dashboard/profile',
} as const;

type DashboardTab = keyof typeof TAB_TO_ROUTE;

const HomeDashboard: React.FC<{ onAssetClick: (asset: SelectableAsset) => void; onOpenWatchlist: () => void }> = ({ onAssetClick, onOpenWatchlist }) => (
  <div className="animate-in fade-in slide-in-from-bottom-4 duration-1000">
    <PortfolioCard />
    <div className="h-2 bg-black/40 border-y border-white/5 my-2" />
    <AssetList onAssetClick={onAssetClick} onOpenWatchlist={onOpenWatchlist} />
    <div className="h-2 bg-black/40 border-y border-white/5 my-2" />
    <Analytics />
    <Heatmap />
  </div>
);

const resolveActiveTab = (pathname: string): string => {
  if (pathname.startsWith('/dashboard/market')) return 'Market';
  if (pathname.startsWith('/dashboard/trade')) return 'Trade';
  if (pathname.startsWith('/dashboard/copy')) return 'Copy';
  if (pathname.startsWith('/dashboard/wallet')) return 'Wallet';
  if (pathname.startsWith('/dashboard/profile')) return 'Profile';
  return 'Home';
};

const isDashboardRoute = (pathname: string): boolean => pathname.startsWith('/dashboard/');

const AppContent: React.FC = () => {
  const { isAuthenticated, isBootstrapping, login, authError, user } = useMarket();
  const location = useLocation();
  const navigate = useNavigate();
  const activeTab = useMemo(() => resolveActiveTab(location.pathname), [location.pathname]);
  const [isTradingDeskOpen, setIsTradingDeskOpen] = useState(false);
  const [selectedAsset, setSelectedAsset] = useState<SelectableAsset | null>(null);
  const [publicSettings, setPublicSettings] = useState<PublicSettings | null>(null);

  const handleAssetSelect = (asset: SelectableAsset) => {
    setSelectedAsset(asset);
  };

  useEffect(() => {
    let isActive = true;

    const loadPublicSettings = async () => {
      try {
        const settings = await apiPublicSettings();
        if (isActive) {
          setPublicSettings(settings);
        }
      } catch {
        if (isActive) {
          setPublicSettings(null);
        }
      }
    };

    void loadPublicSettings();

    return () => {
      isActive = false;
    };
  }, []);

  const siteBrandName = useMemo(() => resolveBrandName(publicSettings?.brandName), [publicSettings?.brandName]);

  useEffect(() => {
    if (!isAuthenticated) {
      return;
    }

    const currentPath = location.pathname;

    if (currentPath === '/' || currentPath === '/dashboard') {
      const savedRoute = localStorage.getItem(DASHBOARD_LAST_ROUTE_KEY);
      const fallbackRoute = TAB_TO_ROUTE.Home;
      const nextRoute = savedRoute && isDashboardRoute(savedRoute)
        ? savedRoute
        : fallbackRoute;

      if (currentPath !== nextRoute) {
        navigate(nextRoute, { replace: true });
      }

      return;
    }

    if (isDashboardRoute(currentPath)) {
      localStorage.setItem(DASHBOARD_LAST_ROUTE_KEY, currentPath);
      return;
    }

    navigate(TAB_TO_ROUTE.Home, { replace: true });
  }, [isAuthenticated, location.pathname, navigate]);

  useEffect(() => {
    if (isBootstrapping || isAuthenticated) {
      return;
    }

    if (isDashboardRoute(location.pathname) || location.pathname === '/dashboard') {
      window.location.href = '/';
    }
  }, [isBootstrapping, isAuthenticated, location.pathname]);

  useEffect(() => {
    if (activeTab !== 'Trade' && activeTab !== 'Market' && isTradingDeskOpen) {
      setIsTradingDeskOpen(false);
    }
  }, [activeTab, isTradingDeskOpen]);

  const handleTabChange = (tab: string) => {
    const nextRoute = TAB_TO_ROUTE[tab as DashboardTab] ?? TAB_TO_ROUTE.Home;
    setSelectedAsset(null);
    navigate(nextRoute);
  };

  const kycStatus = String(user?.kycStatus ?? 'pending').toLowerCase();
  const requiresAdminVerification = isAuthenticated && kycStatus !== 'verified';
  const formattedKycStatus = kycStatus
    .split('_')
    .filter((token) => token.length > 0)
    .map((token) => token.charAt(0).toUpperCase() + token.slice(1))
    .join(' ');

  if (isBootstrapping) {
    return (
      <div className="min-h-screen bg-[#050505] flex items-center justify-center">
        <div className="text-center">
          <div className="w-12 h-12 border-2 border-emerald-500/30 border-t-emerald-500 rounded-full animate-spin mx-auto mb-4" />
          <p className="text-zinc-500 text-xs font-bold uppercase tracking-widest">Connecting to backend...</p>
        </div>
      </div>
    );
  }

  if (!isAuthenticated) {
    return (
      <>
        <Routes>
          <Route path="/" element={<SiteLayout brandName={siteBrandName} />}>
            <Route index element={<Navigate to="/login" replace />} />
            <Route path="products" element={<SiteProducts />} />
            <Route path="about" element={<SiteAbout brandName={siteBrandName} />} />
            <Route path="privacy" element={<SitePrivacy brandName={siteBrandName} />} />
            <Route path="terms" element={<SiteTerms brandName={siteBrandName} />} />
            <Route path="risk" element={<SiteRisk brandName={siteBrandName} />} />
          </Route>
          <Route
            path="/classic"
            element={(
              <LandingPage
                onLogin={login}
                authError={authError}
                brandName={siteBrandName}
              />
            )}
          />
          <Route
            path="/login"
            element={(
              <AuthPage
                onLogin={login}
                authError={authError}
                view="login"
                brandName={siteBrandName}
              />
            )}
          />
          <Route
            path="/signup"
            element={(
              <AuthPage
                onLogin={login}
                authError={authError}
                view="signup"
                brandName={siteBrandName}
              />
            )}
          />
          <Route
            path="/verify"
            element={(
              <AuthPage
                onLogin={login}
                authError={authError}
                view="verify"
                brandName={siteBrandName}
              />
            )}
          />
          <Route
            path="/forgot"
            element={(
              <AuthPage
                onLogin={login}
                authError={authError}
                view="forgot"
                brandName={siteBrandName}
              />
            )}
          />
          <Route
            path="/reset"
            element={(
              <AuthPage
                onLogin={login}
                authError={authError}
                view="reset"
                brandName={siteBrandName}
              />
            )}
          />
          <Route path="/about-us" element={<Navigate to="/about" replace />} />
          <Route path="/risk-disclosure" element={<Navigate to="/risk" replace />} />
          <Route path="/privacy-policy" element={<Navigate to="/privacy" replace />} />
          <Route path="/terms-of-service" element={<Navigate to="/terms" replace />} />
          <Route path="*" element={<Navigate to="/login" replace />} />
        </Routes>
        <ChaportLiveChat />
      </>
    );
  }

  const verifyAccountRoute = `${TAB_TO_ROUTE.Profile}?section=kyc`;

  if (selectedAsset) {
    return (
      <div className={`w-full ${DASHBOARD_MAX_WIDTH_CLASS} mx-auto min-h-screen relative bg-[#050505]`}>
        {requiresAdminVerification && (
          <div className="mx-4 mt-4 rounded-2xl border border-amber-500/30 bg-amber-500/10 p-4">
            <div className="flex items-start gap-3">
              <AlertTriangle size={18} className="mt-0.5 text-amber-400" />
              <div className="min-w-0 flex-1">
                <p className="text-xs font-black uppercase tracking-widest text-amber-300">
                  Account Verification Required
                </p>
                <p className="mt-1 text-sm font-medium text-amber-100">
                  Your admin verification is still {formattedKycStatus || 'Pending'}. Complete your KYC details and the second OTP verification step.
                </p>
                <button
                  type="button"
                  onClick={() => navigate(verifyAccountRoute)}
                  className="mt-3 rounded-xl border border-amber-400/40 bg-amber-400/10 px-3 py-2 text-[11px] font-black uppercase tracking-widest text-amber-200 transition hover:bg-amber-400/20"
                >
                  Verify Account
                </button>
              </div>
            </div>
          </div>
        )}

        <AssetDetail asset={selectedAsset} onBack={() => setSelectedAsset(null)} />
        <BottomNav
          activeTab={activeTab}
          onTabChange={handleTabChange}
        />
      </div>
    );
  }

  return (
    <div className={`w-full ${DASHBOARD_MAX_WIDTH_CLASS} mx-auto min-h-screen pb-24 relative overflow-x-hidden bg-[#050505]`}>
      <div
        className={`fixed top-0 left-1/2 -translate-x-1/2 w-full ${DASHBOARD_MAX_WIDTH_CLASS} h-[40vh] pointer-events-none -z-10 bg-gradient-to-b from-emerald-500/5 to-transparent`}
      />
      <div className="fixed bottom-0 right-0 w-64 h-64 blur-[120px] pointer-events-none -z-10 bg-emerald-500/5" />
      <div className="fixed top-1/2 left-0 w-64 h-64 blur-[120px] pointer-events-none -z-10 bg-emerald-500/5" />

      {activeTab !== 'Profile' && <Header profileRoute={TAB_TO_ROUTE.Profile} brandName={siteBrandName} />}

      {requiresAdminVerification && (
        <div className="mx-4 mt-4 rounded-2xl border border-amber-500/30 bg-amber-500/10 p-4">
          <div className="flex items-start gap-3">
            <AlertTriangle size={18} className="mt-0.5 text-amber-400" />
            <div className="min-w-0 flex-1">
              <p className="text-xs font-black uppercase tracking-widest text-amber-300">
                Account Verification Required
              </p>
              <p className="mt-1 text-sm font-medium text-amber-100">
                Your admin verification is still {formattedKycStatus || 'Pending'}. Complete your KYC details and the second OTP verification step.
              </p>
              <button
                type="button"
                onClick={() => navigate(verifyAccountRoute)}
                className="mt-3 rounded-xl border border-amber-400/40 bg-amber-400/10 px-3 py-2 text-[11px] font-black uppercase tracking-widest text-amber-200 transition hover:bg-amber-400/20"
              >
                Verify Account
              </button>
            </div>
          </div>
        </div>
      )}

      <main>
        <Routes>
          <Route path="/" element={<div />} />
          <Route path="/dashboard" element={<div />} />

          <Route path="/dashboard/home" element={<HomeDashboard onAssetClick={handleAssetSelect} onOpenWatchlist={() => navigate('/dashboard/watchlist')} />} />
          <Route path="/dashboard/watchlist" element={<WatchlistPage onBack={() => navigate('/dashboard/home')} onAssetClick={handleAssetSelect} />} />
          <Route
            path="/dashboard/market"
            element={(
              <TradePage
                onOpenTradingDesk={() => setIsTradingDeskOpen(true)}
                onAssetClick={handleAssetSelect}
              />
            )}
          />
          <Route
            path="/dashboard/trade"
            element={(
              <TradePage
                onOpenTradingDesk={() => setIsTradingDeskOpen(true)}
                onAssetClick={handleAssetSelect}
              />
            )}
          />
          <Route path="/dashboard/copy" element={<InvestAndEarnPage onAssetClick={handleAssetSelect} />} />
          <Route path="/dashboard/copy/:marketType" element={<InvestAndEarnPage onAssetClick={handleAssetSelect} />} />
          <Route path="/dashboard/wallet" element={<WalletPage />} />
          <Route path="/dashboard/profile" element={<ProfilePage />} />

          <Route path="*" element={<Navigate to={TAB_TO_ROUTE.Home} replace />} />
        </Routes>
      </main>

      <BottomNav activeTab={activeTab} onTabChange={handleTabChange} />

      {isTradingDeskOpen && (
        <TradingDesk
          onClose={() => setIsTradingDeskOpen(false)}
          onSelectAsset={(asset) => {
            setIsTradingDeskOpen(false);
            handleAssetSelect(asset);
          }}
        />
      )}

      <ChaportLiveChat />
    </div>
  );
};

const App: React.FC = () => (
  <BrowserRouter>
    <MarketProvider>
      <AppContent />
    </MarketProvider>
  </BrowserRouter>
);

export default App;
