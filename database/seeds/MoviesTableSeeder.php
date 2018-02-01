<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 // $filecontents = file_get_contents("/Users/xahiru/Documents/trust/paper1tvdraft/MovieLens-RecSys/ml-1m/movies.dat");
         $filecontents = file_get_contents("/Users/xahiru/Documents/trust/paper1tvdraft/recEvel/laraExRec/database/mldata/ml-latest-small/movies.csv");

                $genres = explode("\n", $filecontents);
                foreach ($genres as &$row) {
                    // list($id,$genre) = explode("::",$row);
                   
                    list($id,$genre) = explode(",",$row);

                    if ($genre!="" && $id!=="") {
                        // $sql = "INSERT INTO genre (genre,id) VALUES ($id,$genre);\n";
                        // print $sql;
                        # Insert each into your DB here.

			         DB::table('movies')->insert([
			            'id' => $id,
			            'name' => $genre
			            // 'genre' => 'none',
			            // 'ratings' => 2,
			        ]);
                    }
                
			}
    }
}
