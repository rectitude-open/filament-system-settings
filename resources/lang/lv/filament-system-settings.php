<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Sistēmas iestatījumi',
        'group' => 'Iestatījumi',
    ],
    'tab' => [
        'application' => 'Lietotne',
        'mail' => 'Pasts',
        'security' => 'Drošība',
    ],
    'application' => [
        'site_name' => 'Vietnes nosaukums',
        'site_url' => 'Vietnes URL',
        'site_title' => 'Vietnes virsraksts',
        'site_description' => 'Vietnes apraksts',
        'site_logo' => 'Vietnes logotips',
        'site_favicon' => 'Vietnes favicon',
    ],
    'mail' => [
        'from_email' => 'Sūtītāja e-pasts',
        'from_name' => 'Sūtītāja vārds',
        'host' => 'Resurss',
        'port' => 'Ports',
        'username' => 'Lietotājvārds',
        'password' => 'Parole',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Pieteikšanās mēģinājumu limits',
        'login_attempts_lockout_window' => 'Bloķēšanas logs',
        'login_attempts_lockout_attempts' => 'Bloķēšanas mēģinājumu skaits',
        'login_attempts_lockout_duration' => 'Bloķēšanas ilgums',
        'enable_login_captcha' => 'Aktivizēt pieteikšanās captcha',
    ],
];
