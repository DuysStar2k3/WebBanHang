<?php
if (isset($_POST["login_user"])) {
    $taikhoan = $_POST['nameuser'];
    $matkhau = md5($_POST['passworduser']);
    $sql = "SELECT *FROM tbl_user WHERE email ='" . $taikhoan . "'AND password_user='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['login'] = $taikhoan;
        echo '<p style="color:red">Đăng nhập thành công. Vui lòng quay lại giỏ hàng để đặt hàng.</p>'; 
        exit();
    } else {
        echo '<p style="color:red">Tài khoản,mật khẩu không chính xác.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././css/login_user.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ludiflex | Login</title>
    <style>

    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Login</span>
                <header>DI ĐỘNG THÔNG MINH</header>
            </div>
            <form action="" autocomplete="off" method="POST">
                <div class="input-field">
                    <input type="text" name="nameuser" class="input" placeholder="Username" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="passworduser" class="input" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" name="login_user" class="submit" value="Login">
                </div>
            </form>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Đăng kí</a></label>
                </div>
            </div>

        </div>
    </div>
</body>

</html>