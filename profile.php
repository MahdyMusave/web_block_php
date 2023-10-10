<?php

  session_start();
  include_once("./class/db.php");
    // include_once("./class/login.php");
    
      //----->get seetion
      //print_r($_SESSION['userid_by_email']);
      $username = $_SESSION['userid_by_email'];      
      //----->if set seetion
  if (isset($_SESSION['userid_by_email']) && !is_numeric($_SESSION['userid_by_email'])) {
  // print_r($_SESSION['userid_by_email']);

    $_SESSION['username'] = $username;

    function check_is_admin($username){
      $query = "select * from user where username='$username' limit 1";
    
      $Db = new db();
      $check=$Db->read($query);
    
      if(!$check){
        header("location:login.php");
      }
    }


    function get_post($username){
      $query = "SELECT * FROM post 
        INNER JOIN contains ON post.content_id=contains.id
        INNER JOIN tags ON post.tag_id=tags.id
        WHERE username='musave@gmail.com' ";
    
      $Db = new db();
      $check=$Db->read($query);
   
      if($check){
        return $check;
      }else{
      return false;
      }
    
    }

  $get_post=get_post($username);

  }else{
   
      header("location:login.php");
  }
   
  check_is_admin($username);


//     }else{
//       header("location:profile.php");
//     }

// }else{
//   header("location:login.php");
// }

