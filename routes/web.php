<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//display message
Route::get('/', function () {
    return "Hello World!..";
});

//display blade inside another folder
Route::get('/about', function(){
    return view('auth.about');
});

Route::get('/user', [UserController::class, 'index']);



// Route::get('/intro/{name}/age/{age}',function($name, $age){
//     // echo "Hello there $name. Nice to meet you";/
//     return view('intro',['name'=>$name, 'age'=>$age]);
// });




Route::permanentRedirect('/','/about');

// //to access the welcome blade use the admin perfix before (admin/welcome)
// Route::prefix('admin')->group(function () {   
// //display blade
// Route::get('/welcome', function(){
//     return view("welcome");
//     });
    
// });


// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     return view("users");
//     })->name('users');
// });
// // $url = route('admin.users');