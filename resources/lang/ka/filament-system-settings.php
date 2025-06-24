<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'სისტემის პარამეტრები',
        'group' => 'პარამეტრები',
    ],
    'tab' => [
        'application' => 'აპლიკაცია',
        'mail' => 'ფოსტა',
        'security' => 'უსაფრთხოება',
    ],
    'application' => [
        'site_name' => 'საიტის სახელი',
        'site_title' => 'საიტის სათაური',
        'site_description' => 'საიტის აღწერა',
        'site_logo' => 'საიტის ლოგო',
        'site_favicon' => 'საიტის ფავიკონი',
    ],
    'mail' => [
        'from_email' => 'გამგზავნის ელფოსტა',
        'from_name' => 'გამგზავნის სახელი',
        'host' => 'ჰოსტი',
        'port' => 'პორტი',
        'username' => 'მომხმარებლის სახელი',
        'password' => 'პაროლი',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'შესვლის მცდელობების ლიმიტი',
        'login_attempts_lockout_window' => 'დაბლოკვის ფანჯარა',
        'login_attempts_lockout_attempts' => 'დაბლოკვის მცდელობები',
        'login_attempts_lockout_duration' => 'დაბლოკვის ხანგრძლივობა',
        'enable_login_captcha' => 'შესვლის კაპჩას ჩართვა',
    ],
];
