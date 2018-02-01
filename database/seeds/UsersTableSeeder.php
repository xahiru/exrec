<?php

use Illuminate\Database\Seeder;
use App\Rating;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$ratings = App\Rating::select('user_id')->distinct()->get();
        foreach ($ratings as $rating) {
				    // echo $rating->user_id;
				    DB::table('users')->insert([
			            'id' => $rating->user_id,
			            'name' => 'mluser'.$rating->user_id
			            // 'ratings' => $ratings,
			            // 'created_at' => $time
			        ]);
				}
    }
}
