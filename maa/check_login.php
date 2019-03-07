<?php
  
   include('connection.php');
   session_start();

   if($_SERVER['REQUEST_METHOD'] == "POST"){
  $uname = $_POST['username'];
  $password = $_POST['pass'];

$qry = "select * from login where uemail='$uname' and upass='$password'";
$res = mysqli_query($conn,$qry);
$num = mysqli_num_rows($res);
echo $num;
if($num > 0 ){
    $row = mysqli_fetch_assoc($res);
   $_SESSION['admin']= $row['uname'];
   //$_SESSION['user'] = $row['uname'];
   $_SESSION['is_login'] = 1;
  header('location:index.php');
}
else{ 
  
    
  
    header('location:login.php?msg=1');
    
    if(isset($_GET['msg'])==true){
      echo "INVALID CREDENTIALS";
   }  
     
   
}
}
?>