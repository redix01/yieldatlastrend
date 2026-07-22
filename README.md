# Yield At Last Trend

Laravel-based stock and forex trading platform (landing page, user dashboard, admin panel, API).

## Stack

- Laravel 12
- Sanctum token auth
- SQLite (default)
- UUID-based Eloquent models/tables
- React dashboard SPA under `dashboard/`
- Inertia.js admin panel under `resources/js/Pages/Admin/`

## Quick Start

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run build
php artisan serve
```

## URLs

- Landing page: `/`
- User dashboard: `/dashboard/home`
- Admin panel: `/admin/login`
- API base: `/api/v1`

## Demo Account

```text
email: tommygreymassey@yahoo.com
password: password
```

## Quality Checks

```bash
./vendor/bin/pint
php artisan test
```

## Stock Sync

Set `FINNHUB_API_KEY` in `.env`, then run:

```bash
php artisan stocks:sync-finnhub
```

## Deployment Notes

This repository contains only the main Laravel application at the root level.
The legacy `web/`, template `tradez/`, and `video-studio/` source folders have been removed from this repo.
