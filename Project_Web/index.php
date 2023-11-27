<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Di Động Thông Minh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/themify-icons/themify-icons.css">
    <script src="js/funtion.js"></script>
</head>

<body>
    <div class="wrapper">


        <?php
        session_start();
        include("admin/config/config.php");
        include("pages/header.php");
        ?>
        <?php
        if (isset($_GET["quanly"])) {
            $tmp = $_GET['quanly'];
        } else {
            $tmp = " ";
        }
        if ($tmp == "login") {
            include("login.php");
        } elseif ($tmp == "giohang") {
            include("pages/main/giohang.php");
        } elseif ($tmp == "tintuc") {
            include("pages/main/tintuc.php");
        } elseif ($tmp == "lienhe") {
            include("pages/main/lienhe.php");
        } elseif ($tmp == "timkiem") {
            include("pages/main/timkiem.php");
        } elseif ($tmp == "sanpham") {
            include("pages/main/sanpham.php");
        } elseif ($tmp == "thanhtoan") {
            include("pages/main/thanhtoan.php");
        } elseif ($tmp == "camon") {
            include("pages/main/camon.php");
        } else {
        ?>
            <?php
            include("pages/main.php");
            include("pages/footer.php");
            ?>
        <?php
        } ?>

    </div>

 
</body>

</html>