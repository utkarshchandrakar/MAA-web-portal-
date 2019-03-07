<?php 
require("connection.php");
$id=$_GET['mid'];
$qry="delete  from pregnant_table where aadhar_number='$id'";
mysqli_query($conn,$qry);
header("location:view_mom.php");
?>