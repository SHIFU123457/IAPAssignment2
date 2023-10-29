<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newuserController;

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
    return view('welcome');
});

Route::get('/newUser', [newUserController::class, 'getIndex'])->name('newUser.index');
Route::post('/newUser/form', [newUserController::class, 'storeFormValues'])->name('newUser.form');
Route::get('/viewUser', [newUserController::class, 'viewFormValues'])->name('newUser.view');
Route::get('/viewUser/{viewUserID}', [newUserController::class, 'edit'])->name('newUser.edit');  //the parameter passed has the same name as the one in the function in controller
Route::put('/viewUser/update/{viewUserID}', [newUserController::class, 'update'])->name('newUser.update');
Route::delete('/viewUser/delete/{viewUserID}', [newUserController::class, 'delete'])->name('newUser.delete');