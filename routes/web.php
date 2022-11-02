<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

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
    return view('welcome');
});

Route::controller(QrController::class)->group(function () {
    Route::post('/qr/calender', 'calender');
    Route::post('/qr/email', 'email');
    Route::post('/qr/me_card', 'me_card');
    Route::post('/qr/phone', 'phone');
    Route::post('/qr/sms', 'sms');
    Route::post('/qr/text', 'text');
    Route::post('/qr/url', 'url');
    Route::post('/qr/vcard', 'vcard');
    Route::post('/qr/wifi', 'wifi');
});


