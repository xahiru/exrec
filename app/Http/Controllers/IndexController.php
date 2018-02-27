<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Friend;
use App\User;

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
                echo "i is test";
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
}
