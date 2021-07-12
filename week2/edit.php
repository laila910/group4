<?php 

   require 'dbConnection.php';
    
   $id = $_GET['id'];
   $id = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
  
   $message = "";

   if(!filter_var($id,FILTER_VALIDATE_INT)){

    $_SESSION['message'] = "Invalid Id";

    header("Locattion: index.php");
   }






   # Clean input ...
   function CleanInputs($input){

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }

    $errorMessages = array();
    if($_SERVER['REQUEST_METHOD'] == "POST" ){

       $name  = CleanInputs($_POST['name']);
       $email = CleanInputs($_POST['email']);
       $bDate =  strtotime($_POST['Bdate']);

       $checkDate = strtotime('1/1/2010');

        // Name Validation ...
        if(!empty($name)){
          // code ... 
           if(strlen($name) < 3){
              $errorMessages['name'] = "Name Length must be > 2 "; 
             }
        }else{
          $errorMessages['name'] = "Required";
        }


        // Email Validation ... 
        if(!empty($email)){
           // code ... 
           if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errorMessages['email'] = "Invalid Email";
           }

        }else{
            $errorMessages['email'] = "Required";
        }


          if(!empty($bDate)){
              // code ... 
            if($bDate > $checkDate){

                $errorMessages['Bdate'] = "Date Must be < 1/1/2010";
            }

          }else{

            $errorMessages['Bdate'] = "Invalid Date";
          }



     if(count($errorMessages) == 0){

          // DB CODE... 
          $date = $_POST['Bdate'];

          $sql  = "update users set name='$name' , email ='$email' , bDate ='$date'  where id =$id ";
     
          $op   =  mysqli_query($con,$sql);

          //mysqli_error($con);

       if($op){
           $_SESSION['message'] = "Record Updated";
            header("Location: index.php");
       }else{
        $errorMessages['sqlOperation'] = "Error in Your Sql Try Again";
    }



     }else{

     // print error messages 
     foreach($errorMessages as $key => $value){

        echo '* '.$key.' : '.$value.'<br>';
         }
       }
    }







   


  
    // Fetch single Row of Data .... 
     $sql = "select * from users where id = $id";
     $op = mysqli_query($con,$sql); 
     $data = mysqli_fetch_assoc($op);
  
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Data </h2>
  <form  method="post"  action="edit.php?id=<?php echo $data['id'];?>"  enctype ="multipart/form-data">
 
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name"   value="<?php echo $data['name'];?>"   class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  value="<?php echo $data['email'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Birth Date</label>
    <input type="date"  name="Bdate"   value="<?php echo $data['bDate'];?>"  class="form-control" >
  </div>


  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

</body>
</html>





