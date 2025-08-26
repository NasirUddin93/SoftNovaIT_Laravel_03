<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('home');
});




Route::get('/contact', function () {
    return view('home')->name('contact');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::view('/web_service', 'frontend.webservice')->name('web_service');
Route::view('/about', 'frontend.about')->name('about_us');
Route::view('/pricing', 'frontend.pricing')->name('pricing');
Route::view('/ourHistory', 'frontend.ourHistory')->name('ourHistory');
Route::view('/careers', 'frontend.careers')->name('careers');
Route::view('/missionVisson', 'frontend.missionVisson')->name('missionVisson');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/comingSoon', 'frontend.comingSoon')->name('comingSoon');
Route::view('/team', 'frontend.team')->name('team');
Route::view('/digital_marketing', 'frontend.digital_marketing')->name('digital_marketing');
Route::view('/seo_optimization', 'frontend.seo_optimization')->name('seo_optimization');
Route::view('/software_service', 'frontend.software_service')->name('software_service');
// Route::view('/blog', 'frontend.blog')->name('main_blog');
Route::view('/latest_posts', 'frontend.latest_posts')->name('latest_posts');
Route::view('/single_posts', 'frontend.single_posts')->name('single_posts');
Route::view('/shop', 'frontend.shop')->name('shop');
Route::view('/cart', 'frontend.cart')->name('cart');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/products', 'frontend.products')->name('products');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Route::view('/home2', 'home2')->name('home2');


