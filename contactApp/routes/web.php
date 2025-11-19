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
    //the '/' is the home page
    return view('welcome');
});

Route::get('/contacts', function () {
    // http://172.20.10.2:8000/contacts . will display all contacts only
    return "<h1> All Contacts </h1>";
});

Route::get('/contacts/create', function () {
    return "<h1> Create New Contact </h1>";
});

Route::get('/contacts/{id}', function ($id) {
    return App\Models\Contact::find($id);
});