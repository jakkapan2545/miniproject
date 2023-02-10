<?php 
 $cg_no = $_GET['cg_no'];
include('connection.php');
$sql = "DELETE FROM tbl_category WHERE cg_no=$cg_no";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='index2.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='index2.php'</script>";
}

$conn->close();
?>