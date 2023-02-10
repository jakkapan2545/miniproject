<?php 
 $sl_no = $_GET['sl_no'];
include('connection.php');
$sql = "DELETE FROM tbl_sale WHERE sl_no = $sl_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index3.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index3.php'</script>";
}

$conn->close();
?>