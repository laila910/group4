<!DOCTYPE html>
<html>
<head>
   <title>Board</title>
</head>

<body>
     
<table width="500px">
    <?php 
    
       for ($rows=1; $rows <=8 ; $rows++) { 
    
       echo '<tr>';
        for ($cols=1; $cols <=8 ; $cols++) { 
            # code...

          $total = $rows + $cols;

          if(($total%2) == 0){

            // even 
           echo "<td  height='40px' width='40px' bgcolor='#FFFFFF' ></td>";

          }else{
              // odd
              echo "<td  height='40px' width='40px' bgcolor='#000000' ></td>";

          }
                    

        }
     
        echo '</tr>';

       }
    
    
    ?>
</table> 


</body>
</html>