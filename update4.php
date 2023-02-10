<?php 
    session_start();
    include('connection.php');
    $id = $_GET['ey_no'];
    $sql = "select * from tbl_employee where ey_no='$id'";
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
        <form action="upd_save4.php?ey_no=<?=$_GET["sl_no"];?>" enctype="multipart/form-data" method="POST">
            <label for="ey_name" class="form-label">ชื่อ</label>
            <input class="form-control" type="text" name="ey_name" value="<?php echo $row['ey_name']; ?>">
            <label for="ey_lastname" class="form-label">สกุล</label>
            <input class="form-control" type="text"  name="ey_lastname" value="<?php echo $row['ey_lastname']; ?>">
            <label for="ey_position" class="form-label">ตำแหน่ง</label>
            <input class="form-control" type="text"  name="ey_position" value="<?php echo $row['ey_position']; ?>">
            <label for="ey_salary" class="form-label">เงินเดือน</label>
            <input class="form-control" type="text"  name="ey_salary" value="<?php echo $row['ey_salary']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="index4.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>