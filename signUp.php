<?php

  //--------->NOW  CREATE A FILE SIGN_UP IN CLASS FOLDER AND INCLUDE HERE
  include_once("./class/db.php");
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    function measure($data){
    $Error='';
      foreach($data as $data_key =>$value){
        if(empty($value)){
          
          $Error .= "<pre>"."can not be emty "."</pre>";
        } 
        if($data_key =='first_name'){
          if(is_numeric($value)){
              $Error .= "can not be number ";
          }
        }
        if($data_key =='last_name'){
          if(is_numeric($value)){
            $Error .= "<h3>can not be number</h3> ";
          }
        }
      
      }

      //when Error is empty and not have error
      if($Error ==""){
          create_signUp($data);
        }

      echo $Error; 
    };

    measure($_POST);
    
  }
  function create_signUp($data)
    {
      $email = $data['email'];
      $query_read = "select * from user where email='$email' limit 1";
      //print_r($query);
      $Db=new db();
      $check=$Db->read($query_read);
      if($check){
        echo "this email have sign up";
      } else {

        // return print_r($data);
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $password = $data['password'];
        $username = $email;
        $query_save = "insert into user(first_name,last_name,email,username,phone,password) 
            value('$first_name','$last_name','$email','$username' ,'$phone','$password')";

        $Db = new db();
        $result = $Db->save($query_save);
        if($result){
          return true;
          die;
        }else{
          return false;
        }
        
      }
    }



?>

<form action="./signUp.php" method="post">
  <input type="text" placeholder="first_name" id="first_name" name='first_name'>
  <input type="text" placeholder="last_name" id="last_name" name='last_name'>
  <input type="email" placeholder="email" id="email" name='email'>
  <input type="number" placeholder="phone" id="phone" name='phone'>
  <input type="password" placeholder="password" id="password" name='password'>
  <input type="submit" value="sign_up" >
</form>