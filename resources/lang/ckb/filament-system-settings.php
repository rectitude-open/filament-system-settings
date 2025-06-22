<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'ڕێکخستنە سیستەمەکان',
        'group' => 'ڕێکخستنەکان',
    ],
    'tab' => [
        'application' => 'بەرنامە',
        'mail' => 'ئیمەیڵ',
        'security' => 'پاراستن',
    ],
    'mail' => [
        'from_email' => 'ئیمەیڵی نێردەر',
        'from_name' => 'ناوی نێردەر',
        'host' => 'هاوپۆل',
        'port' => 'بەندر',
        'username' => 'ناوی بەکارهێنەر',
        'password' => 'وشەی نهێنی',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'سنووردانی هەوڵەکانی چوونەژوورەوە',
        'login_attempts_lockout_window' => 'کاتژمێری قفلکردن',
        'login_attempts_lockout_attempts' => 'ژمارەی هەوڵەکانی قفلکردن',
        'login_attempts_lockout_duration' => 'ماوەی قفلکردن',
        'enable_login_captcha' => 'چالاککردنی کابتچای چوونەژوورەوە',
    ],
];
