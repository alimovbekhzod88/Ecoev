<?php

use Illuminate\Support\Facades\Route;
// use TCG\Voyager\Voyager;
use TCG\Voyager\Facades\Voyager;
use Telegram\Bot\Laravel\Facades\Telegram;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post("/tg", function () {
    $response = Telegram::getMe();

    Telegram::sendMessage(['chat_id' =>534980735, 'text' => request("username") . ',' . request("tel_number")]);
    return redirect()->back();
})->name("telegram");

Route::get('/{tr?}', "SiteController@index");

// Route::get("/", function() {
//     dd(asset("storage"));
// });

