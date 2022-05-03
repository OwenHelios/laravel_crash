<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function () {
//     return response("<h1>Hello</h1>", 200)
//     ->header('Content-Type', 'text/plain');
// });

// Route::get('/post/{id}', function ($id) {
//     // ddd($id); // die, dump and debug
//     return response('Post ' . $id, 200)
//     ->header('Content-Type', 'text/html');
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     dd($request);
// });
