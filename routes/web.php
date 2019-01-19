<?php

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
    return view('register');
});
Route::post('/createuser', 'UsersController@store', function () {

});
Route::resource('users','UsersController');

Route::get("/addmore","HomeController@addMore");
Route::post("/addmore","HomeController@addMorePost");
Route::get("/finduser/{token}",function ($token){
    $user= \App\users_event::where('token','=',$token)->get();
    if($user==null){
        return response()->json(['status'=>'Unauthorised']);
    }
    else{
        return response()->json(['status'=>$user]);
    }
});

Route::get("/changestate/{token}/{state}",function ($token,$state){

    $result = DB::table('users_event')
                ->where('token', $token)
                ->update(['userstate' => $state]);

    return response()->json(['status'=>$result]);
});

Auth::routes();


Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', 'UsersController');
    Route::resource('payment','paymentController');

});
