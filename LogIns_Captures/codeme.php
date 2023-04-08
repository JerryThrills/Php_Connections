<?php
include('results.php');

$sql='SELECT Username, Registration_Number,Acess_Number,Year,Course,Semester,Amount_Paid FROM moodle';
// $balance=$intial-$balance;
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0){  
 while($row = mysqli_fetch_assoc($result)){  
    echo "Username :{$row['Username']}  <br> ". 
          "REGNO :{$row['Registration_Number']}  <br> ".
          "AcessNO :{$row['Acess_Number']}  <br> ".
          "Year :{$row['Year']}  <br> ".
          "Course :{$row['Course']}  <br> ".
          "Semester :{$row['Semester']}  <br> ".
          "AmountPaid :{$row['Amount_Paid']}  <br> ". 
          "--------------------------------<br>";  
 }   
}else{  
echo "0 results";  
}  
mysqli_close($connect);  
?>