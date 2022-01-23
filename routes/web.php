<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth; /*add*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactFormController;
use App\Models\HomeAdmin;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[FrontendController::class,'front_layout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function(){
//===========dashbaord admin section============
Route::get('dashboard',[HomeController::class,'admin']);

//===========Home admin section============
Route::get('admin/home',[HomeAdminController::class,'home']);
Route::put('admin-home-update',[HomeAdminController::class,'update']);

//===========About admin section============
Route::get('admin/about',[AboutController::class,'about']);
Route::put('admin-about-update',[AboutController::class,'update']);

//===========skills admin section============
Route::get('admin/skills',[SkillsController::class,'skills']);
Route::post('store-skills',[SkillsController::class,'store']);
Route::get('skills/edit/{id}',[SkillsController::class,'edit']);
Route::post('update-skills',[SkillsController::class,'update']);
Route::get('skills/delete/{id}',[SkillsController::class,'Delete']);

//===========Services admin section============
Route::get('admin/services',[ServicesController::class,'services']);
Route::post('store-services',[ServicesController::class,'store']);
Route::get('services/edit/{id}',[ServicesController::class,'edit']);
Route::post('update-services',[ServicesController::class,'update']);
Route::get('services/delete/{id}',[ServicesController::class,'Delete']);
//description
Route::get('admin/des-services',[ServicesController::class,'desServices']);
Route::put('des-services-update',[ServicesController::class,'desUpdate']);

//===========contact admin section============
Route::get('admin/contact',[ContactController::class,'desContact']);
Route::put('des-contact-update',[ContactController::class,'desUpdate']);

//===========social admin section============
Route::get('admin/social',[SocialController::class,'social']);
Route::post('store-social',[SocialController::class,'store']);
Route::get('social/edit/{id}',[SocialController::class,'edit']);
Route::post('update-social',[SocialController::class,'update']);
Route::get('social/delete/{id}',[SocialController::class,'Delete']);

//===========resume admin section============
Route::get('admin/resume',[ResumeController::class,'resume']);
Route::put('admin-resume-update',[ResumeController::class,'update']);

});//

//===========contact section============
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
