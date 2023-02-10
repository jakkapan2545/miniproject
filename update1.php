<?php 
    session_start();
    include('connection.php');
    $id = $_GET['pt_no'];
    $sql = "select * from tbl_product where pt_no='$id'";
    $result = $conn->query($sql);

    $row;
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $id;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">เพิ่มข้อมูล</h1>
        <hr>
        <form action="upd_save1.php?pt_no=<?=$_GET["pt_no"];?>" enctype="multipart/form-data" method="POST">
            <label for="protypename" class="form-label">ชื่อสินค้า</label>
            <input class="form-control" type="text" name="protypename" value="<?php echo $row['protypename']; ?>">
            <label for="proprice" class="form-label">ราคาสินค้า</label>
            <input class="form-control" type="text"  name="proprice" value="<?php echo $row['proprice']; ?>">
            <label for="proaddress" class="form-label">สถานที่ผลิตสินค้า</label>
            <input class="form-control" type="text" name="proaddress" value="<?php echo $row['proaddress']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index1.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>