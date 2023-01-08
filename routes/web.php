<?php

use App\Http\Controllers\UserController;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartProduct;
use App\Models\Product;
use App\Models\Shop;
use App\Models\ShopProduct;
use App\Services\SmsaeroApiV2Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    $shops = Shop::all();
    $productsShop = Shop::join('shop_products', 'shops.id_shop', 'shop_products.id_shop')->join('products', 'shop_products.id_product', 'products.id_product')->get();
    return view('welcome', compact('productsShop', 'shops'));
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/sms', [UserController::class, 'SendSmsToUserFromRegistration'])->name('sendSMS');

Route::post('/valid-sms', [UserController::class, 'validateSmsToUserFromRegistration'])->name('validSMS');

Route::post('/add-customer', function (Request $request){
    $validator = $request->validate([
        'nameCustomer' => 'required',
        'sernameCustomer' => 'required',
        'fatherName' => 'required'
    ]);

    $user = User::create([
        'name_customer' => $request->nameCustomer,
        'sername' => $request->sernameCustomer,
        'father_name' => $request->fatherName,
        'phone_number' => session('phone')
    ]);
    if($user){
        Auth::login($user);
        return redirect()->route('welcome');
    }

    return redirect(route('login'));
});

Route::post('/logout', function (Request $request){
    Auth::logout();
    return redirect()->back();
});

Route::get('/cart', function (){
    return view('cart');
})->name('cartPage');

Route::post('/addProductToUserCart', function (Request $request){
    $userID = Auth::id();
    $productID = $request->json('idProduct');
    $countProduct = $request->json('countProduct');
    $cartID = Cart::insertGetId(['id_customer' => $userID]);
    $cartProduct = CartProduct::create(['id_product' => 42, 'id_cart' => $cartID, 'count' => $countProduct]);
    return json_encode($userID);
});
