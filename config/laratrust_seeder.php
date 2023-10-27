<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'konsumen' => [
        ],
        'office' => [
            'provinsi' => 'c,r,u,d',
            'kota' => 'c,r,u,d',
            'kecamatan' => 'c,r,u,d',
            'kelurahan' => 'c,r,u,d',
            'zip' => 'c,r,u,d',
            'branch' => 'c,r,u,d',
            'area' => 'c,r,u,d',
            'position' => 'c,r,u,d',
            'employee' => 'c,r,u,d',
            'user' => 'c,r,u,d',
            'user-role' => 'c,r,u,d',
            'role' => 'c,r,u,d',
            'company' => 'c,r,u,d',
            'vaccine' => 'c,r,u,d',
            'job' => 'c,r,u,d',
            'education' => 'c,r,u,d',
            'country' => 'c,r,u,d',
            'relation' => 'c,r,u,d',
            'bank' => 'c,r,u,d',
            'supplier-sub-type' => 'c,r,u,d',
            'supplier' => 'c,r,u,d',
            'supplier-acc' => 'c,r,u,d',
            'package' => 'c,r,u,d',
            'register-package' => 'c,r,u,d',
            'account' => 'c,r,u,d',
            'period' => 'c,r,u,d',
            'transaction-header' => 'c,r,u,d',
            'transaction' => 'c,r,u,d',
        ],
        'agen' => [
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
