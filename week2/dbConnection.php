<?php 
  session_start();
  
 $server = "localhost";
 $dbName = "group4";
 $dbUser = "root";
 $dbPassword = "";


 $con =  mysqli_connect($server,$dbUser,$dbPassword,$dbName);

  if(!$con){

    die('Error Message '.mysqli_connect_error());

  }


?>