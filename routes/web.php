<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuzzleApiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\viewController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\LibraryAlbumController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeacherclassController;

/*
|------------------------------------------------------------------------p--
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





Route::get('/interview',[App\Http\Controllers\HomeController::class,'interview']);
Route::get('/form_submit1',[App\Http\Controllers\Admin\UserController::class,'form_submit']);

Route::get('/create_movie',[App\Http\Controllers\Api\ApiController::class,'create_movie']);
// Route::post('/create_movie12',[App\Http\Controllers\GuzzleApiController::class,'store_movie12']);


Route::prefix('admin')->middleware(['isAdmin'])->group(function(){
    
    Route::post('/user/grid_view',[App\Http\Controllers\Admin\UserController::class,'grid_view']);
    
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    
    Route::post('/users/parents',[App\Http\Controllers\Admin\UserController::class,'get_parents']);
    
    Route::get('/create_parents',[App\Http\Controllers\Admin\UserController::class,'create_parents']);
    
    Route::get('/classes/get_teachers/{id}',[App\Http\Controllers\Admin\TeacherclassController::class,'get_teachers']);
    

    Route::get('/classes/get_subjects',[App\Http\Controllers\Admin\viewController::class,'get_subjects']);
    Route::get('/send-mail',[App\Http\Controllers\Admin\viewController::class,'send_mail']);
    Route::put('/classes/subjects/delete_this/{id}',[App\Http\Controllers\Admin\viewController::class,'delete_subjects']);
    


    // ---User---Route---
    Route::resource('users', UserController::class);

     // ---Teacher---Route---
    Route::resource('teachers', TeacherController::class);

     // ---Class---Route---
    Route::resource('classes', ClassesController::class);

     // ---Subjects---Route---
     Route::resource('subjects', SubjectController::class);


    Route::resource('subjects', SubjectController::class);

     // ---Students---Route---
    Route::resource('students', StudentController::class);

     // ---Parent---Route---
    Route::resource('parents', ParentController::class);
    

     // ---TeacherClass---Route---
    Route::resource('teacher_class', TeacherclassController::class);














    // Library Code by Waqas
    
    Route::resource('library', LibraryController::class);
    Route::resource('library_album', LibraryAlbumController::class);
    Route::post('/library_album/remove', [LibraryAlbumController::class, 'removeAlbum']);
    Route::post('/library_album_details/add', [LibraryAlbumController::class, 'sub_album']);
    Route::post('/sub_album', [LibraryAlbumController::class, 'sub_album_create']);
    Route::get('/library/{id}/create', [LibraryController::class, 'createAlbum']);



    // End


    
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




