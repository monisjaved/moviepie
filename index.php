<?php
    try {
	include_once "fb.php";
	} catch(Exception $o){
            d($o);
    
    if ($user){
        
        try{
            $fql            =   "select name, hometown_location, sex, pic_square from user where uid=" . $user;
            
           
            $param  =   array(
                'method'    => 'fql.query',
                'query'     => $fql,
                'callback'  => ''
            );
            $fqlResult   =   $facebook->api($param);
        }
        catch(Exception $o){
            d($o);
        }
    }
  
   // $page   =   isset($_REQUEST['page']) ? $_REQUEST['page'] : "home.php";
    include_once "template.php";
?>