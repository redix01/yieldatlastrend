<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = strtolower((string) env('ADMIN_EMAIL', 'admin@yieldatlastrend.com'));
        $password = (string) env('ADMIN_PASSWORD', 'password');

        $notificationsEnabled = filter_var(
            (string) env('ADMIN_NOTIFICATION_EMAIL_ALERTS', 'true'),
            FILTER_VALIDATE_BOOL,
            FILTER_NULL_ON_FAILURE
        );

        User::query()->updateOrCreate(
            ['email' => $email],
            [
                'username' => (string) env('ADMIN_USERNAME', 'yieldadmin'),
                'name' => (string) env('ADMIN_NAME', 'Yield Admin'),
                'password' => Hash::make($password),
                'phone' => (string) env('ADMIN_PHONE', '+1 (555) 010-0000'),
                'country' => (string) env('ADMIN_COUNTRY', 'United States'),
                'is_admin' => true,
                'membership_tier' => (string) env('ADMIN_MEMBERSHIP_TIER', 'pro'),
                'kyc_status' => (string) env('ADMIN_KYC_STATUS', 'verified'),
                'notification_email_alerts' => $notificationsEnabled ?? true,
                'timezone' => (string) env('ADMIN_TIMEZONE', 'America/New_York'),
                'email_verified_at' => now(),
            ]
        );

        $this->command?->info("Admin user seeded: {$email}");
        $this->command?->info("Password: {$password}");
    }
}
