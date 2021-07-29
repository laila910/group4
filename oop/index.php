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




 //  book{title,author,content,[added_by()]} , Novel{title,content,[addedBy(),pub_at()]}    >>


 // parent calss {  title,content[added_by()] }
 // child book{ author }  
 // child Novel { pub_at() }

 



//  class library{

//     var $title,$content;


//       function setTitle($value){
//           $this->title = $value;
//       }


//       function setContent($value){
//         $this->content = $value;
//     }


//      function getTitle(){
//          return $this->title;
//      }

//      function getContent(){
//          return $this->content;
//      }




//     function added_by(){
//         return 'Added By Admin';
//     }

//  }



//   class book  extends library {

//       var $author;


//       function setAuthor($value){
//         $this->author = $value;
//     }


//      function getAuthor(){
//          return $this->author;
//      }

//   }





//   class Novel extends library{

//     function Publish_at(){

//         return 'Pub At 9:00 AM ';
//     }

//   }



//   $obj1 = new book();


//   $obj1->setAuthor("Omar");

//   //echo $obj1->getAuthor();


//   echo $obj1->added_by().'<br>';



//   $obj2 = new Novel();

//   echo $obj2->added_by().'<br>';

//   echo $obj2->Publish_at();








// users{ [name,email,password],[login]  }

// 2 {admins[ {addStudent}   >> login ....  "Admin Login " ]  , students[phone] {joinCourse} [login   >>>> " student login"     ] }



// class users{

//     var $name,$email,$password;

//     function __construct($value1,$value2,$value3){

//         $this->name     = $value1;
//         $this->email    = $value2;
//         $this->password = $value3;

//     }

//    final function login($email,$password){
//        // Logic .... 
//        return "Function Logic";
//    }



//    function getData(){
//        return $this->name.'<br>'.$this->email.'<br>'.$this->password.'<br>';
//    }

// }






// class students extends users{

//     var $phone;

//     function __construct($value1,$nameValue,$emailValue,$passwordValue){

//         $this->phone    = $value1; 


//         users::__construct($nameValue,$emailValue,$passwordValue);

//     }

//    function JoinCourse(){
//        // Logic
//        return "Join Course Logic";
//    }



// //    function login($email,$password){
// //     // Logic .... 
// //     return "student Login";
// // }



// }


// class admins extends users{


//    function addStudent(){
//        // Logic
//        return 'Add Student';
//    }
// }




// $obj  = new students('01000x','Root','root@root.com','Tech123');

// //echo $obj->JoinCourse();

// echo $obj->login('test@a.com','Tech123');







//  class library{

//     protected $title,$content;


//     function setTitle($value){
//       $this->title = $value;
//   }


//    function getTitle(){
//        return $this->title;
//    }



//       function setContent($value){
//         $this->content = $value;
//     }


//      function getContent(){
//          return $this->content;
//      }




//     protected function added_by(){
//         return 'Added By Admin';
//     }

//  }


// //   $obj = new library();

// //   $obj->title="tets";

// // echo $obj->title;


// //  echo $obj->added_by();



//    class book  extends library  {

//       private $author;


//       function setAuthor($value){
//         $this->author = $value;
//     }


//      function getAuthor(){
//          return $this->author;
//      }



//      function test(){
//        return $this->added_by();
//      }



//   }




// $bookObj = new book();
//  $bookObj->title = "IT";

//  echo $bookObj->getTitle();







// class messages{
 
//    public static  $name= "ROOT";

//   public  function printMessage(){

//     return 'Welcome to Our site'.self::$name;
//   }



// }


// // $obj = new messages();
// // echo  $obj->printMessage();


// echo messages::printMessage();







interface contactMethods{

    public function sendMail();
    public function sendMessage();
    // 
}




interface contactMethods2{

  public function sendMail2();
 
  // 
}


class students  implements contactMethods,contactMethods2{

  // Logic ... 

 
  public function sendMail(){

    return 'Mail sended';
  }




  public function sendMail2(){

    return 'Mail sended';
  }



  public function sendMessage(){
    return 'Message Sended';
  }

  public function test(){
    return 'test message';
  }


}


$obj = new students();

echo $obj->sendMail2();





//  abstract class car{

//   private $name ;

//    function setName($value){
//      $this->name = $value;
//    }

//   function getName(){

//     return $this->name;
//   }


//   public abstract function sendNotification();

// }




// class BMW extends car{

// // Logic ... 


//    function message(){
//      return 'Welcome';
//    }



//    public function sendNotification(){

//     return 'Notification Sended';
//    }


// }



//   $obj = new BMW();
//   $obj->setName('Root');  
//   echo $obj->getName();

// trait


// class users{

//   public $name,$email;
// }




// trait sendNotification{

//   public $title;

// }




// class admin  extends users{

//   use sendNotification;

//   public $OTP;
// }



//   $obj = new admin();

//   $obj->title="test message";

//   echo $obj->title;




?>