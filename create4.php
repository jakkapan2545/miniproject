<?php 
$ey_name =$_POST["ey_name"]; 
$ey_lastname= $_POST["ey_lastname"]; 
$ey_position= $_POST["ey_position"]; 
$ey_salary= $_POST["ey_salary"]; 

include('connection.php'); 

//สร้างคำสั่ง sql 
$sql = "INSERT INTO tbl_employee (ey_name,ey_lastname,ey_position,ey_salary) VALUES ('$ey_name','$ey_lastname','$ey_position','$ey_salary')"; 
if ($conn->query($sql)) { 
 echo "New record created successfully"; 
 header('location:index4.php'); //กลับไปยังหน้าตาราง 
} else { 
 echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 