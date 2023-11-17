<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Di Động Thông Minh</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/lienhe.css">
    <link rel="stylesheet" href="css/tintuc.css">
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
        } elseif ($tmp == "sanpham") {
            include("pages/main/sanpham.php");
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