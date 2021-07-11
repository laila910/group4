<?php 

//   $students = array('a','z','x','y');

// //  sort($students);
//     rsort($students);

//  print_r($students);


//    $numbers = array(5,7,0,1,6,88);

//      rsort($numbers);

//      print_r($numbers);




// $studentsAge = array("y" => 20 , "z" => 31 , "x" => 25);

//   asort($studentsAge);

//  arsort($studentsAge);


  //ksort($studentsAge);

//   krsort($studentsAge);

//   print_r($studentsAge);


// echo   $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];

// echo $_SERVER['SERVER_SOFTWARE'];


// echo $_SERVER['REMOTE_ADDR'];
  
// ECHO $_SERVER['SERVER_PORT'];

//  echo $_SERVER['SCRIPT_NAME'];

//    echo $_SERVER['REQUEST_METHOD'];



//  $_GET , $_POST ,$_REQUEST

?>





<?php 
   // form logic 



//    $str = "<h1> test </h1>";

          

//      echo htmlspecialchars($str);

//       < ==   &lt   , > == &gt

   # Clean input ...
   function CleanInputs($input){

       $input = trim($input);
       $input = stripcslashes($input);
       $input = htmlspecialchars($input);

       return $input;
   }





     if($_SERVER['REQUEST_METHOD'] == "POST"){

     // CODE ... 

       $name     = CleanInputs($_POST['name']);
       $email    = CleanInputs($_POST['email']);
       $password = CleanInputs($_POST['password']);

  
       echo $name.'<br>'.$email.'<br>'.$password;
     }



    //   else{


    //   $name  =   $_GET['name'];
    //   $email =   $_GET['email'];
    //   $password = $_GET['password'];

  
    //   echo $name.'<br>'.$email.'<br>'.$password;

    //  }



// if($_SERVER['REQUEST_METHOD'] == "POST"){
//   echo $_REQUEST['name'].'<br>'.$_REQUEST['email'].'<br>'.$_REQUEST['password'];

// }









   # Filters   

//    $email = "test@gmail.com";
//    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

//     $san_email =   filter_var($email,FILTER_SANITIZE_EMAIL);
//     if(filter_var($san_email,FILTER_VALIDATE_EMAIL)){

//       echo 'Note : '.$san_email;

//     }
// }else{

//     echo 'Valid Email';
// }


//   $age = '20x';
//    echo  filter_var($age,FILTER_SANITIZE_NUMBER_INT);
  //var_dump(filter_var($age,FILTER_VALIDATE_INT));


//   $url = "http://localhost/group4/session3.php";


  
//       echo filter_var($url,FILTER_SANITIZE_URL);
//       var_dump(filter_var($url,FILTER_VALIDATE_URL));



    // $ip = "127.0.0.1"; 
    // var_dump(filter_var($ip,FILTER_VALIDATE_IP));



      $txt = '<h1> test content </h1> ';
      echo  filter_var($txt,FILTER_SANITIZE_STRING);





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
  <h2>Vertical (basic) form</h2>
  <form  method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  enctype ="multipart/form-data">
 
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>





