<?php 
$catename= $_POST["catename"]; 
$tharea= $_POST["tharea"]; 

include('connection.php'); 

//สร้างคำสั่ง sql 
$sql = "INSERT INTO tbl_category (catename,tharea) VALUES ('$catename','$tharea')"; 
if ($conn->query($sql)) { 
 echo "New record created successfully"; 
 header('location:index2.php'); //กลับไปยังหน้าตาราง 
} else { 
 echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 