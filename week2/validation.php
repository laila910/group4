<?php 

   
 
 function validation($input,$flag){

     $status = true;
     switch ($flag) {
         case 0:
             # code...

              if(empty($input)){
                 $status = false;
              }
             return $status;
             break;
         
         default:
             # code...
             return true;
             break;
     }



 }


?>