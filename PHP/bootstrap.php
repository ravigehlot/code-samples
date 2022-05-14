<?php
/**
 * Bootstraps vendor packages and provides
 * any data this app needs.
 */

$loader = include_once __DIR__ . '/vendor/autoload.php';

if ( ! $loader ) {
    throw new Exception( 'vendor/autoload.php missing please run `composer install`' );
}

$arrayToBeSorted = [  
    [
        'guest_id' => 177,
        'guest_type' => 'crew',
        'first_name' => 'Marco',
        'middle_name' => NULL,
        'last_name' => 'Burns',
        'gender' => 'M',
        'guest_booking' => [  
            [
                'booking_number' => 20008683,
                'ship_code' => 'OST',
                'room_no' => 'A0073',
                'start_time' => 1438214400,
                'end_time' => 1483142400,
                'is_checked_in' => true,
            ],
        ],
        'guest_account' => [  
            [
                'account_id' => 20009503,
                'status_id' => 2,
                'account_limit' => 0,
                'allow_charges' => true,
            ],
        ],
    ],
    [
        'guest_id' => 10000113,
        'guest_type' => 'crew',
        'first_name' => 'Bob Jr ',
        'middle_name' => 'Charles',
        'last_name' => 'Hemingway',
        'gender' => 'M',
        'guest_booking' => [  
            [
                'booking_number' => 10000013,
                'room_no' => 'B0092',
                'is_checked_in' => true,
            ],
        ],
        'guest_account' => [  
            [
                'account_id' => 10000522,
                'account_limit' => 300,
                'allow_charges' => true,
            ],
        ],
    ],
    [
        'guest_id' => 10000114,
        'guest_type' => 'crew',
        'first_name' => 'Al ',
        'middle_name' => 'Bert',
        'last_name' => 'Santiago',
        'gender' => 'M',
        'guest_booking' => [  
            [
                'booking_number' => 10000014,
                'room_no' => 'A0018',
                'is_checked_in' => true,
            ],
        ],
        'guest_account' => [  
            [
                'account_id' => 10000013,
                'account_limit' => 300,
                'allow_charges' => true,
            ],
        ],
    ],
    [
        'guest_id' => 10000115,
        'guest_type' => 'crew',
        'first_name' => 'Red ',
        'middle_name' => 'Ruby',
        'last_name' => 'Flowers ',
        'gender' => 'F',
        'guest_booking' => [  
            [
                'booking_number' => 10000015,
                'room_no' => 'A0051',
                'is_checked_in' => true,
            ],
        ],
        'guest_account' => [  
            [
                'account_id' => 10000519,
                'account_limit' => 300,
                'allow_charges' => true,
            ],
        ],
    ],
    [
        'guest_id' => 10000116,
        'guest_type' => 'crew',
        'first_name' => 'Ismael ',
        'middle_name' => 'Jean-Vital',
        'last_name' => 'Jammes',
        'gender' => 'M',
        'guest_booking' => [  
            [
                'booking_number' => 10000016,
                'room_no' => 'A0023',
                'is_checked_in' => true,
            ],
        ],
        'guest_account' => [  
            [
                'account_id' => 10000015,
                'account_limit' => 300,
                'allow_charges' => true,
            ],
        ],
    ],
];

$products = [
    [
        'id' => 1,
        'name' => 'Macanudo Cigars',
        'quantity' => 2,
        'price' => 30
    ],
    [
        'id' => 1,
        'name' => 'Villa Antinori Toscana 2015',
        'quantity' => 1,
        'price' => (float) 19.99
    ]
];

$customers = [
    [
        'first_name' => 'Bill',
        'last_name' => 'Smith',
        'address' => [
            'address_1' => '1234 End of Curb',
            'address_2' => '',
            'city' => 'Sevierville',
            'state' => 'TN',
            'zip' => '37876'
        ]
    ],
    [
        'first_name' => 'Julie',
        'last_name' => 'Mayer',
        'address' => [
            'address_1' => '1234 All and Around',
            'address_2' => '',
            'city' => 'Austin',
            'state' => 'TX',
            'zip' => '73301'
        ]
    ]
];
