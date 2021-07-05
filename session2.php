<?php 

//declare(strict_types=1);



# Task ... 

//  $num1 = 1;
//  $num2 = 2;
//  $op   = '-';


// switch ($op) {
//     case '+':
//         # code...
        
//         echo $num1+$num2;
//         break;

//     case '-': 
        
//         echo $num1-$num2;
//     break;

// }



// echo 'php course';
// echo 'php course';
// echo 'php course';
// echo 'php course';

// for ($i=0; $i < 10 ; $i++) { 
//     # code...
 
//     if($i == 4){
//       // break;

//        continue;
//     }
//     echo 'php course'.$i.' <br>';

// }


/*


*
**
***
****
*****
******
*******
********


*/




    // for ($rows=0; $rows < 8 ; $rows++) { 
    //     # code...

    //     for ($cols=0; $cols <= $rows ; $cols++) { 
    //         # code...

    //         echo '*';
    //     }

    //     echo '<br>';
    // }

// $a = 2;

// while ($a <= 10) {
//     # code...

//     echo 'php course<br>';

//     $a++;
// }



// do {
//     # code...
//     $a++;
//     echo 'php course<br>';
 
 

// } while ($a <= 10);



// foreach  (arrays)


  // 4 >>> 4*3*2*1

 //  4


//   $num = 4;
//   $factorial = 1;

//      for ($i=4; $i > 0 ; $i--) { 
//          # code...

//          $factorial = $factorial*$i;
//      }


//      echo $factorial;




// function message($name = null,$age= 18){
//     // function body 
//   //  echo 'welcome '.$name.' & Your Age = '.$age.' <br>';

//     return $name;


// }




// message();

//   echo  message("ROOT",2);




// function UserData($age):int{

//    return 1;

// }


// //echo UserData(20).'<br>';

// echo UserData("age = 20");




//   $age = 20;


//    function message(){

//     //   $name = " Omar";
//     //   echo $name;
//     global $age;

//       echo $age;

//    }


//      message();




//   function printNumber(){

//     static $x = 0;

//      echo $x.'<br>';

//      $x++;

//   }


//   printNumber();

//   printNumber();

//   printNumber();

//   printNumber();




//      function addNumber(&$num){

//            $num +=10;
//        }

//   $number = 5;
   
//   addNumber($number);

//   echo $number;     


  // $txt = "php course Nti";

  // echo  strlen($txt);
 
  // echo  str_word_count($txt);

  // echo  strrev($txt);

  //echo strpos($txt,"Nti");

 //   echo  str_replace('php','js',$txt);


//   $value =  explode(' ',$txt);

//   //  var_dump($value);

//   $str_value = implode('_',$value);

//   var_dump($str_value);

// $check = 12.5;

// var_dump(is_int($check));

// var_dump(is_float($check));

//  echo  pi();

//2,5,0,-1,10 

    // echo min(2,5,0,-1,10 );
    // echo max(2,5,0,-1,10 );
    // echo  sqrt(64);

    //   echo  rand(1,100);

    //    echo round(3.4);



# Array

// $names = array();

// $names = [];


# indexed array ... 

// $names = array('Root',20,3,3.4);



 // var_dump($names);

 //print_r($names);


//  echo  'Welcome  : '.$names[0];

//  foreach($names as $key => $value){

//        echo $key.' || '.$value.'<br>';

//  }





//    $txt = "php js c++ c# java";


//    $array = explode(' ',$txt);


//   // print_r($array);


//    foreach($array as $key => $value){

//      echo $key.' || '.$value.'<br>';


//    }




# Associative array ... 

// $names = array('name' => 'Root','age' => 20,'level' => 3,'GPA' => 3.4);

//  //print_r($names);

// //  echo $names['name'];


//   foreach ($names as $key => $value) {
//       # code...

//      echo $key.' || '.$value.'<br>';

//   }



# multidimensional array . 


   $students = array(
       
       array("Root",18),
       array("X",13,2.4,'isOnline',2,3,5,6,2),
       array("Y",1.4)

   );

    //   echo $students[0][1];

     //count();


    for ($rows=0; $rows < count($students) ; $rows++) { 
        # code...

    for ($cols=0; $cols < count($students[$rows]); $cols++) { 
        # code...

       echo $students[$rows][$cols].'   ';


    }

    echo '<br>'; 

    }



?>





