<?php

declare(strict_types=1);

return [
    'nav' => [
        'label' => 'ការកំណត់ប្រព័ន្ធ',
        'group' => 'ការកំណត់',
    ],
    'tab' => [
        'application' => 'កម្មវិធី',
        'mail' => 'អ៊ីមែល',
        'security' => 'សុវត្ថិភាព',
    ],
    'mail' => [
        'from_email' => 'អ៊ីមែលអ្នកផ្ញើ',
        'from_name' => 'ឈ្មោះអ្នកផ្ញើ',
        'host' => 'ម៉ាស៊ីន',
        'port' => 'ច្រក',
        'username' => 'ឈ្មោះអ្នកប្រើ',
        'password' => 'ពាក្យសម្ងាត់',
    ],
    'security' => [
        'login_attempts_rate_limit' => 'កំណត់អត្រាការបញ្ចូល',
        'login_attempts_lockout_window' => 'បង្អួចចាក់សោ',
        'login_attempts_lockout_attempts' => 'ចំនួនការចាក់សោ',
        'login_attempts_lockout_duration' => 'រយៈពេលចាក់សោ',
        'enable_login_captcha' => 'បើក CAPTCHA ចូល',
    ],
];
