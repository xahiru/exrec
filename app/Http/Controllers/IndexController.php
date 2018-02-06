<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
        // $new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;

    	return view('step1');
    }
}
