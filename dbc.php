<?php

$hostname = 'localhost';
$username = 'root';
$userpass = '';
$dbname = 'tanzin';

$con= mysqli_connect($hostname,$username,$userpass) or die ('Database connection error');
mysqli_select_db($con,$dbname);

?>