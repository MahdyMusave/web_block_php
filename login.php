<?php
  session_start();
  
  include_once("./class/db.php");



  if ($_SERVER["REQUEST_METHOD"] = "POST") {
    function check_user($data){
    $email = $data['email'];
    $password = $data['password'];

    $query = "select * from user where email='$email' and password='$password' limit 1";
    $Db=new db();
    $result=$Db->read($query);
    if($result){
      $row=$result[0];
      if($password ==$row['password']){
        $_SESSION['userid_by_email'] = $row['email'];
        header("location:profile.php");
      }
    }



    }
    check_user($_POST);
   
  }

?>

<form action="./login.php" method="post">
  <input type="email" placeholder="email" id="email" name='email'>
  <input type="password" placeholder="password" id="password" name='password'>
  <input type="submit" >
</form>