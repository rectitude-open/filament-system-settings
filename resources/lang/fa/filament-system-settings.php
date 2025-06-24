<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'تنظیمات سیستم',
        'group' => 'تنظیمات',
    ],
    'tab' => [
        'application' => 'برنامه',
        'mail' => 'ایمیل',
        'security' => 'امنیت',
    ],
    'application' => [
        'site_name' => 'نام سایت',
        'site_title' => 'عنوان سایت',
        'site_description' => 'توضیحات سایت',
        'site_logo' => 'لوگوی سایت',
        'site_favicon' => 'فاوآیکون سایت',
    ],
    'mail' => [
        'from_email' => 'ایمیل فرستنده',
        'from_name' => 'نام فرستنده',
        'host' => 'میزبان',
        'port' => 'پورت',
        'username' => 'نام کاربری',
        'password' => 'رمز عبور',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'محدودیت نرخ تلاش‌های ورود',
        'login_attempts_lockout_window' => 'پنجره قفل تلاش‌های ورود',
        'login_attempts_lockout_attempts' => 'تعداد تلاش‌های قفل',
        'login_attempts_lockout_duration' => 'مدت زمان قفل',
        'enable_login_captcha' => 'فعال‌سازی کپچا ورود',
    ],
];
