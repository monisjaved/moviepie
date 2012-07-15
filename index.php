<?php
include "config.php"
$res=$dbh->Query("select * from movie ");
while($row=$dbh->FetchRow($res))
{
echo "<pre>"; 
print_r($row);
echo "</pre>";
} 
?>