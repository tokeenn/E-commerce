<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\ProductController;
use App\Providers\RouteServiceProvider;
class ProductController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'title' => 'required', 'string', 'max:255',
            'description' => 'required', 'string', 'max:255',
            'price' => 'required', 'string', 'max:255',
            'stock' => 'required', 'string', 'max:255',
        ]);

    ProductController::store($request);
    return redirect(RouteServiceProvider::HOME);

    }
    public function store(Request $request){
        $product = new Product;
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->save();
        return(0);
    }

    public function show(){
        $data = product::all();
        return view('headphones', ['products' => $data]);
    }
}