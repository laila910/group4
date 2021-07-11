<?php 


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
       $password = CleanInputs($_POST['password']); 
       $bDate    =  strtotime($_POST['Bdate']);

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


        // Password Validation ... 
        if(!empty($password)){
           // code ...   
            if(strlen($password) < 6){

               $errorMessages['Password'] = "Password Length must be > 5 "; 
            }

        }else{

          $errorMessages['Password'] = "Required";

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

        echo 'Valid Data';
     }else{

     // print error messages 
     foreach($errorMessages as $key => $value){

        echo '* '.$key.' : '.$value.'<br>';
     }





     }


    }




// date ... 

 // date(format,timestamp);

   //date('');


//    d 1:31
//    D Mon,Sun 
//    m 1:12
//    M  jan,dec
//    y 21,22 
//    Y  2021,2022

 // echo  date('D-m-Y');


//   h 01:12 
//   H 00:23 
//   i 00:59
//   s 00:59 
//   a (am , pm )
//   A (AM,PM)



  //echo date('d/Y  h:i:s a',1625657594);

  //echo  time(); 


   //  12/2/2019 9 30 21        12/02/2019 09:30:21 am    02/12/2019 09:30:21 am
   // mktime(hour,min,sec,month,day,year);
   // echo  mktime(9,30,21,12,2,2019);   // 1549960221


      // echo date('d/m/Y h:i:s a',1575275421);


     


    //  strtotime('1/1/2010');


   //echo date('d/m/y h:i:s  a',1609455600);








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
 

  <div class="form-group">
    <label for="exampleInputPassword1">Birth Date</label>
    <input type="date"  name="Bdate" class="form-control" >
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>





