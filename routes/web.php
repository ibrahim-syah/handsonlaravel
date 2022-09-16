<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
            'id' => 1,
            'title' => 'Listings One',
            'description' => 'Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Mollitia adipisci rerum repellat itaque nemo vitae nam
            neque at totam, assumenda quaerat fugiat aspernatur animi. Deleniti facere
            illo ipsa similique accusantium.'
            ],
            [
            'id' => 2,
            'title' => 'Listings Two',
            'description' => 'Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Mollitia adipisci rerum repellat itaque nemo vitae nam
            neque at totam, assumenda quaerat fugiat aspernatur animi. Deleniti facere
            illo ipsa similique accusantium.'
            ]
        ]
    ]);
});
