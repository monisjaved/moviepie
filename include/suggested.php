<?php 
include_once "config/facebook.php" ; 
$user = $facebook->getUser();

if($user){
	//get user data and access token
	try {
		$userd = $facebook->api('/me/movies');
		//print_r($userd);
		$list=array();
		$i=0 ; 
		foreach ($userd[data] as $movies )
		{
		$list[$i]= $movies[name];
		$i++ ; 
		}
		
	} catch (FacebookApiException $e) {
		die("API call failed");
	}
	
	
	}
	else echo "no user data";

	if($i > 0 ) 
	{
		echo " some similar movies " ; 
		//d($list);https://freeforall.herokuapp.com/movies.php?mid=770805429
		for($j=0;$j<$i;$j++)
		{	
			$arra=explode (" ",$list[$j]);
		    $url="http://api.rottentomatoes.com/api/public/v1.0/movies.json?q=".$arra[0]."&page_limit=5&page=1&apikey=uuacu746nquzs3f2679dcyv6";
			$referer=$url ; 
			$json=getPage($url, $referer, $timeout, $header);
			$data=json_decode($json);
			//d($data);
			$ki=0;
			foreach($data->movies as $suggest )
				{	
					if($list[$j] == $suggest->title )
					{
					
					}
					else
						d("<a href='movies.php?mid=".$suggest->id."'>".$suggest->title."</a>");
					$ki++;
					if ($ki > 5 )
						break ; 
				}
		}
	}else
		echo "you have not added any movies in your fb profiel " ; 
	
	



?>