<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Համակարգի կարգավորումներ',
        'group' => 'Կարգավորումներ',
    ],
    'tab' => [
        'application' => 'Դիմում',
        'mail' => 'Էլ. փոստ',
        'security' => 'Անվտանգություն',
    ],
    'mail' => [
        'from_email' => 'Ուղարկողի էլ. փոստ',
        'from_name' => 'Ուղարկողի անուն',
        'host' => 'Հոսթ',
        'port' => 'Պորտ',
        'username' => 'Օգտանուն',
        'password' => 'Գաղտնաբառ',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Մուտքի փորձերի սահմանաչափ',
        'login_attempts_lockout_window' => 'Արգելափակման պատուհան',
        'login_attempts_lockout_attempts' => 'Արգելափակման փորձերի քանակ',
        'login_attempts_lockout_duration' => 'Արգելափակման տևողություն',
        'enable_login_captcha' => 'Միացնել մուտքի captcha-ն',
    ],
    'application' => [
        'site_name' => 'Կայքի անունը',
        'site_url' => 'Կայքի հղումը',
        'site_title' => 'Կայքի վերնագիրը',
        'site_description' => 'Կայքի նկարագրությունը',
        'site_logo' => 'Կայքի լոգոն',
        'site_favicon' => 'Կայքի favicon',
    ],
];
