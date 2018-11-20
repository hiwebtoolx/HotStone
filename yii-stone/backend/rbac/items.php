<?php
return [
    'Guest' => [
        'type' => 1,
        'ruleName' => 'Guest',
    ],
    'Administrator' => [
        'type' => 1,
        'ruleName' => 'Admin',
    ],
    '/user/admin/index' => [
        'type' => 2,
    ],
    '/user/admin/create' => [
        'type' => 2,
    ],
    '/user/admin/update' => [
        'type' => 2,
    ],
    '/user/admin/update-profile' => [
        'type' => 2,
    ],
    '/user/admin/info' => [
        'type' => 2,
    ],
    '/user/admin/switch' => [
        'type' => 2,
    ],
    '/user/admin/assignments' => [
        'type' => 2,
    ],
    '/user/admin/confirm' => [
        'type' => 2,
    ],
    '/user/admin/delete' => [
        'type' => 2,
    ],
    '/user/admin/block' => [
        'type' => 2,
    ],
    '/user/admin/resend-password' => [
        'type' => 2,
    ],
    '/user/admin/*' => [
        'type' => 2,
    ],
    '/user/profile/index' => [
        'type' => 2,
    ],
    '/user/profile/show' => [
        'type' => 2,
    ],
    '/user/profile/*' => [
        'type' => 2,
    ],
    '/user/recovery/request' => [
        'type' => 2,
    ],
    '/user/recovery/reset' => [
        'type' => 2,
    ],
    '/user/recovery/*' => [
        'type' => 2,
    ],
    '/user/registration/register' => [
        'type' => 2,
    ],
    '/user/registration/connect' => [
        'type' => 2,
    ],
    '/user/registration/confirm' => [
        'type' => 2,
    ],
    '/user/registration/resend' => [
        'type' => 2,
    ],
    '/user/registration/*' => [
        'type' => 2,
    ],
    '/user/security/auth' => [
        'type' => 2,
    ],
    '/user/security/login' => [
        'type' => 2,
    ],
    '/user/security/logout' => [
        'type' => 2,
    ],
    '/user/security/*' => [
        'type' => 2,
    ],
    '/user/settings/profile' => [
        'type' => 2,
    ],
    '/user/settings/account' => [
        'type' => 2,
    ],
    '/user/settings/confirm' => [
        'type' => 2,
    ],
    '/user/settings/networks' => [
        'type' => 2,
    ],
    '/user/settings/disconnect' => [
        'type' => 2,
    ],
    '/user/settings/delete' => [
        'type' => 2,
    ],
    '/user/settings/*' => [
        'type' => 2,
    ],
    '/user/*' => [
        'type' => 2,
    ],
    'Staff' => [
        'type' => 1,
        'ruleName' => 'Staff',
    ],
    'Therapist' => [
        'type' => 1,
        'ruleName' => 'Therapist',
        'children' => [
            'Gii',
            'Ajax Requests',
            'Language',
            'Front House check List',
            'Production Area',
            'Hair & Mackup Checklist',
            'Salon Area Checklist',
            'Spa checklist',
            'Manicure Checklist',
            'Common area checklist',
            'Customers Health',
            'Customers Acrylic',
            'Customers Body Scrub',
            'Customers Facial',
            'Customers Keratin',
            'Customers Manicur',
            'Customers massage',
            'Customers Visits',
            'Branches',
        ],
    ],
    '/debug/default/toolbar' => [
        'type' => 2,
    ],
    '/datecontrol/parse/convert' => [
        'type' => 2,
    ],
    '/productionarea/*' => [
        'type' => 2,
    ],
    '/hairmackup/*' => [
        'type' => 2,
    ],
    '/salonarea/*' => [
        'type' => 2,
    ],
    '/spa/*' => [
        'type' => 2,
    ],
    '/manicure/*' => [
        'type' => 2,
    ],
    '/commonarea/*' => [
        'type' => 2,
    ],
    '/health/*' => [
        'type' => 2,
    ],
    '/acrylic/*' => [
        'type' => 2,
    ],
    '/scrub/*' => [
        'type' => 2,
    ],
    '/facial/*' => [
        'type' => 2,
    ],
    '/keratin/*' => [
        'type' => 2,
    ],
    'Manage Users' => [
        'type' => 2,
        'children' => [
            '/user/*',
        ],
    ],
    '/manicurep/*' => [
        'type' => 2,
    ],
    '/massage/*' => [
        'type' => 2,
    ],
    '/visits/*' => [
        'type' => 2,
    ],
    '/gii/*' => [
        'type' => 2,
    ],
    'Gii' => [
        'type' => 2,
        'children' => [
            '/gii/*',
        ],
    ],
    '/branch/*' => [
        'type' => 2,
    ],
    'Ajax Requests' => [
        'type' => 2,
        'children' => [
            '/debug/default/toolbar',
            '/datecontrol/parse/convert',
        ],
    ],
    '/translatemanager/language/list' => [
        'type' => 2,
    ],
    'Language' => [
        'type' => 2,
        'children' => [
            '/translatemanager/language/list',
            '/translatemanager/*',
        ],
    ],
    '/translatemanager/*' => [
        'type' => 2,
    ],
    'Front House check List' => [
        'type' => 2,
        'children' => [
            '/fronthouse/*',
            'Production Area',
            'Hair & Mackup Checklist',
            'Salon Area Checklist',
            'Spa checklist',
            'Manicure Checklist',
            'Common area checklist',
            'Customers Health',
            'Customers Acrylic',
            'Customers Body Scrub',
            'Customers Facial',
        ],
    ],
    '/fronthouse/*' => [
        'type' => 2,
    ],
    'Production Area' => [
        'type' => 2,
        'children' => [
            '/productionarea/*',
        ],
    ],
    'Hair & Mackup Checklist' => [
        'type' => 2,
        'children' => [
            '/hairmackup/*',
        ],
    ],
    'Salon Area Checklist' => [
        'type' => 2,
        'children' => [
            '/salonarea/*',
        ],
    ],
    'Spa checklist' => [
        'type' => 2,
        'children' => [
            '/spa/*',
        ],
    ],
    'Manicure Checklist' => [
        'type' => 2,
        'children' => [
            '/manicure/*',
        ],
    ],
    'Common area checklist' => [
        'type' => 2,
        'children' => [
            '/commonarea/*',
        ],
    ],
    'Customers Health' => [
        'type' => 2,
        'children' => [
            '/health/*',
        ],
    ],
    'Customers Acrylic' => [
        'type' => 2,
        'children' => [
            '/acrylic/*',
        ],
    ],
    'Customers Body Scrub' => [
        'type' => 2,
        'children' => [
            '/scrub/*',
        ],
    ],
    'Customers Facial' => [
        'type' => 2,
        'children' => [
            '/facial/*',
        ],
    ],
    'Customers Keratin' => [
        'type' => 2,
        'children' => [
            '/keratin/*',
        ],
    ],
    'Customers Manicur' => [
        'type' => 2,
        'children' => [
            '/manicurep/*',
        ],
    ],
    'Customers massage' => [
        'type' => 2,
        'children' => [
            '/massage/*',
        ],
    ],
    'Customers Visits' => [
        'type' => 2,
        'children' => [
            '/visits/*',
        ],
    ],
    'Branches' => [
        'type' => 2,
        'children' => [
            '/branch/*',
        ],
    ],
];
