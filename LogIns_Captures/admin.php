<?php

include('results.php');
$username=$_POST['logo'];
$password=$_POST['pass'];
$role=$_POST['rol'];

$sql="insert into admin (Username,Password,Role) values('$username','$password','$role')";

$submit_data=$connect->query($sql)


?>