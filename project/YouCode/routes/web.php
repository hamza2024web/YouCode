<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::get('registre',[RegistreController::class,'index']);
Route::post('store',[RegistreController::class,'store']); 
Route::post('/storeStaff',[RegistreController::class,'storeStaff']);
Route::get('/home',[HomeController::class,'home']);
Route::post('/quiz',[QuizController::class,'store']);
Route::get('/candidat',[CandidatController::class,'indexCandidat']);
Route::post('/storeTheResponse',[CandidatController::class,'store']);
Route::get('/',[HomeController::class,'tologin']);
Route::get('/quiz/completed', function() {return view('quiz.completed');})->name('quiz.completed');
Route::get('/logout',[LoginController::class,'logout']);
Route::get('UsersManagement',[AdminController::class,'user']);
Route::get('/staff',[StaffController::class,'show']);
Route::get('/event',[StaffController::class,'showEvent']);
Route::post('/eventsCrate',[StaffController::class,'createEvent']);

