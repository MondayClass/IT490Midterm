<?php



error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors',1);
$u = ($_POST["user"]);
$p = ($_POST["pass"]);


$host = "localhost";
$DBuser = "IT490";
$DBpass = "1234";
$database = 'loginDB';

$DBconnection = mysqli_connect($host, $DBuser, $DBpass, $database);

$query=mysqli_query($DBconnection, "SELECT * from login WHERE Username ='$u' && Password='$p'");

$rows = mysqli_num_rows($query);

if($rows==1) { echo "Hello again, $u, your music is loading...";}

else { echo "SORRY $u, would would you like to become a member!!";}


?>
