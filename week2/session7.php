<?php 

// RELATIONS .... 


//  1:1 
//  1:m    || m:1
//  m:m 






  // users [ Name , password , email , address {country,gov,city,st_number,F_number} ]

                
//   Users Table 

//   id  Name  Password  Email                Address 
//   1    ROOT 123        ROOT@ROOT.COM       eg,Cairo,Naser City,13 x,15






//   Users Table 
//   id  Name  Password  Email       address_id
//   1    Root  123      r@r.com       1
  

//   Address 
//   id country gov      city      st_number f_number     
//   1   eg     Cairo   NaserCity  13 x       15           



//   users        address 
//   1              1
//   1              1
// =========================  
//   1       :      1
 








// students 
// id  Name  Password  Email            dep 

// 1   Ahmed  123      x@yahoo.com       cs 
// 2   zzzz  123       x@yahoo.com       computer science  


// dep
// id Title 

// 1   CS 
// 2   IT 
// 3   SE


//    students     dep 

//     1            1
//     m            1
// =======================
//     m      :     1    


   




//   1- doctors      (name,email,password)       @x.com x   1234  
//   2- patients     (name,email,password)
//   3- nurses       (name,email,password)

// admins (name,email,password)                     x@x.com    1234

// vistors (name,email,password)     

// x (name,email,password)
// y (name,email,password)    

//   appointments(from , to , day )



// users       userType   
// 1            1 
// m            1 

// ====================
// m   :      1   



// userType 
// id    title  
// 1      doctors 
// 2      nurse 
// 3      patient 
// 4      Vistors 
// 5        x 




// users   

// id name   password  email    userType 
// 1   x      7777      x@x       1
// 2   q      7777      q@x       1
// 3   N      7777      N@x       3
// 4   V      7777      V@x       4
// 5   Test   7777      TETS@x    5





// appointments 

//   id    day    from     to      doc_id
//   1      wen    3:00pm  3:30pm   1  
//   2      wen    3:00pm  3:30pm   2 
//   3      sat    3:00pm  3:30pm   1  



// Reservations 
// id    patient_id    appointment_id     doc_id
// 1       3             3                 1 






//   students 
// id   name   password   email   
// 1    Ahmed   123       x@yahoo.com        
// 2    zzzz    123       x@yahoo.com       



//   courses 
//  id    title 
//   1     PL1
//   2     PL2 
 


// students       courses 
// 1                m 
// m                1
// ========================
// m      :      m 




// student_course 
// id    std_id     course_id   










?>