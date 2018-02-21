<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class FilmTrustController extends Controller
{
     public function index(Request $request)
    {
    	//Prepare friends list view
    	// return view('choose friends');

    }

    public function filmTrust($frindsIdList, $Movieid)
    {
    		$trustVlues = tidalTurst($frindsIdList,$Movieid);
    		$sumWeightedTrust = 0;
    		$sumTrust = 0;

    		foreach ($trustVlues as $id => $value) {
    			$sumWeightedTrust = $sumWeightedTrust + ($value * Rating::find($id)->rating);
    			$sumTrust = $sumTrust + $value;
    		}
    		return $sumWeightedTrust/$sumTrust;

    }

    public function createGraph($value='')
    {
    	//Random Graph
    		
    }
    public function tidalTurst($uid, $movieid)
    {
    	$trustValues = [];
    	$found = false;
    	$depth = 1;

    	// while($found){
    	// 	
    	// 	$friends;
    	// 	if($friends.length == 0 && found == false){
    	// 		$friendLists = Friend::find($uid)->friends(); //combined tables calls
    	// 	}
    		
    		
    	// 	foreach ($friendLists as $friend) {
    	// 		$rateList = Rating::find($id)->rating;
    	// 		if ($rateList.contains($Movieid)) {
    	// 			$found = true;
    	// 		}else{
    	// 			$friendLists.remove($friend);
    	// 			$friends.add($friend);
    	// 		}
    	// 	}
    	// 			}

    		// function breadthFirst($graph, $start, $visited){
				$visited = array();
    			$queue = array();
				init($visited, $graph);

    			array_push($queue, $uid);
    			$visited[$uid] = 1;


				
				while (count($queue)) {
					$depth++;
					$t = array_shift($queue);
					$friends = Friend::find($t)->friends();
					foreach ($friends as $id => $vertex) {

						$rateList = Rating::find($id)->rating;

					      if ($rateList.cointains($movieid)) {
					            $found = true;  
					            }
					        else{
					        	array_push($queue, $id);
					        }
					        }
					    }
    			print_r($visited);
  
    		

	return $trustValues;
    	
    
}

function init($visited, $graph){
			    foreach ($graph as $key => $vertex) {
			        $visited[$key] = 0;
			    }
			}
	
}
