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
    	// DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
         // $users = DB::select('select * from users where active = ?', [1]);
        // $users = DB::select('select * from users where active = ?', [1]);
        $new_users_id = DB::table('users')->orderBy('id', 'desc')->first()->id + 1;

    	return view('step1');
    }
}
