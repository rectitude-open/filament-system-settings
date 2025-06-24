<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Ustawienia systemowe',
        'group' => 'Ustawienia',
    ],
    'tab' => [
        'application' => 'Aplikacja',
        'mail' => 'Poczta',
        'security' => 'Bezpieczeństwo',
    ],
    'application' => [
        'site_name' => 'Nazwa strony',
        'site_title' => 'Tytuł strony',
        'site_description' => 'Opis strony',
        'site_logo' => 'Logo strony',
        'site_favicon' => 'Favicon strony',
    ],
    'mail' => [
        'from_email' => 'E-mail nadawcy',
        'from_name' => 'Nazwa nadawcy',
        'host' => 'Host',
        'port' => 'Port',
        'username' => 'Nazwa użytkownika',
        'password' => 'Hasło',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limit prób logowania',
        'login_attempts_lockout_window' => 'Okno blokady',
        'login_attempts_lockout_attempts' => 'Liczba prób blokady',
        'login_attempts_lockout_duration' => 'Czas trwania blokady',
        'enable_login_captcha' => 'Włącz captcha logowania',
    ],
];
