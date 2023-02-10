<?php
$ey_no = $_GET["ey_no"];
$ey_name =$_POST["ey_name"];  
$ey_lastname =$_POST["ey_lastname"];  
$ey_position =$_POST["ey_position"];  
$ey_salary =$_POST["ey_salary"]; 

include('connection.php');
$sql = "UPDATE tbl_employee  SET ey_name='$ey_name', ey_lastname='$ey_lastname', ey_position='$ey_position', ey_salary='$ey_salary' WHERE ey_no=$ey_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index4.php'</script>";
}
$conn->close();
?>