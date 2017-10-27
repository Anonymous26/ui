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

use App\Mail\LoginToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
// 	// mail("me@ipiyush.com","My subject",'sdsdsd');
// 	\Mail::to('subhambanga26@gmail.com')->send(new LoginToken('sdsds'));
// 	return "sdsd";
// });

Route::get("/", function(){
	return view('index');
})

Route::get("/verify/{token}", function($token){
	$user = User::where('login_token', $token)->first();
	if( is_null($user) )
		return response('not found', 404);
	else {
		\Auth::login($user);
	}
})