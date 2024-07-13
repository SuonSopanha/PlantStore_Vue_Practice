<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\FruitList;

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



//test test

// Route::get('/Hello', function () {
//     return response('<h1>Hello, World!</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo','bar');
// });

// Route::get('/post/{id}',function($id){
//     return response('<h1>Hello, Post!'.$id.'</h1>', 200);

// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     dd($request);
//     return $request->name . ' ' . $request->city;
// });


//All listing
Route::get('/', function () {
    return view('homepage', [
        'fruitList' => FruitList::all()
    ]);
});


//Single listing
Route::get('/fruit/{id}', function ($id) {
    return view('fruit', [
        'fruit' => FruitList::find($id)
    ]);
});
