<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Systémová nastavení',
        'group' => 'Nastavení',
    ],
    'tab' => [
        'application' => 'Aplikace',
        'mail' => 'Pošta',
        'security' => 'Zabezpečení',
    ],
    'application' => [
        'site_name' => 'Název webu',
        'site_title' => 'Titulek webu',
        'site_description' => 'Popis webu',
        'site_logo' => 'Logo webu',
        'site_favicon' => 'Favicon webu',
    ],
    'mail' => [
        'from_email' => 'E-mail odesílatele',
        'from_name' => 'Jméno odesílatele',
        'host' => 'Hostitel',
        'port' => 'Port',
        'username' => 'Uživatelské jméno',
        'password' => 'Heslo',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limit pokusů o přihlášení',
        'login_attempts_lockout_window' => 'Časový rámec zablokování',
        'login_attempts_lockout_attempts' => 'Počet pokusů pro zablokování',
        'login_attempts_lockout_duration' => 'Doba zablokování',
        'enable_login_captcha' => 'Povolit captcha při přihlášení',
    ],
];
