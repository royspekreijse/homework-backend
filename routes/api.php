<?php
header("Access-Control-Allow-Origin: *");
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/restaurant', function( Request $request) {
    $restaurants = DB::table('restaurants') 
        ->join('sorting_values', 'restaurants.id', '=', 'sorting_values.restaurant_id')
        ->get();    
    return $restaurants;
    
    //return $request->restaurant();
});

