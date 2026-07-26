<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;

class SiteSettings
{
    public const CACHE_KEY = 'admin_panel_settings';

    /**
     * @return array<string, mixed>
     */
    public static function defaults(): array
    {
        return [
            'brand_name' => env('APP_NAME', 'Yield At Last Trend'),
            'site_mode' => 'live',
            'deposits_enabled' => true,
            'withdrawals_enabled' => true,
            'require_kyc_for_deposits' => false,
            'require_kyc_for_withdrawals' => true,
            'session_timeout_minutes' => 60,
            'support_email' => env('SUPPORT_EMAIL', 'support@' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', env('APP_NAME', 'yieldatlastrend'))) . '.com'),
            'admin_notification_email' => null,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function get(): array
    {
        return [
            ...self::defaults(),
            ...Cache::get(self::CACHE_KEY, []),
        ];
    }
}
