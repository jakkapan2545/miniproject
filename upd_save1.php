<?php
$pt_no = $_GET["pt_no"];
$protypename =$_POST["protypename"];  
$proprice =$_POST["proprice"];  
$proaddress =$_POST["proaddress"];

include('connection.php');
$sql = "UPDATE tbl_product  SET protypename='$protypename', proprice='$proprice', proaddress='$proaddress' WHERE pt_no=$pt_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
$conn->close();
?>