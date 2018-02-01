<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $filecontents = file_get_contents("/Users/xahiru/Documents/trust/paper1tvdraft/recEvel/laraExRec/database/mldata/ml-latest-small/ratings.csv");

                $genres = explode("\n", $filecontents);
                foreach ($genres as &$row) {
                    // list($id,$genre) = explode("::",$row);
                    list($uid,$mid,$ratings,$time) = explode(",",$row);
                    if ($uid!="" && $mid!=="") {
                         // $sql = "INSERT INTO ratings (uid,mid) VALUES ($uid,$mid,$ratings,$time);\n";
                         // print $sql;
                        # Insert each into your DB here.

			         DB::table('ratings')->insert([
			            'user_id' => $uid,
			            'movie_id' => $mid,
			            'ratings' => $ratings,
			            // 'created_at' => $time
			        ]);


                        
                    }
                }
    }
}
