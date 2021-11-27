<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::resource('products', ProductController::class);
Route::get('products/search/{name}', [ProductController::class, 'search']);

// Enable those routes later on for the authentication purposes.
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::update('/products', [ProductController::class, 'update']);
// Route::delete('/products', [ProductController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
