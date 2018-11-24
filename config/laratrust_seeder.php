<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Judge' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
        'Proofreader' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
        'Checker' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
        'Director' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
        'author' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
