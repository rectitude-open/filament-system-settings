<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Системні налаштування',
        'group' => 'Налаштування',
    ],
    'tab' => [
        'application' => 'Додаток',
        'mail' => 'Пошта',
        'security' => 'Безпека',
    ],
    'mail' => [
        'from_email' => 'Електронна пошта відправника',
        'from_name' => 'Ім’я відправника',
        'host' => 'Хост',
        'port' => 'Порт',
        'username' => 'Ім’я користувача',
        'password' => 'Пароль',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Ліміт спроб входу',
        'login_attempts_lockout_window' => 'Вікно блокування',
        'login_attempts_lockout_attempts' => 'Кількість спроб блокування',
        'login_attempts_lockout_duration' => 'Тривалість блокування',
        'enable_login_captcha' => 'Увімкнути captcha для входу',
    ],
];
