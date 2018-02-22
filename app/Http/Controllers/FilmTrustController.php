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

    public function tidal($source, $sink)
    {
    	$Graph;
    	$queue = array();
    	$this->init($color, $Graph);
    	array_push($queue, $source);
    	$depth = 1;
    	$max_depth = 9999;
    	$d = array();
    	$cached_rating = [];
    	$is_adjecent = false;
    	$temp_q = array();
    	$children = array();

    	while (count($queue) && $depth <= $max_depth) 
    	{
    		$n = array_shift($queue);
    		// array_push(array, var)
    		array_push($d, [$depth => $n]);

    		$adj = Friend::find($source)->friends();
    		$adj2 = Friend::find($n)->friends();

    		foreach ($adj as $friend) {
    			if ($friend == $sink)
    				$is_adjecent = true;
    		}
    		if ($is_adjecent) {
    			$cached_rating[$n][$sink] = rating($n,$sink);//implement rating() function
    			$max_depth = $depth;
   				$flow = min($path_flow[$n],rating($n,$sink));
   				$path_flow[$sink] = max($path_flow[$sink],$flow);
   				array_push($children, [$n => $sink]);
   			} else {
   		    	foreach ($adj2 as $n2) {
   		    		if ($color[$n2] == 1) {
   		    			$color[$n2] = 0;
   		    			array_push($temp_q, $n2);
   		    		}
   		    		$in_temp = false;
   		    		foreach ($temp_q as $temp) {
   		    			if(n2 == temp)
   		    				$in_temp = true;
   		    		}

   		    		if ($in_temp) {
   		    			$flow = min($path_flow[$n],rating($n,$n2));
   		    			array_push($children, [$n => $n2]);
   		    		}
   		    	}
    		}
   			if (empty($queue)){
   				$queue = $temp_q;
    			$depth = $depth +1;
    			$temp_q = [];
   			}
   			
    	}

    	$max = $path_flow[$sink];
    	$depth = $depth -1;

    	while ($depth > 0) {
    		while (count($d)) {
    			$np = array_shift($d);
    			$n = $np[$depth];


    		}
    	}

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
