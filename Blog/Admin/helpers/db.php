<?php 

$server = "localhost";
$dbName = "gblog";
$dbUser = "root";
$dbPassword ="";


 $con = mysqli_connect($server,$dbUser,$dbPassword,$dbName);

 if(!$con){
     die('Error '.mysqli_error_connect());
 }

?>