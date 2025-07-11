<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Configuración del sistema',
        'group' => 'Configuraciones',
    ],
    'tab' => [
        'application' => 'Aplicación',
        'mail' => 'Correo',
        'security' => 'Seguridad',
    ],
    'application' => [
        'site_name' => 'Nombre del sitio',
        'site_title' => 'Título del sitio',
        'site_description' => 'Descripción del sitio',
        'site_logo' => 'Logo del sitio',
        'site_favicon' => 'Favicon del sitio',
    ],
    'mail' => [
        'from_email' => 'Correo del remitente',
        'from_name' => 'Nombre del remitente',
        'host' => 'Servidor',
        'port' => 'Puerto',
        'username' => 'Usuario',
        'password' => 'Contraseña',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Límite de intentos de inicio de sesión',
        'login_attempts_lockout_window' => 'Ventana de bloqueo',
        'login_attempts_lockout_attempts' => 'Intentos de bloqueo',
        'login_attempts_lockout_duration' => 'Duración del bloqueo',
        'enable_login_captcha' => 'Habilitar captcha de inicio de sesión',
    ],
];
