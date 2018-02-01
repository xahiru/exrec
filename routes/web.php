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

use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('step1');
// });

//app loads here step 1
Route::get('/', 'IndexController@index');


Route::get('/step2', function () {
/*
	1. load all the movies from the ml-1M data file
	2. pass top 1000
	3. if user clicks load more, load next 1000
*/
        
     // This is before loading the step2, username,id, and cookies has to be saved here before loading the second page       

        // $users = DB::select('select * from users where active = ?', [1]);
         $new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;


    return view('step2', ['name' => $new_users_id]);
});

Route::get('/step3', function () {

	/*
	In step 3 user is asked to rate the movies selected
	divide # of the movies selected in step 1
	present half of them to rate (say 10)

	*/

    return view('step3a');
});


Route::get('/instructions', function () {
    return view('instructions');
});

