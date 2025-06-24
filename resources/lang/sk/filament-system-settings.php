<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Systémové nastavenia',
        'group' => 'Nastavenia',
    ],
    'tab' => [
        'application' => 'Aplikácia',
        'mail' => 'Mail',
        'security' => 'Bezpečnosť',
    ],
    'application' => [
        'site_name' => 'Názov stránky',
        'site_title' => 'Nadpis stránky',
        'site_description' => 'Popis stránky',
        'site_logo' => 'Logo stránky',
        'site_favicon' => 'Favicon stránky',
    ],
    'mail' => [
        'from_email' => 'E-mail odosielateľa',
        'from_name' => 'Meno odosielateľa',
        'host' => 'Hostiteľ',
        'port' => 'Port',
        'username' => 'Používateľské meno',
        'password' => 'Heslo',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limit pokusov o prihlásenie',
        'login_attempts_lockout_window' => 'Okno zablokovania',
        'login_attempts_lockout_attempts' => 'Počet pokusov o zablokovanie',
        'login_attempts_lockout_duration' => 'Dĺžka zablokovania',
        'enable_login_captcha' => 'Povoliť captcha pri prihlásení',
    ],
];
