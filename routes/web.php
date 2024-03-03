<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-mail', function () {
    \Illuminate\Support\Facades\Mail::raw('Test email from Laravel with Mailtrap', function ($message) {
        $message->to('aicha70tabite@gmail.com')
                ->subject('Test Email');
    });
    return "Email sent successfully";
});
