<?php
include "config.php"
$res=$dbh->Query("select * from movie ");

echo "<pre>"; 
print_r($res);
echo "</pre>";
?>