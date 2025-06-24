<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'إعدادات النظام',
        'group' => 'الإعدادات',
    ],
    'tab' => [
        'application' => 'التطبيق',
        'mail' => 'البريد الإلكتروني',
        'security' => 'الأمان',
    ],
    'application' => [
        'site_name' => 'اسم الموقع',
        'site_title' => 'عنوان الموقع',
        'site_description' => 'وصف الموقع',
        'site_logo' => 'شعار الموقع',
        'site_favicon' => 'أيقونة الموقع',
    ],
    'mail' => [
        'from_email' => 'البريد الإلكتروني للمرسل',
        'from_name' => 'اسم المرسل',
        'host' => 'المضيف',
        'port' => 'المنفذ',
        'username' => 'اسم المستخدم',
        'password' => 'كلمة المرور',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'حد معدل محاولات تسجيل الدخول',
        'login_attempts_lockout_window' => 'نافذة قفل محاولات تسجيل الدخول',
        'login_attempts_lockout_attempts' => 'عدد محاولات القفل',
        'login_attempts_lockout_duration' => 'مدة القفل',
        'enable_login_captcha' => 'تفعيل كابتشا تسجيل الدخول',
    ],
];
