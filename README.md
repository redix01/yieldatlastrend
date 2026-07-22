# Yield At Last Trend

A full-stack stock and forex trading platform.

## Structure

- `backend/` - Laravel application with admin panel, API, and dashboard SPA
- `tradez/` - Landing page assets and source
- `web/` - Legacy web dashboard source (integrated into `backend/dashboard/`)
- `video-studio/` - Remotion video studio project

## Quick start

```bash
cd backend
composer install
npm install
npm run build
php artisan serve
```

## URLs

- Landing page: `/`
- User dashboard: `/dashboard/home`
- Admin panel: `/admin/login`
