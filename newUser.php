<?php

error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors',1);

//retrieve from registration page
$u = ($_POST['user']);
$p = ($_POST['pass']);
$f = ($_POST['first']);
$l = ($_POST["last"]);
$e = ($_POST["email"]);
$n = ($_POST["number"]);
echo"$u,$p,$f,$l,$e,$n";
//login into database
$host = "localhost";
$DBuser = "IT490";
$DBpass = "1234";
$database = 'loginDB';

$DBconnection = mysqli_connect($host, $DBuser, $DBpass, $database);

//query to insert new user
$nUser = "INSERT INTO login VALUES('$u','$p','$f','$l','$e','$n')";
$newUser=mysqli_query($DBconnection, $nUser)or die(mysqli_error($DBconnection));

//if statementto run sql queryi
if ($DBconnection->query($newUser) == FALSE)
{ echo "Created Record Successfully";
}
else {echo"Could not create record";
}

?>
