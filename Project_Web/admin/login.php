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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login_user.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ludiflex | Login</title>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login Admin</header>
            </div>
            <form action="" autocomplete="off" method="POST">
                <div class="input-field">
                    <input type="text" class="input" name="username"  >
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password" >
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" name="dangnhap" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>