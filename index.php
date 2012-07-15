<?php

 try
        {
            include "config.php";
        } catch (Exception $e) {
            echo "<pre>"; 
			print_r($e);
			echo "</pre>";
        }
 try
        {
            $res=$dbh->Query("select * from movie ");
        } catch (Exception $e) {
            echo "<pre>"; 
			print_r($e);
			echo "</pre>";
        }
echo "<pre>"; 
print_r($res);
echo "</pre>";
?>