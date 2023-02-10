<?php
$cg_no = $_GET["cg_no"];
$catename =$_POST["catename"];  
$tharea =$_POST["tharea"];  

include('connection.php');
$sql = "UPDATE tbl_category  SET catename='$catename', tharea='$tharea' WHERE cg_no=$cg_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index2.php'</script>";
}
$conn->close();
?>