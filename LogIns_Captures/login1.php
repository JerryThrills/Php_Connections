<?php
include("results.php");
$tuition=4000000;
$Username=$_POST['name'];
$REGNO=$_POST['test'];
$AcessNo=$_POST['dolphin'];
$Year=$_POST['phpi'];
$Course=$_POST['coding'];
$Semester=$_POST['code'];
$AmountPaid=$_POST['cod'];
$balance=$tuition-$AmountPaid;
// $Exam=$_POST['tests'];
$sql="insert into moodle(Username,Registration_Number,Acess_Number,Year,Course,Semester,Amount_Paid,Balance) values('$Username','$REGNO','$AcessNo','$Year','$Course','$Semester','$AmountPaid','$balance')";
$submit_data=$connect->query($sql);
//echo $name," ", $dolphin, " is " ,$test ," years old"
// $name=$_POST['name'];
// $name=$_POST['name'];
?>