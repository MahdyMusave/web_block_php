<?php
  
  session_start();

  
  include_once("./class/db.php");
  //  print_r( $_SESSION['username']);
  

if($_SERVER['REQUEST_METHOD']=="POST"){
    // print_r($_POST);
    function create_post($data){
    // return print_r($data);
      $content_id=$data['content_id']; 
      $post=$data['post'];
      $date =$data['data'];
      $title =$data['title'];
      $time =$data['time'];
      $tag_id =$data['tag_id'];
      $role = "admin";
      $username=$_SESSION['username'];
      	
      $query = "insert into post(post,title,content_id,time,date,role,tag_id,username ) 
        values('$post','$title','$content_id','$time',now(),'$role','$tag_id','$username')";
        print_r($query);
      $Db = new db();
      $result=$Db->save($query);
      header("location:profile.php");
      
    }
    create_post($_POST);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col_right" style="border:none;width:83%;margin:auto;height:832px;display:flex;flex-wrap:warp;flex-direction:row;justify-content:space-between">
            <div class="add_product" style="position:relative;width:98%;margin:0;padding:10px;border:2px solid green;height:807 px" >
              <h3>Add new Product</h3>
              <form action="./post_title.php" method="post" style="display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
               
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='text' name="title" id="title"  placeholder="title" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='number' name="content_id" id="content_id"  placeholder="content_id" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='date' name="date" id="date"  placeholder="date" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='time' name="time" id="time"  placeholder="time" >
                <input style="width: 46%;padding:10px;margin:10px;border-radius:10px;background-color:#ddd" type='number' name="tag_id" id="tag_id"  placeholder="tag_id" >
                <textarea id="post" name="post" placeholder="post your mind now" style="width: 100%;height:450px;overflow:auto;" ></textarea>
              
                 <input type='submit' value="Add product" style="position: absolute;bottom: 3%;right: 2%;padding: 10px;border-radius: 8px;font-size: 21px;" >
                
              </form>
            </div>
           
          </div>
  </body>
</html>