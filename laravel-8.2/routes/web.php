<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function(){
    if ( Gate::allows('access-admin')) {
        return view('admin');
    }
    else {
        return 'ACCES DENIED';
    }
});

Route::get('/headphones', function () {
    $products = DB::table('products')->get();
    return view('headphones', compact('products'));
});

Route::get('/cart', function() {
    return view('cart');

});

Route::post('update', [ProductController::class, 'index']);

require __DIR__.'/auth.php';