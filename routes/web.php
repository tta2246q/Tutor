<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('user.home');
});

Route::get('/Dashboard', [HomeController::class,'Dashboard'])->name('Dashboard');
Route::get('/Tutor_Manager', [HomeController::class,'Tutor_Manager'])->name('Tutor_Manager');
route::get('/details', [HomeController::class, 'details'])->name('details');
route::get('/Manager_payment', [HomeController::class, 'Manager_payment']) ->name('Manager_payment');
route::get('/inbox', [HomeController::class, 'inbox']) ->name('inbox');
route::get('/Personal_Information', [HomeController::class, 'Personal_Information']) -> name('Personal_Information');
route::get('/we', [HomeController::class, 'we']) ->name('we');
route::get('/search_tutor', [HomeController::class, 'search_tutor']) ->name('search_tutor');
Route::get('/Existing_tutors', [HomeController::class, 'Existing_tutors']) ->name('Existing_tutors');
Route::get('/Find_a_tutor', [HomeController::class, 'Find_a_tutor']) ->name('Find_a_tutor');
Route::get('/Tutor_Information', [HomeController::class, 'Tutor_Information']) ->name('Tutor_Information');
Route::get('/document', [HomeController::class, 'document']) ->name('document');
Route::get('/detail_document', [HomeController::class, 'detail_document']) ->name('detail_document');
Route::get('/Tutor_Classes', [HomeController::class, 'Tutor_Classes']) ->name('Tutor_Classes');



