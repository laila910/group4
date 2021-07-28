<?php 


// admin >>> name , email ,password , 



// class admin{
 
//     //  Logic ... 
//     var $name;

//     function setName($value){
//            $this->name = $value;
//     }


//     function getName(){
//         return $this->name;
//     }




//     function printMesssage(){

//         return 'welcome to php course';
//     }



// }







//  $obj = new admin;

//  $obj2 = new admin;

//  $obj->setName('Ahmed');

//   echo  $obj->getName().'<br>';

//   echo $obj->printMesssage().'<br>';

//   $obj2->setName('Root');

//   echo $obj2->getName();





 // 3 = 3*2*1;




//  class CalculateFactorial{


//       function calculate($num){
//        // Logic '
//        $result = 1;
//        for($i=1;$i<=$num;$i++){

//            $result *=$i; 
//        }
//       return $result;
//       }


//  }


// $obj = new CalculateFactorial;

// echo $obj->calculate(4);




//  class users{

//     var $name,$email,$phone;


//      function __construct($value,$value2,$value3=Null){

//         $this->name  = $value;
//         $this->email = $value2;
//         $this->phone = $value3; 
//      }

//     function StudentData(){
//         return $this->name.'<br>'.$this->email.'<br>'.$this->phone;
//     }


//     function __destruct(){
//         echo 'End of Class';
//     }




//  }



//  $obj = new users('Omar','Omar@yahoo.com');

// echo  $obj->StudentData();
 






// $obj = new students('osama','os@gamil','2654');


//students {name,email {'required'}   ,phone 'optional'}








// users{ [name,email,password],[logib]  }

// 2 {admins[ {addStudent} ]  , students[phone] {joinCourse}  }


class students{

    var $name,$email,$password,$phone;

    function __construct($value1,$value2,$value3,$value4){

        $this->name     = $value;
        $this->email    = $value2;
        $this->phone    = $value3; 
        $this->password = $value4;

    }

   function login($email,$password){
       // Logic .... 
   }

   function JoinCourse(){
       // Logic
   }
}


class admins{

    var $name,$email,$password;

    function __construct($value1,$value2,$value3){

        $this->name     = $value;
        $this->email    = $value2;
        $this->phone    = $value3; 
    }

   function login($email,$password){
       // Logic .... 
   }

   function addStudent(){
       // Logic
   }
}





 




?>