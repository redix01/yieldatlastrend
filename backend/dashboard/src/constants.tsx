
import { Asset, ChartDataPoint, MarketMover } from './types';

export const PORTFOLIO_HISTORY: ChartDataPoint[] = [
  { time: '09:00', value: 2850000 },
  { time: '10:00', value: 2875000 },
  { time: '11:00', value: 2920000 },
  { time: '12:00', value: 2900000 },
  { time: '13:00', value: 2950000 },
  { time: '14:00', value: 2980000 },
  { time: '15:00', value: 3010000 },
  { time: '16:00', value: 3020287.58 },
];

export const MY_ASSETS: Asset[] = [
  { symbol: 'AAPL', name: 'Apple Inc.', shares: 50.00, price: 187.45, change: 234, changePercent: 1.25, isCrypto: false },
  { symbol: 'TSLA', name: 'Tesla, Inc.', shares: 30.00, price: 248.50, change: -412, changePercent: -1.63, isCrypto: false },
  { symbol: 'AMD', name: 'Advanced Micro Devices', shares: 80.00, price: 145.20, change: 3634, changePercent: 50.9, isCrypto: false },
  { symbol: 'QQQ', name: 'Invesco QQQ Trust', shares: 74.00, price: 425.10, change: 11335, changePercent: 12.5, isCrypto: false },
  { symbol: 'NVDA', name: 'NVIDIA Corporation', shares: 20.00, price: 892.10, change: 1547, changePercent: 1.74, isCrypto: false },
];

export const WATCHLIST: Asset[] = [
  { symbol: 'MSFT', name: 'Microsoft Corporation', shares: 0, price: 425.22, change: 321, changePercent: 0.76, isCrypto: false },
  { symbol: 'AMZN', name: 'Amazon.com, Inc.', shares: 0, price: 178.35, change: -210, changePercent: -1.17, isCrypto: false },
  { symbol: 'GOOGL', name: 'Alphabet Inc.', shares: 0, price: 165.80, change: 145, changePercent: 0.88, isCrypto: false },
];

export const TOP_GAINERS: MarketMover[] = [
  { symbol: 'A01', change: 6.1 },
  { symbol: 'AD01', change: 6.1 },
  { symbol: 'AA', change: 5.9 },
];

export const TOP_LOSERS: MarketMover[] = [
  { symbol: 'AA03', change: -6.7 },
  { symbol: 'AD02', change: -6.4 },
  { symbol: 'AB', change: -5.3 },
];

export const HEATMAP_DATA = [
  { symbol: 'A', change: -0.2 },
  { symbol: 'A01', change: 6.1 },
  { symbol: 'A02', change: 0.3 },
  { symbol: 'A03', change: 2.4 },
  { symbol: 'A04', change: -1.1 },
  { symbol: 'AA', change: 5.9 },
  { symbol: 'AA01', change: 1.6 },
  { symbol: 'AA02', change: -1.2 },
  { symbol: 'AA03', change: -6.7 },
  { symbol: 'AAI', change: 5.9 },
  { symbol: 'AAI1', change: 4.3 },
  { symbol: 'AAI2', change: 3.0 },
  { symbol: 'AAPL', change: -0.3 },
  { symbol: 'AAVE', change: -1.3 },
  { symbol: 'AB', change: -5.3 },
  { symbol: 'ABBV', change: 1.6 },
];
