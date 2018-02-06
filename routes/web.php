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
use App\Movie;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
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

         $movies = Movie::orderBy('id', 'desc')->simplePaginate(30);


    return view('step2', ['name' => $new_users_id, 'movies' => $movies]);
});

Route::get('/step3', function (Request $request) {

	/*
	In step 3 user is asked to rate the movies selected
	divide # of the movies selected in step 1
	present half of them to rate (say 10)

	*/
	// $movies = Input::get('check_list',[]);
	$ids = $request->input('check_list', []);
	// $movies = Movie::findMany($ids);

	$movies = Movie::whereIn('id', $ids)->simplePaginate(15);

	 // var_dump($movies);
	// foreach ($movies as $key => $value) {
	// 	var_dump($value->name);
	// }
	$new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;

    return view('step3',  ['name' => $new_users_id, 'movies' => $movies]);
});

Route::get('/step4', function () {

	/*
	Recommend

	*/
	$new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;
	$movies = Movie::orderBy('id', 'desc')->simplePaginate(15);
    return view('step3',  ['name' => $new_users_id, 'movies' => $movies]);
});

Route::get('/survey', function () {

	/*
	*/

	$new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;
	$movies = Movie::orderBy('id', 'desc')->simplePaginate(15);
    return view('step3',  ['name' => $new_users_id, 'movies' => $movies]);
});


Route::get('/instructions', function () {
    return view('instructions');
});



