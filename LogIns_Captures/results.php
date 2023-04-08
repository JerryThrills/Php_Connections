<?php
//Database coonection
$connect= new mysqli("localhost","root","","moodle_db");
if ($connect->error){
    print("Error during connection");  }
else{
    print("Login Succefully").'<br/>';
}

?>