// return print_r($_SESSION['$name']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <div class="navbar" style="display:flex;flex-wrap:wrap;flex-direction:row;background-color:black;justify-content:space-between" >
    <div class="link" style="width:20%;border:2px solid red;padding:0 10px;display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
      <a href='home' style="text-decoration:none;font-size:19px;color:white;padding:6px 10px" >home</a>
      <a href='about' style="text-decoration:none;font-size:19px;color:white;padding:6px 10px" >about</a>
      <a href='news' style="text-decoration:none;font-size:19px;color:white;padding:6px 10px" >news</a>
      <a href='content' style="text-decoration:none;font-size:19px;color:white;padding:6px 10px" >content</a>
    </div>
    <div class="serach" style="width:30%;border:2px solid red" >
      <input type="text" placeholder="search" name="search" id="search" >
    </div>
     <div class="media" style="width:30%;border:2px solid red" >
     
    </div>
 
  </div>
    <div class="container">
      <div class="content" style="width:85%;margin:auto">
        <div class="inner-container" style="display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between">
          <div class="col_left" style="border:none;width:15%;height:830px">
             <div class="row_box-left" style="display:flex;flex-wrap:wrap;flex-direction:column;justify-content:center;width:100%;margin:auto" >
                <div class="col" style="border:1px solid red;width:95%;height:210px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >تازه تزین مطالب</h3>
                  <hr>
                  <?php foreach($get_post as $post){
                    echo '
                    <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px;color:#399;" >'.$post['title'].' </h5>
                    ';
                  }
                  ?>
                   <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px;color:#399;" > <a href="post_title.php" style="text-align:right;font-size:19px;font-weight:bolder;text-decoration:none" >پست مطلب جدید</a> </h5>
               
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:210px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >پیوند های روزانه</h3>
                  <hr>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > لینک روزانه اول</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > لینک روزانه دوم</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > لینک روزانه سوم</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > لینک روزانه چهارم</h5>
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:210px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >پیوند ها</h3>
                  <hr>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > پیوندها اول</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > پیوندها دوم</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > پیوندها سوم</h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > پیوندها چهارم</h5>
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:110px;margin-top:6px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >ابزارک ها </h3>
                  <hr>
                 
                  <h5 style="text-align: right;margin-right:10px;padding:5px 10px;margin-top:0;margin-bottom:3px" > Rss </h5>
                 
                </div>
             </div>
          </div>
          <div class="col-center" style="width:65.5%;">
            <div class="slider-img" style="border:2px solid red;width:100%;height:450px;margin-top:20px;overflow:hidden;border-radius:10px" >
              <img src="./public/imgage/337536779_712647330654929_7497108357965575558_n.jpg" alt="this slide img" style='width:100%;height:180%'>
            </div>
             <?php foreach($get_post as $post){
             echo ' 
              <div class="post_block" style="border:1px solid red;margin-top:40px;padding:10px;position:relative" >
              <div class="row">
               
                  
                  
                    <div class="col">
                  <div class="about-title" style="text-align:right;margin-right:10px" >
                    <h3>'.$post['title'].'</h3>
                    <hr>
                  </div>
                  <div class="info_post" style="display:flex;flex-wrap:wrap;justify-content:flex-end;" >
                    <div class="inner" style="width: 35%;margin-right:10px;display:flex;flex-wrap:wrap-reverse ;flex-direction:row;justify-content:space-between"  >
                      <p class="time" >'.$post['time'].'</p>
                      <p class="date" >'.$post['date'].'</p>
                      <p class="admin" >'.$post['role'].'</p>
                    </div>
                  </div>
                  <div class="tittle" style="text-align:right" >
                    <p >
                      '.$post['post'].'
                    </p>
                  </div>
                  <div class="tag" style="text-align: right;">
                    <span  >موضوع <a href="#">'.$post['name'].'</a> <a href="#">موضوع دوم</a> <a href="#">موضوع سوم</a> برجسپ ها <a href="#">برجسپ اول </a><a href="#">برجسپ دوم </a><a href="#">برجسپ سوم </a></span>
                    <hr>
                  </div>
                  <div class="read_more" style="display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
                    <button>ادامه مطلب</button>
                     <span>2 نظر</span>
                  </div>
                </div>
                 
              </div>
            </div> ';
                }
                
                ?>
          </div>
            <div class="col-right" style="width:15%;padding-top:10px" >
              <div class="row_box-right" style="display:flex;flex-wrap:wrap;flex-direction:column;justify-content:center;width:100%;margin:auto" >
                <div class="col" style="border:1px solid red;width:95%;height:200px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >درباره من</h3>
                  <hr>
                   <p style="text-align: right;margin-right:10px;padding:0 10px" >
                      من خیل دوست دارم شما ها را ببینممن خیل دوست دارم شما ها را ببینم
                    </p>
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:200px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >موضوعات</h3>
                  <hr>
                  <?php foreach($get_post as $post){
                    echo '
                     <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" >'.$post['name'].'</h5>
                    ';
                  } 
                  ?>
                  
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:200px;margin-top:10px;border-radius:10px" >
                <h3 style="text-align: right;margin-right:10px;" >برچسب ها</h3>
                  <hr>
                  <?php foreach($get_post as $post){
                    echo '
                    <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > '.$post['tag_name'].'</h5>
                    ';
                  }?>
                </div>
                <div class="col" style="border:1px solid red;width:95%;height:200px;margin-top:10px;border-radius:10px" >
                  <h3 style="text-align: right;margin-right:10px;" >آرشیو</h3>
                  <hr>
  
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > آذر ۱۳۹۵ . </h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > آذر ۱۳۹۵ . </h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > آذر ۱۳۹۵ . </h5>
                  <h5 style="text-align: right;margin-right:10px;padding:0 10px;margin-top:0;margin-bottom:3px" > آذر ۱۳۹۵ . </h5>
  
                </div>

              </div>
            
            </div>
        </div>
      </div>
    </div>
    <div style="height:1200px;width:90%;margin:15px auto" >
      <div class="row" style="width:98%;display:flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between" >
     
        <?php
       
           foreach($products as $pro){
         
            echo "<div class='col_product' style='width:22%;border:2px solid red;height:600px;margin-top:10px;' >
            <div class='name_product'><h2 style='margin-left:10px'>".$pro['productName']."</h2>"."</div>
               <div class='admin_img' style='width:370px;text-align:center;over-flow:hidden; height:300px;border-radius:10px;' >
                <img src='./public/imgage/337536779_712647330654929_7497108357965575558_n.jpg' alt='Admin_user' style='width:98%;height:98%;' />
              </div>
              <div class='name_product'><h2 style='margin-left:10px'>"." ".$pro['mark']." ".$pro['model']." ".$pro['tags']."</h2>"."</div>
              <div class='name_product'><h2 style='margin-left:10px'>".$pro['price']."</h2>"."</div>
              <div class='name_product'><h2 style='margin-left:10px'>".$pro['description']."</h2>"."</div>           
              ";
          
         
          echo "</div>";
          }
        ?> 
      </div>
    </div>
</body>
</html>