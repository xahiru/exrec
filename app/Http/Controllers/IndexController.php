<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Session;
use Illuminate\Support\Facades\DB;

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
        $movies = Movie::orderBy('id', 'desc')->simplePaginate(30);
         return view('step2', ['movies' => $movies]);
            }


    	return view('step1');
    }
}
