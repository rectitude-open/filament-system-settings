<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'System Settings',
        'group' => 'Settings',
    ],
    'tab' => [
        'application' => 'Application',
        'mail' => 'Mail',
        'security' => 'Security',
    ],
    'application' => [
        'site_name' => 'Site Name',
        'site_url' => 'Site URL',
        'site_title' => 'Site Title',
        'site_description' => 'Site Description',
        'site_logo' => 'Site Logo',
        'site_favicon' => 'Site Favicon',
    ],
    'mail' => [
        'from_email' => 'From Email',
        'from_name' => 'From Name',
        'host' => 'Host',
        'port' => 'Port',
        'username' => 'Username',
        'password' => 'Password',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Login Attempts Rate Limit',
        'login_attempts_lockout_window' => 'Login Attempts Lockout Window',
        'login_attempts_lockout_attempts' => 'Login Attempts Lockout Attempts',
        'login_attempts_lockout_duration' => 'Login Attempts Lockout Duration',
        'enable_login_captcha' => 'Enable Login Captcha',
    ],
];
