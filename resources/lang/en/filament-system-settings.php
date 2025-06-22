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
