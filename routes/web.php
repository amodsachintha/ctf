<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/level2', function (Request $request){
    $ua = $request->header('User-Agent');
//    return response()->json($ua);
    if($ua == 'Googlebot'){
        return response()->json('flag:' . md5('sffsfs'));
    }
    abort(401);
});

Route::get('/level3', function (Request $request){
    return view('level3');
});

Route::get('/level4', function (Request $request){
    return view('level4');
});

Route::post('/checkFlag3', function (Request $request){
                                    // FLAG:MDHFIR35FJCEWF3KTRTRNEFKFNK
    if($request->get('flag') === 'flag:mdhfir35fjcewf3ktrtrnefkfnk'){
        return "SUCCESS!!";
    }
    return "Wrong Flag";
});


Route::post('/sqlInj','HomeController@Sql');

//Route::get('/login','HomeController@showLogin');
//Route::post('/checkLogin','HomeController@loginUser')->name('checkLogin');


