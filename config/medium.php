<?php

return [
    'client-id' => env('CLIENT-ID'),
    'client-secret' => env('CLIENT-SECRET'),
    'redirect-url' => env('http://example.com/callback'),
    'state' => 'somesecret',
    'scopes' => 'scope1,scope2',
];