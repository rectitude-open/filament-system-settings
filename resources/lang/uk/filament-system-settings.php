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
    'application' => [
        'site_name' => 'Назва сайту',
        'site_url' => 'URL сайту',
        'site_title' => 'Заголовок сайту',
        'site_description' => 'Опис сайту',
        'site_logo' => 'Логотип сайту',
        'site_favicon' => 'Favicon сайту',
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
