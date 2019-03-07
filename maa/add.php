<?php 
include('connection.php');
$a1=$_POST['adhar'];

$a3=$_POST['mom_name'];
$a4=$_POST['dad_name'];
$a5=$_POST['area'];
$a6=$_POST['district'];
$a7=$_POST['state'];
$a8=$_POST['re_date'];
$a9=$_POST['contact'];
$a10=$_POST['owner'];
$a11=$_POST['rel'];
$a12=$_POST['cat'];
$a13=$_POST['income'];
$a14=$_POST['dob'];
$a15=$_POST['lmp'];
$a16=$_POST['cpw'];
$a17=$_POST['weight'];
$a18=$_POST['edd'];
$a19=$_POST['bg'];
$a20=$_POST['pd'];
$a21=$_POST['total_preg'];
$a22=$_POST['ppc'];
$a23=$_POST['ppdr'];
$a24=$_POST['bppc'];
$a25=$_POST['bppdr'];
$a26=$_POST['hos_code'];
$a27=$_POST['hos_name'];
$a28=$_POST['hos_add'];
$a29=$_POST['VDRL_RPR_test'];
$a30=$_POST['hiv'];
$a31=$_POST['sick'];
$sql= "insert INTO pregnant_table(aadhar_number,mother_name,father_name,area_name,district_name,state_name,registration_date,contact_number,whose_number,religion,category,family_income,date_of_birth,last_period_date,current_pregnancy_week,weight_in_kg,expected_delivery_date,	blood_group,present_diseases,total_no_of_pregnancy,previous_pregnancy_complexity,previous_pregnancy_delivery_result,	before_previous_pregnancy_complexity,before_previous_pregnancy_delivery_result,preferred_hospital_code,hospital_name,hospital_address,VDRL_RPR_test,HIV_test,sickling_test,age) VALUES 
('$a1','$a3','$a4','$a5',
'$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23',
'$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31')";

mysqli_query($conn,$qry);
header("location:index.php");

?>