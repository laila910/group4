<?php 

   require '../dbConnection.php';

   # Clean input ...
   function CleanInputs($input){

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }

    $errorMessages = array();
    if($_SERVER['REQUEST_METHOD'] == "POST" ){

       $key = CleanInputs($_POST['key']);

        // key Validation ... 
        if(empty($key)){

            $errorMessages['SearchKey'] = "Required";
        }



     if(count($errorMessages) == 0){

        // Code ... 
      
         $sql = "select * from students where name like '%$key%' or dep like '%$key%'";

         $op = mysqli_query($con,$sql);

         if(mysqli_num_rows($op) > 0){
             // code ...
            $_SESSION['data'] = $op;

         }else{

            echo 'NO Matched Data ';
         }




     }else{

     // print error messages 
     foreach($errorMessages as $key => $value){

        echo '* '.$key.' : '.$value.'<br>';
        }
      } 
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Search Engine</h2>
  <form  method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  enctype ="multipart/form-data">
 


  <div class="form-group">
    <label for="exampleInputPassword1"> Search Key</label>
    <input type="text"  name="key" class="form-control" id="exampleInputPassword1" placeholder="enter Search Key">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Search</button>
</form>
</div>

</body>
</html>




<?php 
   
   if(isset($_SESSION['data'])){


     while($fetched_data =  mysqli_fetch_assoc($_SESSION['data'])){

          echo '* '.$fetched_data['id'].' '.$fetched_data['name'].' '.$fetched_data['dep'].'<br>';
     }

   }


    unset($_SESSION['data']);


?>





