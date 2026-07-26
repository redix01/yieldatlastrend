import React from 'react';
import LandingLegalPage from './LandingLegalPage';
import { resolveBrandName } from '../../lib/branding';

const TermsOfServicePage: React.FC = () => {
  const brandName = resolveBrandName(document.documentElement?.dataset?.brand);

  return (
    <LandingLegalPage
      eyebrow="Legal Terms"
      title="Terms of Service"
      summary={`These terms govern access to and use of ${brandName} services. By using the platform, you agree to comply with these conditions.`}
      lastUpdated="February 17, 2026"
      sections={[
        {
          heading: 'Account Eligibility',
          paragraphs: [
            'You must provide accurate account information and maintain control of your login credentials.',
            'Access may be restricted based on verification status, jurisdiction, or compliance requirements.',
          ],
        },
        {
          heading: 'Platform Use',
          paragraphs: [
            'You agree to use the platform lawfully and not attempt unauthorized access, manipulation, or abuse of platform systems.',
            `${brandName} may suspend or terminate access for policy violations, security risks, or legal obligations.`,
          ],
        },
        {
          heading: 'Service Scope and Liability',
          paragraphs: [
            'Platform information is provided for operational use and does not constitute investment, tax, or legal advice.',
            `${brandName} is not responsible for investment losses resulting from market conditions, user decisions, or external service disruptions.`,
          ],
        },
      ]}
    />
  );
};

export default TermsOfServicePage;
