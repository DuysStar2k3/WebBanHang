<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../admin/css/style.css">
    <link rel="stylesheet" href="css/login.php">
    <link rel="stylesheet" href="../css/themify-icons/themify-icons.css">
</head>

<body>
    <div class="wrapper">
        <div>
            <?php
            include("config/config.php");
            ?>
        </div>
        <div>
            <?php
            include("modules/header.php");
            ?>
        </div>

        <div class="flex-container">
            <div class="bg-main-menu">
                <?php
                include("modules/menu.php");
                ?>
            </div>
            <div class="flex-item-main">
                <?php
                include("modules/main.php");
                ?>
            </div>
        </div>

        <div>
            <?php
            include("modules/footer.php");
            ?>
        </div>

    </div>
</body>

</html>