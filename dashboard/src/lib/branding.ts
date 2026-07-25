export const DEFAULT_BRAND_NAME = 'App';

export function resolveBrandName(value?: string | null): string {
  const normalized = String(value ?? '').trim();

  if (normalized.length === 0) {
    return DEFAULT_BRAND_NAME;
  }

  return normalized;
}

export function resolveBrandInitial(value?: string | null): string {
  const brandName = resolveBrandName(value);
  const firstAlphaNumeric = brandName.replace(/[^a-z0-9]/gi, '').charAt(0);

  return (firstAlphaNumeric || 'A').toUpperCase();
}

export function resolveSupportEmail(value?: string | null, fallbackEmail?: string | null): string {
  if (fallbackEmail) {
    const trimmed = String(fallbackEmail).trim();
    if (trimmed.length > 0) {
      return trimmed;
    }
  }

  const brandName = resolveBrandName(value);
  const domain = brandName
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, '')
    .replace(/^(app|yieldatlastrend)$/, 'yieldatlastrend');

  return `support@${domain || 'yieldatlastrend'}.com`;
}
