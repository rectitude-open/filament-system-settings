<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'Paramètres du système',
        'group' => 'Paramètres',
    ],
    'tab' => [
        'application' => 'Application',
        'mail' => 'Courriel',
        'security' => 'Sécurité',
    ],
    'mail' => [
        'from_email' => 'Courriel de l’expéditeur',
        'from_name' => 'Nom de l’expéditeur',
        'host' => 'Hôte',
        'port' => 'Port',
        'username' => 'Nom d’utilisateur',
        'password' => 'Mot de passe',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'Limite de tentatives de connexion',
        'login_attempts_lockout_window' => 'Fenêtre de verrouillage',
        'login_attempts_lockout_attempts' => 'Nombre de tentatives de verrouillage',
        'login_attempts_lockout_duration' => 'Durée du verrouillage',
        'enable_login_captcha' => 'Activer le captcha de connexion',
    ],
];
