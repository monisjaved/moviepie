<?php
   
    $fbconfig['appid' ] = "437250146304463";
    $fbconfig['secret'] = "c793f75f4e1cecbc28e7e377ce7d511e";

    $fbconfig['baseUrl']    =   "https://freeforall.herokuapp.com/";
    $fbconfig['appBaseUrl'] =   "http://apps.facebook.com/knowyourcollege/";

    
    
    if (isset($_GET['code'])){
        header("Location: " . $fbconfig['appBaseUrl']);
        exit;
    }
   
   
    if (isset($_GET['request_ids'])){
        //user comes from invitation
        //track them if you need
    }
    
    $user            =   null; //facebook user uid
    try{
        include_once "facebook.php";
    }
    catch(Exception $o){
        echo '<pre>';
        print_r($o);
        echo '</pre>';
    }
    
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));

    
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

    if (!$user) {
        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        exit;
    }
    
   
    $userInfo           = $facebook->api("/$user");

    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
?>
