<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//MAIN
Route::get('aquapark', [App\Http\Controllers\API\V1\AquaparkInfoController::class, 'index'])->name('aquapark');
Route::get('apgallery', [App\Http\Controllers\API\V1\GalleryController::class, 'index'])->name('apgallery');
Route::get('ticket', [App\Http\Controllers\API\V1\TicketController::class, 'index'])->name('ticket');
Route::get('ticket/{id}', [App\Http\Controllers\API\V1\TicketController::class, 'show'])->name('ticket-show');
Route::get('promo', [App\Http\Controllers\API\V1\PromoController::class, 'index'])->name('promo');
Route::get('price', [App\Http\Controllers\API\V1\PriceController::class, 'index'])->name('price');
Route::get('menu', [App\Http\Controllers\API\V1\MenuController::class, 'index'])->name('menu');
Route::get('menugal', [App\Http\Controllers\API\V1\MenuController::class, 'menugal'])->name('menugal');
Route::get('shedule', [App\Http\Controllers\API\V1\SheduleController::class, 'index'])->name('shedule');
Route::get('apbiggal', [App\Http\Controllers\API\V1\ApBigGalController::class, 'index'])->name('apbiggal');
Route::get('apbigvid', [App\Http\Controllers\API\V1\ApBigVidController::class, 'index'])->name('apbigvid');
//SPA
Route::get('spa', [App\Http\Controllers\API\V1\SpaInfoController::class, 'index'])->name('spa');
Route::get('spamaingal', [App\Http\Controllers\API\V1\SpaInfoController::class, 'spamaingal'])->name('spamaingal');
Route::get('spaprice', [App\Http\Controllers\API\V1\SpaPriceController::class, 'index'])->name('spaprice');
Route::get('spamenu', [App\Http\Controllers\API\V1\SpaMenuController::class, 'index'])->name('spamenu');
Route::get('spabiggal', [App\Http\Controllers\API\V1\SpaBigGalController::class, 'index'])->name('spabiggal');
Route::get('spabigvid', [App\Http\Controllers\API\V1\SpaBigVidController::class, 'index'])->name('spabigvid');
//FAQ
Route::get('faq', [App\Http\Controllers\API\V1\FAQController::class, 'index'])->name('faq');
//REVIEW
Route::get('review', [App\Http\Controllers\API\V1\ReviewController::class, 'index'])->name('review');
Route::get('review/{id}', [App\Http\Controllers\API\V1\ReviewController::class, 'show'])->name('review-show');
//NEWS
Route::get('news', [App\Http\Controllers\API\V1\NewsController::class, 'index'])->name('news');
Route::get('news/{id}', [App\Http\Controllers\API\V1\NewsController::class, 'show'])->name('news-show');
//FOOTER
Route::get('corpcli', [App\Http\Controllers\API\V1\FooterController::class, 'getCorpClients'])->name('corpcli');
Route::get('group', [App\Http\Controllers\API\V1\FooterController::class, 'getGroup'])->name('group');
Route::get('vacancy', [App\Http\Controllers\API\V1\FooterController::class, 'getVacancy'])->name('vacancy');
Route::get('howtogo', [App\Http\Controllers\API\V1\FooterController::class, 'getHowToGo'])->name('howto');
//STAY WITH US
Route::get('staywus', [App\Http\Controllers\API\V1\StaywusController::class, 'index']);
//CONTACTS
Route::get('contacts', [App\Http\Controllers\API\V1\ContactsController::class, 'index']);
//POLICY
Route::get('rules', [App\Http\Controllers\API\V1\SitePolicyController::class, 'Rules']);
Route::get('payment', [App\Http\Controllers\API\V1\SitePolicyController::class, 'Payment']);
Route::get('dataproc', [App\Http\Controllers\API\V1\SitePolicyController::class, 'Dataproc']);
//
Route::post('reg', [App\Http\Controllers\API\V1\RegisterController::class, 'store'])->name('reg');
Route::post('login', [App\Http\Controllers\API\V1\LoginController::class, 'login'])->name('login-user')->middleware(['auth:sanctum']);;

Route::post('logout', [App\Http\Controllers\API\V1\LoginController::class, 'logoutUser'])->name('logout-user')->middleware(['auth:sanctum']);

Route::post('payment',  [App\Http\Controllers\API\V1\PaymentController::class, 'payment']);
