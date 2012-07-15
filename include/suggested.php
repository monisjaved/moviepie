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
		{	
		$arra=explode ("",$list[$j]);
		$url="http://api.rottentomatoes.com/api/public/v1.0/movies.json?q=".$arra[0]."&page_limit=5&page=1&apikey=uuacu746nquzs3f2679dcyv6";
		//$url="http://api.rottentomatoes.com/api/public/v1.0/movies.json?q=HarryPotter&page_limit=5&page=1&apikey=uuacu746nquzs3f2679dcyv6";
		//	echo $url ;
			$referer=$url ; 
			$json=getPage($url, $referer, $timeout, $header);
			$data=json_decode($json);
		//	$json = file_get_contents($url); $data = json_decode($json, TRUE);
			d($data);
									
		}
	}else
	echo "you have not added any movies in your fb profiel " ; 
	
	



?>