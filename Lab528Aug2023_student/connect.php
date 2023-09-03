<?php
//Connect to MySQL database
$mysqli = new mysqli('localhost','root','','studentinfo');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>
