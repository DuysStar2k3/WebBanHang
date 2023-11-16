<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Di Động Thông Minh</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/funtion.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php
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
            include("pages/login.php");
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