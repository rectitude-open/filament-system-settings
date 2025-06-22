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
