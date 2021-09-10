<?php

use Azuriom\Plugin\McIcons\Controllers\McIconsHomeController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your plugin. These
| routes are loaded by the RouteServiceProvider of your plugin within
| a group which contains the "web" middleware group and your plugin name
| as prefix. Now create something great!
|
*/

Route::get('/mc-icons.css', function () {
    return response(
        str_replace("mc-icons.png", plugin_asset('mc-icons', 'mc-icons.png'), File::get(__DIR__ . '/../assets/mc-icons.min.css'))
    )->header('Content-Type', 'text/css');
})->name('css');
