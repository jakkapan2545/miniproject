<?php 
 $pt_no = $_GET['pt_no'];
include('connection.php');
$sql = "DELETE FROM tbl_product WHERE pt_no=$pt_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index.php'</script>";
}

$conn->close();
?>