<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('desk', [
        'mails' => [
            [
                'id' => 1,
                'subject' => 'Order Product 01',
                'from' => 'sender01@example.com',
                'date' => '04/04/2024',
                'status' => 'New',
                'body' => 'Thank you for your order. We have received it successfully and will process it shortly.'
            ],
            [
                'id' => 2,
                'subject' => 'I want Product02!',
                'from' => 'sender02@example.com',
                'date' => '03/04/2024',
                'status' => 'New',
                'body' => 'I am interested in purchasing Product02. Can you please provide me with more information about it?'
            ],
            [
                'id' => 3,
                'subject' => 'Product01 & Product03',
                'from' => 'sender01@example.com',
                'date' => '03/04/2024',
                'status' => 'Preparations',
                'body' => 'We are currently preparing your order for Product01 and Product03. It will be dispatched soon.'
            ],
            [
                'id' => 4,
                'subject' => 'Needed fast',
                'from' => 'sender03@example.com',
                'date' => '02/04/2024',
                'status' => 'Shipped',
                'body' => 'Your order has been shipped. You should receive it within the next few business days.'
            ],
            [
                'id' => 5,
                'subject' => 'I want the VIP product',
                'from' => 'sender04@example.com',
                'date' => '02/04/2024',
                'status' => 'Done',
                'body' => 'I am interested in purchasing the VIP product. Can you please provide me with pricing and availability?'
            ]
            // Add more mails if needed
        ]
    ]);
});

// Catalog Route
Route::get('/catalog', function () {
    $products = [
        [
            'id' => 1,
            'name' => 'Product01',
            'description' => 'This is product01',
            'price' => '$19.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Product02',
            'description' => 'This product is better than product01.',
            'price' => '$24.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Product03',
            'description' => 'This is our best product.',
            'price' => '$29.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Product04',
            'description' => 'Ok, if you have too much money, this product is as good as Product03, but is VIP because it is covered in gold.',
            'price' => '$149.99',
            'image' => 'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg',
        ],
        // Add more products as needed
    ];
    return view('catalog', compact('products'));
});

// Shipping Route
Route::get('/shipping', function () {
    return view('shipping');
});
// email posting route
Route::post('/email/order', 'EmailController@handleOrderEmail');

// Mail Details Route
Route::get('/{id}', function ($id) {
    $mails = [
        [
            'id' => 1,
            'subject' => 'Order Product 01',
            'from' => 'sender01@example.com',
            'date' => '04/04/2024',
            'status' => 'New',
            'body' => "Hi, I would love to buy product 01 again. Is it still possible to add it to my previous request? Best regards, Sender01"
        ],
        [
            'id' => 2,
            'subject' => 'I want Product02!',
            'from' => 'sender02@example.com',
            'date' => '03/04/2024',
            'status' => 'New',
            'body' => "Hello, I am interested in purchasing Product02. Can you please provide me with more information about it? Kind regards, Sender02"
        ],
        [
            'id' => 3,
            'subject' => 'Product01 & Product03',
            'from' => 'sender01@example.com',
            'date' => '03/04/2024',
            'status' => 'Preparations',
            'body' => 'Hey, Can I order Product01 and Product03? Best regards, Sender01'
        ],
        [
            'id' => 4,
            'subject' => 'Needed fast',
            'from' => 'sender03@example.com',
            'date' => '02/04/2024',
            'status' => 'Shipped',
            'body' => '10 Product 01s and 5 Product 02s asap. Please ship asap!'
        ],
        [
            'id' => 5,
            'subject' => 'I want the VIP product',
            'from' => 'sender04@example.com',
            'date' => '02/04/2024',
            'status' => 'Done',
            'body' => 'Greetings, I am interested in purchasing the VIP product. Can you please provide me with pricing and availability?'
        ]
        // Add more mails if needed
    ];

    $mail = \Illuminate\Support\Arr::first($mails, fn($mail) => $mail['id'] == $id);
    return view('mail', ['mail' => $mail]);
});
