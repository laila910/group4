<?php 
      // setcookie("name","Ahmed",(time()+(60*60)),'cookies.php');
     //  setcookie("name","Ahmed",(time()-(60*60)),'cookies.php');

   //  unset($_COOKIE['name']);


?>
<html>
    <head> 
<title> Cookies </title>
    </head>
<body>

        
     <?php 
         
         if(isset($_COOKIE["name"])){

             echo "Welcome ".$_COOKIE['name'];

         }else{

            echo 'No cookie Found';
         }
     
     
     ?>




</body>


</html>