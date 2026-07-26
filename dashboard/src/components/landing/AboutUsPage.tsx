import React from 'react';
import LandingLegalPage from './LandingLegalPage';
import { resolveBrandName } from '../../lib/branding';

const AboutUsPage: React.FC = () => {
  const brandName = resolveBrandName(document.documentElement?.dataset?.brand);

  return (
    <LandingLegalPage
      eyebrow="Company"
      title={`About ${brandName}`}
      summary={`${brandName} is an investment platform focused on clear market access, practical automation, and portfolio tools designed for both developing and experienced investors.`}
      lastUpdated="February 17, 2026"
      sections={[
        {
          heading: 'Who We Are',
          paragraphs: [
            `${brandName} is built to simplify complex investment workflows without removing the depth needed by active investors.`,
            'Our product combines multi-asset market visibility, portfolio controls, and copy-trading workflows inside one dashboard.',
          ],
        },
        {
          heading: 'What We Build',
          paragraphs: [
            'We provide tools for order placement, account funding, watchlists, and strategy monitoring across supported markets.',
            'Our design approach prioritizes speed, reliability, and clear decision support rather than cluttered interfaces.',
          ],
        },
        {
          heading: 'How We Operate',
          paragraphs: [
            `${brandName} maintains operational controls for account verification, transaction review, and security monitoring.`,
            'Platform policies and legal disclosures are maintained as separate documents so users can review obligations and risks before investing.',
          ],
        },
      ]}
    />
  );
};

export default AboutUsPage;
