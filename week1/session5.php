<?php 

//   session_start();

//    $_SESSION['name'] = "Ahmed";
//    $_SESSION['id'] = 20;

//    $_SESSION['user'] = ["name" => "ahmed" , "age" => 20];

//    echo 'Session Created';

 //include 'header.php';
 //require 'header1.php';

 //   $age = 20;

//   if($age > 20){

//     echo 'test message';
//   }else{

//     echo 'message2';
//   }



//    $message = "message2";
   
//    if($age > 20){
//        $message = "test message";
//    }

//    echo $message;


//      $check = ""

//        filter_var($check,FILTER_VALIDATE_URL);





//  $age = 20;
//  $name = "Omar";
  //echo $x;



//include 'footer.php';




// $json ='{"name" : "root" , "age" : 20}';

//    $obj = json_decode($json);

//    echo  $obj->name.' || '.$obj->age;

// $arr =   json_decode($json,true); // assoc array 

// echo $arr['name'].' | '.$arr['age'];

//   $stdData = array("name" => "Root","age" => 20 , "level" => 3); // []
//     echo json_encode($stdData);






function divNumbers($num1,$num2){

    if($num2 == 0 ){
        throw  new Exception("number2 = 0 ......",111);
    }

    return $num1/$num2;

     
}


  try{
    
    echo divNumbers(10,2);

  }catch(Exception $e){
   
    echo $e->getMessage().'<br>';
    echo $e->getLine().'<br>';
    echo $e->getCode();

  }finally{

        echo 'process done';
  }









?>

