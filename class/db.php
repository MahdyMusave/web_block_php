<?php 
class db{
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $db = "web_pro";
 
 public function connection(){

    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
    return $conn;

  }

   public function read($query){

    $conn = $this -> connection();
    /*$read = "select * from user";*/

   $check = mysqli_query($conn, /*$read,*/$query);
    if(!$check){

      return false;
    
    }else{
      //  $data = false;
      // $data[] = $check;
      // return $data;

       while($row=mysqli_fetch_assoc($check)){
        $data[] = $row;
      }

    }

    return $data;

  }
  function save($query){

    $conn = $this -> connection();
    /*$read = "insert into user(name,email,password)value('mina','Alipour','Alipour@gmail.com')";*/
    $check = mysqli_query($conn,/*$save,*/ $query);
    
    if(!$check){

      return false;
    
    }else{

     return false;
      
    }   
  }
 
}
/**/ 
  // $Db = new db();
  // $data=$Db->read("select * from user");
  // $data=$Db->save();
  // $data=$Db->read();
  // print_r($data);
/**/
?>