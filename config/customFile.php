<?php

// this is a costum config file added to handle config variable
// used in the entire system 
// with this you write a middleware to check emails and know adminasators
return [
    'adminisattors' => [
        'super-admin' => [
            'example.1@superAdmin.com',
            'example.2@superAdmin.com'
        ],
        'admin' => [
            'example.1@admin.com',
            'example.2@admin.com'
        ]
    ]
];