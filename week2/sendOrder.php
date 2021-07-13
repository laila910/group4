<?php 

  session_start();

    ///

   if($_SERVER['REQUEST_METHOD'] == "POST"){


    require 'checkLogin.php';
    echo 'Order Details';
   
  
  
  }






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Order</h2>
  <form  method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  enctype ="multipart/form-data">
 


  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div> 
 
  <button type="submit" class="btn btn-primary">Send Order</button>



</form>
</div>

</body>
</html>





