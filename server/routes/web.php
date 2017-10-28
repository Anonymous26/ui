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

// Route::get("/", function(){
// 	return view('index');
// })

// Route::get("/verify/{token}", function($token){
// 	$user = User::where('login_token', $token)->first();
// 	if( is_null($user) )
// 		return response('not found', 404);
// 	else {
// 		\Auth::login($user);
// 	}
// })

use App\User;
Route::get('/push', function(){
	$user = User::create([
		'name' => 'Someone',
		'email' => 'me@ipiyush.com',
		'publickey' => 'abcd',
		'privatekey' => 'google',
		'role' => 0
	]);

	$user->publickey = 'sdsd';
	$user->privatekey = 'sdsd';
	$user->role = 0;
	$user->save();

	$user2 = User::create([
		'name' => 'Someone',
		'email' => 'subhambanga26@gmail.com',
		'publickey' => 'abcd',
		'privatekey' => 'google',
		'role' => 1
	]);

	$user2->publickey = 'sdsd';
	$user2->privatekey = 'sdsd';
	$user2->role = 1;
	$user2->save();


	$user2->doctors()->save($user);
});

Route::get('/patients', function(){
	if(!Auth::check()){
		return redirect('login');
	}
	$users = Auth::user()->patients();
	$data = [];
	foreach($users as $user){
		$data[] = $user->publickey;
	}
	return $data;
});


Route::get('/doctors', function(){
	if(!Auth::check()){
		return redirect('login');
	}
	$users = Auth::user()->doctors();
	$data = [];
	foreach($users as $user){
		$data[] = $user->publickey;
	}
	return $data;
});

Route::get('/assignDoctor/{email}', function($email){
	$user = User::where('email', $email)->first();
	if(is_null($user))
		return response('error', 404);
	$auth = Auth::user();
	$auth->doctors()->save($user);
});

Route::get('login', function(){
	return view('login');
});

Route::get('/token/{email}', function($email){

	$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string_shuffled = str_shuffle($string);
    $message = substr($string_shuffled, 1, 7);

	$url = "http://103.15.179.45:8085/MessagingGateway/SendTransSMS?Username=ASTROCAPITAL&Password=Cap18Sep&MessageType=txt&Mobile=$email&SenderID=FEESEP&Message=$message";
	echo $url;
	 $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);   

        $user = User::where('email', $email)->first();
        $user->logintoken = $message;
        $user->save();

        return 1;

});

Route::get('/dashboard', function(){
	$user = Auth::user();
	return view('dashboard')->withUser($user);
});