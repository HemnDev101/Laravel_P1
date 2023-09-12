<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExampleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\ModelTest;
use Psy\VersionUpdater\SelfUpdate;

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

Route::get('/',   [ExampleController::class, 'home']);

Route::get('/welcome', function () {
    $items = [
        ['title' => 'A1', 'price' => 2000],
        ['title' => 'A2', 'price' => 1000],
        ['title' => 'A3', 'price' => 500],

    ];
    return view('welcome', ['items' =>  $items]);
});

//http://127.0.0.1:8000/route_parameter/2 RouterParameter  amay xwarawa updata tazakaya 
Route::get("/routeParameter/{id}/{name}", [ExampleController::class, 'routeParameter']);

Route::get('/insert', function () {


    $name = request('name');
    $password = request('password');
    // By using Eloquent
    $items = ModelTest::insert(['name' => $name, 'password' => $password]);

    // DB::insert("INSERT INTO `users` (`name` ,`password`    ) VALUES ('Hemn' , 'hemn112233') ") ;

    //worked DB::insert('insert into users (name, password    ) values (?, ?)', [$name, $password]);

    return redirect('/');
});

//Eloquent
Route::get('/delete', function () {

    $id = request('id');
    ModelTest::where('id' , $id)->delete();
    // DB::delete("DELETE FROM users WHERE id=?" , [$id]);
    return redirect('/');
});


Route::get('/update', function () {
    $name = request('name');
    $id = request('id');
    // By using Eloquent
    //  DB::update("UPDATE   users SET  name  ='$name' WHERE id=$id", [$name, $id]);

    ModelTest::where('id' , $id)->update( ['name'=> $name   ] ,  ) ; 
   
   
    return redirect('/');
});



Route::get('/view', function () {
    $items = ModelTest::all();
    // $items = json_decode( $items) ; 
    // $items = DB::select("SELECT * FROM users") ; 
    return view('data' , ['items' => $items]  );
});


Route::get('/home_seller',  [ExampleController::class , "home_seller"] );

Route::get('/seller/{id}' , [ExampleController::class , 'seller']) ; 