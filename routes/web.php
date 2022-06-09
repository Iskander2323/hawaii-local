<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStatus;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FooterController;
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
    return view('welcome');
}); 

Route::get('login', [App\Http\Controllers\LoginController::class, 'getLogin'])->name('login');
Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login-admin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'home'])->name('home-user');


Route::prefix('admin')->middleware([CheckStatus::class])->group(function ()
{
    
    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('blog.admin.main.index');
    Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout-admin');
    Route::resource('ticket', 'App\Http\Controllers\Admin\TicketController');

    Route::resource('order', 'App\Http\Controllers\Admin\OrderController')->names('order');

    Route::resource('aquaparkinfo', 'App\Http\Controllers\Admin\AquaparkInfoController')->names('aquapark.info');
    Route::resource('price', 'App\Http\Controllers\Admin\PriceController')->names('aquapark.price');
    Route::resource('menu', 'App\Http\Controllers\Admin\MenuController')->names('aquapark.menu');
    Route::resource('workshedule', 'App\Http\Controllers\Admin\WorkSheduleController')->names('aquapark.shedule');

    Route::resource('spainfo', 'App\Http\Controllers\Admin\SpaInfoController')->names('spa.info');
    
    Route::resource('spaprice', 'App\Http\Controllers\Admin\SpaPriceController')->names('spa.price');
    Route::resource('spamenu', 'App\Http\Controllers\Admin\SpaMenuController')->names('spa.menu');
    
    Route::resource('user', 'App\Http\Controllers\Admin\UserController');

    Route::resource('promo', 'App\Http\Controllers\Admin\PromoController')->names('promo');

    Route::resource('apbiggal', 'App\Http\Controllers\Admin\ApBigGalController')->names('aquapark.apbiggal');
    Route::resource('apbigvid', 'App\Http\Controllers\Admin\ApBigVidController')->names('aquapark.vid');

    Route::resource('spabiggal', 'App\Http\Controllers\Admin\SpaBigGalController')->names('spa.biggal');
    Route::resource('spabigvid', 'App\Http\Controllers\Admin\SpaBigVidController')->names('spa.vid');
    
    Route::resource('faq', 'App\Http\Controllers\Admin\QuestionAnswerController')->names('faq');
//Policy
    Route::resource('rules', 'App\Http\Controllers\Admin\RulesController')->names('rules');
    Route::resource('payment', 'App\Http\Controllers\Admin\PaymentController')->names('payment');
    Route::resource('dataproc', 'App\Http\Controllers\Admin\DataprocController')->names('dataproc');

    Route::resource('news', 'App\Http\Controllers\Admin\NewsController')->names('news');

    Route::resource('review', 'App\Http\Controllers\Admin\ReviewController')->names('review');
    Route::resource('refund', 'App\Http\Controllers\Admin\RefundController')->names('refund');
                     //Футер сайта
    Route::get('/corpclient', [App\Http\Controllers\Admin\FooterController::class, 'CorpClients'])->name('corpclient');
    Route::post('/corpclient', [App\Http\Controllers\Admin\FooterController::class, 'CorpClientsUpdate'])->name('corpclientupd');
    Route::get('/groupschool', [App\Http\Controllers\Admin\FooterController::class, 'SchoolGroup'])->name('groupschool');
    Route::post('/groupschool', [App\Http\Controllers\Admin\FooterController::class, 'SchoolGroupUpdate'])->name('groupschoolupd');
    Route::get('/employment', [App\Http\Controllers\Admin\FooterController::class, 'Employment'])->name('employment');
    Route::post('/employment', [App\Http\Controllers\Admin\FooterController::class, 'EmploymentUpdate'])->name('employmentupd');
    Route::get('/howtogo', [App\Http\Controllers\Admin\FooterController::class, 'HowToGo'])->name('howtogo');
    Route::post('/howtogo', [App\Http\Controllers\Admin\FooterController::class, 'HowToGoUpdate'])->name('howtogoupd');
    Route::get('/staywithus', [App\Http\Controllers\Admin\StaywusController::class, 'edit'])->name('staywithus');
    Route::post('/staywithus', [App\Http\Controllers\Admin\StaywusController::class, 'update'])->name('staywithusupd');
    Route::get('/contacts', [App\Http\Controllers\Admin\StaywusController::class, 'Contacts'])->name('contacts');
    Route::post('/contacts', [App\Http\Controllers\Admin\StaywusController::class, 'ContactsUpdate'])->name('contactsupd'); 
});





















//Route::get('login', [App\Http\Controllers\LoginController::class, 'getLogin']);
//Route::post('login-user', [App\Http\Controllers\LoginController::class, 'login']);

//Route::get('register', [App\Http\Controllers\RegisterController::class, 'getRegister']);
//Route::post('register-user', [App\Http\Controllers\RegisterController::class, 'register']);

//Route::post('logout',[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');