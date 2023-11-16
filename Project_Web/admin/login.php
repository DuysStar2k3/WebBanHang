<?php
session_start();
include('config/config.php');
if (isset($_POST["dangnhap"])) {
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT *FROM tbl_admin WHERE user_name ='" . $taikhoan . "'AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác")</script>';
        header("Location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/css/login.css">
</head>

<body>
    <form action="" autocomplete="off" method="POST">
        <div class="main-log">
            <div class="boder">
                <h2>Đăng nhập</h2>
                <div class="">
                    <label for="Tentaikhoan">Tên tài khoản:</label> <br>
                    <input class="input-log" type="text" name="username" id="Tentaikhoan"> <br>
                </div>
                <div>

                    <label for="Matkhau">Mật khẩu:</label> <br>
                    <input class="input-log" type="password" name="password" id="Matkhau"> <br>
                </div>
                <div>
                    <button type="password" class="button-log" name="dangnhap">
                        Đăng nhập
                    </button> <br>
                </div>
            </div>
        </div>
    </form>
</body>

</html>