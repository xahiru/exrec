<?php

use Illuminate\Database\Seeder;
use App\User;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make 10% connected
        $percent =  User::all()->count();
        $percent =  0.5 *  $percent;
        for ($i=0; $i < $percent; $i++) { 
        	$u1 = User::inRandomOrder()->get()->first();
        	$u2 = User::inRandomOrder()->get()->first();
        	if ($u1 != $u2){
        		 DB::table('friends')->insert([
			            'friend_id1' => $u1->id,
			            'friend_id2' => $u2->id
			        ]);
        		// echo $u1->id;
        	}
        }
    }
}
