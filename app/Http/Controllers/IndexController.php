<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Friend;
use App\User;
use App\Rating;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	// $request->session()->flush();
        // $new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;
        if(Session::has('uid')){

        // $movies = Movie::orderBy('id', 'desc')->simplePaginate(30);
         // return view('step2', ['movies' => $movies]);
          return view('category');
            }

    	return view('step1');

    }

    public function category(Request $request)
    {
      return view('category');
    }

    public function choice(Request $request)
    {
      $fields = Input::get('choice');

      Session::put('choice', $fields);

            switch ($fields ) {
            case "test":
                return redirect('/step2');
                break;
            // case "logout":
            //     return view('/logout');
            //     break;
            case "certain":
                echo "certain";
                break;
            case "star":
                return redirect('/step2');
                break;
            case "tidal":
                echo "i is tidal";
                break;
            case "graph":

              $friends = Friend::all();
              $ids = User::all();
              // $friends_id1 = $friends['friend_id1'];
              // $friends_id2 = Friend::all()->friend_id2();

              
              // $ids = 1; //funny if its a string it doesnt work in javascript
              // var_dump($friends);
                return view('graphtest')->with(['friends' => $friends, 'ids' => $ids]);
                break;
            case "emoji":
                return $this->selectMoviesToRate($request);
                break;

                
        }

    }

    public function selectMoviesToRate(Request $request)
    {
         $movies = Movie::orderBy('id', 'desc')->simplePaginate(30);
         var_dump(Session::get('username'));
         $choice = Session::get('choice');
        return view('step2', ['movies' => $movies, 'choice' => $choice]);
    }


    public function certainityTrust($user, $ratings)
    {
        
        //initial expectation
        $ini_expectation; // f
        $max_evidance; // N
        $positives; //r
        $negatives; //s
        $weight; //w weight of the disposition trust (initial trust)

        //average rating t
        $average_rating = 0;

        if (($positives+$negatives)==0){
            $average_rating = 0.5;
        }else{
             $average_rating = $positives/($positives+$negatives);
        }


        //certainity
        $nu = $max_evidance * ($positives+$negatives);
        $den = $max_evidance - ($positives+$negatives);

         $certainity = $nu/((2 * $weight * ($den)) + $nu);

          return ($average_rating *  $certainity) + ((1 - $certainity) * $ini_expectation);

    }
    public function test(Request $request)
    {
      $uid = Session::get('uid');
      // $uid = $uid -1;

      $ratings = Rating::where('user_id', $uid)->get();
      // var_dump($ratings);
      // return view('step4a', ['ratings' => $ratings]);
      $ids = $request->input('check_list', []);

      $movies = Movie::whereIn('id', $ids)->simplePaginate(15);

      return view('test', ['movies' => $movies, 'ratings' => $ratings]);
    }

    public function testinsert(Request $request)
    {
      // var_dump($request->all());
      $uid = Session::get('uid');
      $dataSet = [];
      foreach ($request->all() as $key => $value) {
        // var_dump($key);
        // var_dump($value);

        $movies_id = substr($key, strlen("selected-text-"));
        if ($movies_id) {
          var_dump($movies_id);
          $dataSet[] = [
                        'user_id' => $uid,
                        'movie_id' => $movies_id, //$key,
                        'ratings' => $value,
                        // 'created_at' => $time
                    ];
        }
        
      }
      var_dump($dataSet);

      
      DB::table('ratings')->insert($dataSet);

      $movies = Movie::orderBy('id', 'desc')->simplePaginate(15);
      // $request->session()->flush();
        return view('step4',  ['name' => $uid, 'movies' => $movies]);


    }

    public function recomSlopeOne(Request $request)
    {
      //get userId
      $uid = Session::get('uid');
      //use all movies
      $movies = Movie::all();
      //use for each movie call SlopeOnefun

      foreach ($movies as $movie) {
          echo $this->slopeOne( $uid,$movie->id);
      }
      return "hello";

    }

    //pass user_id and item_id
    public function slopeOne($uid, $iid)
    // public function slopeOne(Request $request)
    {
      // $uid = 716; //Lucy's id
      // $iid = 161336; //A


      $score = 0; //value for return

      //1 get the items user rated i
      //2 for each item user rated get all the ratings Ri
      //3 calculte the average rating difference ARDs between Ri and item 
      //g et weighted average
        //4 weight for each ARD (w) = number users rateed Ri and item
        //5 predicted rating = sum(w*#userRi)/totaluserRi
        $i = Rating::where('user_id', $uid)->get();
        // $item_ratings = Rating::where('movie_id', $item)->rating;
        // var_dump($i);
        // var_dump($i
        // );


        $totalCount = 0;
        $totalNumerator = 0;
        $weightList = [];

        foreach ($i as $rated) {
          $diffList = [];

          // var_dump($rated->movie_id);
          // var_dump($rated->ratings);
          $nonEveragedRating = $rated->ratings;
          $average = 0;


          $colRating = Rating::where('movie_id', $rated->movie_id)->get();

          // var_dump($colRating);

          if($rated->movie_id != $iid){

            foreach ($colRating as $ratings) {

              // if (($ratings->user_id == 715) || ($ratings->user_id == 714) ) {
                // var_dump($ratings->user_id);
                //get user_id rating for this item
                $R1 = $ratings->ratings;
                $R2 = Rating::where('user_id', $ratings->user_id)->where('movie_id', $iid)->first();
                if ($R2) {
                  // var_dump($R2->user_id);
                  // var_dump($R2->ratings);
                  // var_dump($ratings->ratings);
                  // var_dump($ratings->user_id);
                  $diff = $R2->ratings -$R1;
                  // var_dump($diff);
                  array_push($diffList, $diff);
                }
              }

          // }
          // var_dump($diffList);
        //     // $a = array_filter($a);
            $count = count($diffList);
            if ($count > 0) {
              $average = array_sum($diffList)/$count;
            }
            
            
            $weight =  $nonEveragedRating + $average;
            $Weightedrating = $weight * $count ;
            // var_dump($Weightedrating);
            // array_push($weightList, ['weight' => $average,'count(var)' => count($diffList)]);

            $totalCount = $totalCount + $count;
            $totalNumerator = $totalNumerator + $Weightedrating;

        }
          if ($totalCount > 0) {
            $score =($totalNumerator/$totalCount);
          }
          

          // var_dump($score);
          // return $score;

        }
        return ($score);
       
    }
}
