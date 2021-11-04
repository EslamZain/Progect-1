<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Front\UserController;
// use App\Http\Controllers\EslamController;
// use App\Http\Controllers\Front\SecondController;
// use App\Http\Controllers\FrontSecondController;


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get ('','Front\EslamController@SayHello');








// Route::get ('SayHello1','Front\EslamController@SayHello1');
// Route::get('', function () {
   
//         $type =[];
//         $type['name'] = 'Laravel';
//         $type['Age'] = 23;

//     return view('Eslam', $type);
// });

    // Route::get('s', function (){ 
        
    //     return view('Eslam');
    
    
    //  }) ;


    // Route::get('', 'Front\EslamController@SayHello')->with('data', 'Hello Eslam Ahmed');
    // Route::get('', function (){ 
        
    //     return view('Eslam');
    
    
    //  })->with('data', 'Hello Eslam Ahmed');


//      Route::get('', function () {

//     return view('Eslam');
     
// });


//      Route::get('', function () {
//     return view('welcome');
// });


// Route::resource('user', 'UsersController');

// Route::resource('user', 'UsersController');

// Route::group(['namespace' => 'Front'], function() {

// Route::get('1', 'SecondController@SayHello1');//->middleware('auth');
// Route::get('2', 'SecondController@SayHello2');//->middleware('auth');
// Route::get('3', 'SecondController@SayHello3');

// });

// Route::get('login', function () {

//     return 'Login';

// })-> name('login');



// Route::group(['namespace' => 'Front'], function() {

//     Route::get('second', 'SecondController@Name');

// });

// Route::get('/s', [SecondController::class, 'SayHello']);
// Route::get('second', 'Front\SecondController@Name');
// Route::get('second', 'Front\SecondController@Name');

// Route::prefix('user')->group(function () {

    // Route::get('/', function () {

    //         return 'Welcome pre';
    // });
    // Route::get('user', 'UserController@UserName');
    // Route::get('users', 'EslamController@SayHello');
    // Route::get('email', [EslamController::class, 'SayHello']);


//     Route::get('email', [EslamController::class, 'SayHello']);
//     Route::get('name', [EslamController::class, 'SayHello']);
//     Route::get('home', [EslamController::class, 'SayHello']);
//     Route::get('say', [EslamController::class, 'SayHello']);
//     Route::get('ipad', [EslamController::class, 'SayHello']);

// });




// Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {

//     Route::get('email', [EslamController::class, 'SayHello']);
//     Route::get('name', [EslamController::class, 'SayHello']);
//     Route::get('home', [EslamController::class, 'SayHello']);
//     Route::get('say', [EslamController::class, 'SayHello']);
//     Route::get('ipad', [EslamController::class, 'SayHello']);

// });










// Route::get('', function () {
//     return view('welcome');
// });

// Route::namespace('Front')->group(function () {


//     Route::get('users', 'EslamController@SayHello');

// });


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



//  Route::get('/g', [homeController::class, 'home']);


// Route::get('s', function (){
//     return 'Hi';
// })->name('qa');

// Route::get('/user', function ($id = 123) {
//     return $id;
// });

// Route::get('/rrr/{name?}', function () {
//     return 'Welcome ';
// })->name('e');


// Route::get('/zzz/{name}', function ($name) {
//     return 'Welcome Eslam ' . $name;
// })->name('a');

// Route::get('/d', [EslamController::class, 'index']);
// Route::get('/ddd', 'EslamController@index');

// Route::namespace('Admin_Eslam')->group(function () {


//     Route::get('user','ZainController@userName');

// });
