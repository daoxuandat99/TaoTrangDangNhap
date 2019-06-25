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

Route::get('/demo_route', function () {
    return view('login');
});

Route::post('/demo_route', function (Illuminate\Http\Request $request) {
    if ($request->usermame == 'admin' && $request->password == 'admin') {
        return view('welcome_admin');
    } else {
        return view('login_error');
    }
});
