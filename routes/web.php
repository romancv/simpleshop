<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\{Product, ProductCategory};

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

Route::get('/', function () {
    return view('shop/index');
})->name('shop.index');

Route::get('/catalog', function (Request $request) {
    if($request->has('category')) {
        $category = ProductCategory::findOrFail($request->get('category'));
        return view('shop/catalog')->with('products', $category->publicProducts()->get());
    }

    return view('shop/catalog')->with('products', Product::public()->get());
})->name('shop.catalog');

Route::get('/product', function (Request $request) {

    $pq = Product::public();

    if($id = $request->query('product')) {
        $pq->whereId($id);
    }

    $product = $pq->firstOrFail();

    return view('shop/product')
        ->with('product', $product)
    ;
})->name('shop.product');

Route::get('/cart', function () {
    return view('shop/cart');
})->name('shop.cart');

Route::get('/checkout', function () {
    return view('shop/checkout');
})->name('shop.checkout');



Route::get('/clearCart', function (Request $request) {
    Cart::clear();
    return view('shop.cart');
});

Route::post('/addToCart', function (Request $request) {
    $id = $request->post('product');
    if(!$id) {
        abort(400);
    }

    if($item = Cart::get($id)) {
        \Cart::update($id, array(
            'quantity' => '+1',
        ));
    } else {
        $product = Product::public()->find($id);
        \Cart::add(array(
            'id' => $id,
            'quantity' => 1,
            'price' => $product->price,
            'name' => $product->title,
            'associatedModel' => $product,
        ));
    }

    return Redirect::route('shop.cart');
})->name('shop.addToCart');
