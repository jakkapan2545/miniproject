<?php 
$emslname =$_POST["emslname"]; 
$dayssale= $_POST["dayssale"]; 
$sumsale = $_POST["sumsale"]; 

include('connection.php'); 

//สร้างคำสั่ง sql 
$sql = "INSERT INTO tbl_sale (emslname,dayssale,sumsale) VALUES ('$emslname','$dayssale','$sumsale')"; 
if ($conn->query($sql)) { 
 echo "New record created successfully"; 
 header('location:index3.php'); //กลับไปยังหน้าตาราง 
} else { 
 echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 