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
	echo $i ; 
	if($i > 0 ) 
	{
		echo " some similar movies " ; 
		d($list);
		for($j=0;$j<$i;$j++)
		{	$url="api.rottentomatoes.com/api/public/v1.0/movies.json?q=".$list[$j]."&page_limit=5&page=1&apikey=uuacu746nquzs3f2679dcyv6";
			echo $url ;
			$referer=$url ; 
			$u=getPage($url, $referer, $timeout, $header);
			$j1=json_decode($u);
			d($j1);
									
		}
	}
	
	



?>