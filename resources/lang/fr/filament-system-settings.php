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
    'application' => [
        'site_name' => 'Nom du site',
        'site_url' => 'URL du site',
        'site_title' => 'Titre du site',
        'site_description' => 'Description du site',
        'site_logo' => 'Logo du site',
        'site_favicon' => 'Favicon du site',
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
