<?php


use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Livewire\CategoriesPage;
use App\Livewire\ProductsPage;
use App\Livewire\CartPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ForgotPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CheckoutPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\SuccessPage;
use App\Livewire\CancelPage;


Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/cart', CartPage::class);
Route::get('/products/{slug}', ProductDetailPage::class);



Route::middleware('guest')->group(function(){
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class);
    Route::get('/forgot', ForgotPage::class);
    Route::get('/reset', ResetPasswordPage::class);
});

Route::middleware('auth')->group(function(){
    Route::get('/logout', function(){
        auth()->logout();
        return redirect('/');
    });

    Route::get('/checkout', CheckoutPage::class);
    Route::get('/myorders', MyOrdersPage::class);
    Route::get('/myorders/{order}', MyOrderDetailPage::class);
    Route::get('/success', SuccessPage::class);
    Route::get('/cancel', CancelPage::class);

});