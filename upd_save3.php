<?php
$sl_no = $_GET["sl_no"];
$emslname =$_POST["emslname"];  
$dayssale =$_POST["dayssale"];  
$sumsale =$_POST["sumsale"];  

include('connection.php');
$sql = "UPDATE tbl_sale  SET emslname='$emslname', dayssale='$dayssale', sumsale='$sumsale' WHERE sl_no=$sl_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index3.php'</script>";
}
$conn->close();
?>