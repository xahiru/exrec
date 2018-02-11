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
use App\Rating;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
// Route::get('/', function () {
//     return view('step1');
// });

//app loads here step 1
Route::get('/', 'IndexController@index');
Route::get('/flush',function (Request $request) {
	 $request->session()->flush();
});



Route::get('/step2', function (Request $request) {
/*
	1. load all the movies from the ml-1M data file
	2. pass top 1000
	3. if user clicks load more, load next 1000
*/
        
     // This is before loading the step2, username,id, and cookies has to be saved here before loading the second page       

        // $users = DB::select('select * from users where active = ?', [1]);
         $new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;

         Session::put('uid', $new_users_id);
         $nickname = $request->input('nickname');
         // var_dump($nickname);
         Session::put('username', $nickname);

         $dataSet[] = [
         	'id' => $new_users_id,
			 'name' => $nickname
    		];

         DB::table('users')->insert($dataSet);
 



         $movies = Movie::orderBy('id', 'desc')->simplePaginate(30);

         var_dump(Session::get('username'));
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

	$numtitem = ceil(sizeof($ids)*0.2);
	$offset = sizeof($ids) - $numtitem;


	 $array1 = array_slice($ids, $offset , $numtitem);
	$array2 = array_slice($ids, 0, $offset);	
	 var_dump($array1);
	 var_dump($array2);
	// var_dump($numtitem);
	// $pieces = array_chunk($ids, ceil(sizeof($ids)*0.2));
	// var_dump($pieces);


	// $movies = Movie::findMany($ids);

	// $movies = Movie::whereIn('id', $array2)->simplePaginate(15);
	 $movies = Movie::whereIn('id', $ids)->simplePaginate(15);

	 // var_dump($movies);
	// foreach ($movies as $key => $value) {
	// 	var_dump($value->name);
	// }
	$new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;

    return view('step3',  ['name' => $new_users_id, 'movies' => $movies]);
});

Route::get('/step4a', function (Request $request) {
	$uid = Session::get('uid');
	$uid = $uid -1;

	$ratings = Rating::where('user_id', $uid)->get();
	// var_dump($ratings);
	return view('step4a', ['ratings' => $ratings]);

});

Route::get('/step4', function (Request $request) {

	/*
	Recommend

	*/
	// var_dump($request->all());
	$uid = Session::get('uid');
	$dataSet = [];
	foreach ($request->all() as $key => $value) {
		// var_dump($key);
		// var_dump($value);
		$dataSet[] = [
			            'user_id' => $uid,
			            'movie_id' => $key,
			            'ratings' => $value,
			            // 'created_at' => $time
			        ];
	}
	// var_dump($dataSet);
	 DB::table('ratings')->insert($dataSet);

	$new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;
	$movies = Movie::orderBy('id', 'desc')->simplePaginate(15);
    return view('step4',  ['name' => $new_users_id, 'movies' => $movies]);
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



