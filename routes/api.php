<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
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
Route::post('/restaurant', function(Request $request) {
    $restaurant_name = $request->name; 
    $update = DB::table('restaurants')->where('name', '=', $restaurant_name)    
    ->update([
        "isFavorite" => $request->isFavorite
    ]);
    if ($update){
        return response()->json(["success" => true]);
    } else {
        return reponse()->abort(404);
    }
    
});

