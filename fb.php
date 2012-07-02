<?php

    $fbconfig['appid' ] = "437250146304463";
    $fbconfig['secret'] = "c793f75f4e1cecbc28e7e377ce7d511e";

    $fbconfig['baseUrl']    =   "https://freeforall.herokuapp.com/";
    $fbconfig['appBaseUrl'] =   "http://apps.facebook.com/knowyourcollege/";
   
    if (isset($_GET['code'])){
        header("Location: " . $fbconfig['appBaseUrl']);
        exit;
    }
    //~~
	echo "hello " ;
    
    //
    if (isset($_GET['request_ids'])){
        
    }
    	echo "hello " ;
    $user            =   null; 
    try{
        include_once "facebook.php" ;
    }
    catch(Exception $o){
        echo '<pre>';
        print_r($o);
        echo '</pre>';
    }
		echo "hello " ;
    
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));
	echo "hello " ;
  
    $user       = $facebook->getUser();
    
    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'email,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown'
            )
    );

    if ($user) {
      try {
       
        $user_profile = $facebook->api('/me');
      } catch (FacebookApiException $e) {
        d($e);  
        $user = null;
      }
    }
	echo "hello " ;
    if (!$user) {
        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        exit;
    }
    
    //get user basic description
    $userInfo           = $facebook->api("/$user");
	echo "hello " ;
    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
?>