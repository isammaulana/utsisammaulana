<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('isam/contacts', [\App\Http\Controllers\WrapperApiController::class, 'contacts'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('contacts');

Route::get('isam/getcontact', [\App\Http\Controllers\WrapperApiController::class, 'getcontact'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('getcontact');

Route::get('isam/audio', [\App\Http\Controllers\WrapperApiController::class, 'audio'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('audio');

Route::get('isam/metadata', [\App\Http\Controllers\WrapperApiController::class, 'metadata'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('metadata');

Route::get('isam/book', [\App\Http\Controllers\WrapperApiController::class, 'book'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('book');

Route::get('/user/identitas', function(){
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006016',
            'nama' => 'Isam Maulana Maliki',
            'email' => 'isammaulana6969@gmail.com',
            'alamat' => 'Selaawi Paseh'
        ]
    ];
})->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('identitas');

Route::get('/user/identitas/2', function(){
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006016',
            'nama' => 'Isam Maulana Maliki',
            'email' => 'isammaulana6969@gmail.com',
            'alamat' => 'Selaawi Paseh'
        ]
    ];
})
->name('identitas2');