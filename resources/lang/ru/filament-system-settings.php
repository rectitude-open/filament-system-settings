<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Системные настройки',
        'group' => 'Настройки',
    ],
    'tab' => [
        'application' => 'Приложение',
        'mail' => 'Почта',
        'security' => 'Безопасность',
    ],
    'application' => [
        'site_name' => 'Название сайта',
        'site_title' => 'Заголовок сайта',
        'site_description' => 'Описание сайта',
        'site_logo' => 'Логотип сайта',
        'site_favicon' => 'Favicon сайта',
    ],
    'mail' => [
        'from_email' => 'Email отправителя',
        'from_name' => 'Имя отправителя',
        'host' => 'Хост',
        'port' => 'Порт',
        'username' => 'Имя пользователя',
        'password' => 'Пароль',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Лимит попыток входа',
        'login_attempts_lockout_window' => 'Окно блокировки',
        'login_attempts_lockout_attempts' => 'Попытки блокировки',
        'login_attempts_lockout_duration' => 'Длительность блокировки',
        'enable_login_captcha' => 'Включить капчу для входа',
    ],
];
