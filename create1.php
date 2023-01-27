<?php 
$protypename=$_POST["protypename"]; 
$proprice= $_POST["proprice"]; 
$proaddress= $_POST["proaddress"]; 

include('connection.php'); 

//สร้างคำสั่ง sql 
$sql = "INSERT INTO tbl_product (protypename,proprice,proaddress) VALUES ('$protypename','$proprice','$proaddress')"; 
if ($conn->query($sql)) { 
 echo "New record created successfully"; 
 header('location:index1.php'); //กลับไปยังหน้าตาราง 
} else { 
 echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 