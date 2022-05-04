<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing data
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log out user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


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
