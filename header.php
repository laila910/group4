<?php

   session_start();


   if(isset($_SESSION['user'])){
      echo $_SESSION['user']['name'];
      echo $_SESSION['id'];

   }else{

    echo 'NO session founded';
   }

?>

