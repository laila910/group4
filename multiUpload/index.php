
<?php
   // code ... 

   if($_SERVER['REQUEST_METHOD'] == "POST"){


    $count = count($_FILES['uploadedFile']['name']);


     $message = [];
    if($count > 0 ){




      for ($i=0; $i < $count ; $i++) { 
       

       // CODE ... 
     $tmp_path = $_FILES['uploadedFile']['tmp_name'][$i];
     $name     = $_FILES['uploadedFile']['name'][$i];
    //  $size     = $_FILES['uploadedFile']['size'];
    //  $type     = $_FILES['uploadedFile']['type'];
       

     $nameArray = explode('.',$name);
     $FileExtension = strtolower($nameArray[1]);

     $FinalName = rand().time().'.'.$FileExtension;

      $allowedExtension = ['png','jpg','pdf','mp4'];    

       if(in_array($FileExtension,$allowedExtension)){
        // code ....
      
        $disFolder = './uploads/';
        
        $disPath  = $disFolder.$FinalName;

         if(!move_uploaded_file($tmp_path,$disPath))
           {
               $message['error'] =  'Error In upload try again';
           }

       }else{
        $message['error'] =  ' extension not allowed';
       }
    
      }
       

    }else{
      $message['error'] =  '  please  Upload File';
    }



    if(count($message) > 0){
      foreach($message as $data){
        echo '* '.$data.'<br>';
      }
    }else{
      echo 'File Uploaded';
    }



   }




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Upload Your File</h2>
  <form  method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"   enctype="multipart/form-data">
 

  <div class="form-group">
    <label for="exampleInputPassword1"> File</label>
    <input type="file"  name="uploadedFile[]"  multiple="multiple">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>

</body>
</html




