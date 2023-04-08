<?php
session_start();
include('results.php');
if(isset($_POST['submit'])){
$username=$_POST['logo'];
$password=$_POST['pass'];
$role=$_POST['rol'];

$sql="select * from admin where Username='$username' and Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION['role']='admin';
    header("location:codeme.php");
    
}}
?>

<form action="script.php" method="POST">
        <Label>Username</Label>
        <input type="text" name="logo" placeholder="username"><br>
        <Label>Password</Label>
        <input type="password" name="pass" placeholder="enter password"><br>
        <Label>Role</Label>
        <input type="text" name="rol" placeholder="role"><br>
        <input type="submit" value="login" name="submit">
    </form>