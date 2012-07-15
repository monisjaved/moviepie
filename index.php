<?php

 try{
            include "config.inc.php";
        } catch (Exception $e) {
            echo "<pre>"; 
			print_r($e);
			echo "</pre>";
        }
 try{
            $res=$dbh->Query("select * from movie ");
        } catch (Exception $e) {
            echo "<pre>"; 
			print_r($e);
			echo "</pre>";
        }

    
?>