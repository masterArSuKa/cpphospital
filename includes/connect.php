<?php
$con = mysql_connect('hospital.cqn8jr4zs6zp.us-east-1.rds.amazonaws.com','admin','12345678');
if (empty($con)) {
 	echo mysql_error();
 } 
 $data = mysql_select_db("hospital");
 if (empty($data)) {
 	echo mysql_error();
 }
?>