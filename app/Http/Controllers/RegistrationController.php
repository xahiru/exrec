<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Session;

class RegistrationController extends Controller
{
	public function index(Request $request)
    {
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
         return view('category');

     }
}
