<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Dashboard Start
Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('Dashboard');

// Frontend Route
Route::get('/', [FrontendController::class, 'frontend']);

// Group Route
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

// Category Route
Route::resource('category', CategoryController::class);
Route::get('category-trash/list', [CategoryController::class, 'TrashList'])->name('TrashList');
Route::get('category-trash/restore/{cat_id}', [CategoryController::class, 'CategoryRestore'])->name('CategoryRestore');
Route::get('category-trash/delete/{cat_id}', [CategoryController::class, 'CategoryDelete'])->name('CategoryDelete');

// Banner Route
Route::resource('banner', BannerController::class);
Route::get('banner-trash/list', [BannerController::class, 'TrashList'])->name('TrashList');
Route::get('banner-trash/restore/{cat_id}', [BannerController::class, 'BannerRestore'])->name('BannerRestore');
Route::get('banner-trash/delete/{cat_id}', [BannerController::class, 'BannerDelete'])->name('BannerDelete');
Route::get('banner/statusDeactive/{cat_id}', [BannerController::class, 'DeactiveStatus'])->name('DeactiveStatus');
Route::get('banner/statusActive/{cat_id}', [BannerController::class, 'ActiveStatus'])->name('ActiveStatus');

// About Me Route
Route::resource('about', AboutController::class);

// Education Route
Route::resource('education', EducationController::class);

// Experience Route
Route::resource('experience', ExperienceController::class);

// Skill Route
Route::resource('skill', SkillController::class);

// Service Route
Route::resource('service', ServiceController::class);

// Review Route
Route::resource('review', ReviewController::class);

// Project Route
Route::resource('project', ProjectController::class);

// Message Route
Route::resource('message', MessageController::class);
Route::get('message', [MessageController::class, 'message'])->name('message');

// Contact Route
Route::resource('contact', ContactController::class);

// Footer Route
Route::resource('footer', FooterController::class);

// Social Route
Route::resource('social', SocialController::class);
// Setting Route
Route::resource('setting', SettingController::class);

});




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
