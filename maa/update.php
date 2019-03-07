<?php
require("connection.php");
$mid=$_POST['adhar'];

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

$qry="update pregnant_table set mother_name='$a3',father_name='$a4',area_name='$a5',district_name='$a6',
state_name='$a7' ,registration_date='$a8',contact_number='$a9',whose_number='$a10',religion='$a11',category='$a12',family_income='$a13',date_of_birth='$a14',
last_period_date='$a15',current_pregnancy_week='$a16',weight_in_kg='$a17',expected_delivery_date='$a18',blood_group='$a19',present_diseases='$a20',
total_no_of_pregnancy='$a21',previous_pregnancy_complexity='$a22',previous_pregnancy_delivery_result='$a23',before_previous_pregnancy_complexity='$a24',
before_previous_pregnancy_delivery_result='$a25',preferred_hospital_code='$a26',   hospital_name='$a27',hospital_address='$a28',
VDRL_RPR_test='$a29',HIV_test='$a30',sickling_test='$a31'  where aadhar_number='$mid'";
mysqli_query($conn,$qry);
header("location:view_mom.php");
?>