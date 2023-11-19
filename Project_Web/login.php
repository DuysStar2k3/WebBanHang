<?php
if (isset($_POST["login_user"])) {
    $taikhoandn = $_POST['nameuser'];
    $matkhaudn = md5($_POST['passworduser']);
    $sql = "SELECT * FROM tbl_user WHERE email = '$taikhoandn' AND password_user = '$matkhaudn' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $row_data = mysqli_fetch_array($query);
        $_SESSION['login'] = $taikhoandn;
        header("Location: index.php");
    } else {
        echo '<p style="color:red">Tài khoản hoặc mật khẩu không chính xác.</p>';
    }
}

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['login'])) {
    $ten_nguoi_dung = $_SESSION['login'];
    echo "Xin chào, $ten_nguoi_dung!";
} else {
    echo "Bạn chưa đăng nhập.";
}
?>


<?php
    if(isset($_POST['dangki'])){
        $taikhoandki = $_POST['tendki'];
        $emaildki = $_POST['emaildki'];
        $passworddki = md5($_POST['passworddki']);
        // Kiểm tra xem email đã tồn tại chưa
        $check_email_query = mysqli_query($mysqli, "SELECT * FROM tbl_user WHERE email = '$emaildki'");
        $count_email = mysqli_num_rows($check_email_query);

        if($count_email == 0) {
            // Email chưa tồn tại, thêm dữ liệu vào cơ sở dữ liệu
            $sql_dangki = mysqli_query($mysqli, "INSERT INTO tbl_user(name_user, email, password_user) 
                VALUES('$taikhoandki', '$emaildki', '$passworddki')");
            
            if($sql_dangki){
                echo '<p style="color:green">Đăng kí thành công. Vui lòng quay lại để đăng nhập.</p>';
            } else {
                // Kiểm tra lỗi khi thực hiện truy vấn
                echo '<p style="color:red">Đăng kí thất bại. Có lỗi khi thêm dữ liệu vào cơ sở dữ liệu.</p>';
            }
        } else {
            // Email đã tồn tại
            echo '<p style="color:red">Email đã tồn tại. Vui lòng chọn email khác.</p>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="././css/login_user.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="box-login" id="login">
                <div class="top-header">
                    <h3>Hello, Again!</h3>
                    <small>We are happy to have you back.</small>
                </div>
                <form action="" autocomplete="off" method="POST">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" name="nameuser" class="input-box" id="logEmail" required>
                            <label for="logEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="passworduser" class="input-box" id="logPassword" required>
                            <label for="logPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myLogPassword()">
                                    <i class="fa-regular fa-eye" id="eye"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck" class="check">
                            <label for="formCheck">Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" name="login_user" class="input-submit" value="Sign In" required>
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </form>
            </div>

            <!---------------------------- register --------------------------------------->

            <div class="box-register" id="register">
                <div class="top-header">
                    <h3>Sign Up, Now!</h3>
                    <small>We are happy to have you with us.</small>
                </div>
                <form action="" method="POST">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text"name="emaildki"  class="input-box" id="regUsername" required>
                            <label for="regUsername">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="tendki" class="input-box" id="regEmail" required>
                            <label for="regEmail">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="passworddki" class="input-box" id="regPassword" required>
                            <label for="regPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myRegPassword()">
                                    <i class="fa-regular fa-eye" id="eye-2"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                </div>
                            </div>
                        </div>

                        <div class="remember">
                            <input type="checkbox" id="formCheck2" class="check">
                            <label for="formCheck2">Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" name="dangki" class="input-submit" value="Sign Up" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="switch">
                <a href="#" class="login active" onclick="login()">Login</a>
                <a href="#" class="register" onclick="register()">Register</a>
                <div class="btn-active" id="btn"></div>
            </div>

        </div>

    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function login() {
            x.style.left = "27px";
            y.style.right = "-350px";
            z.style.left = "0px";
        }

        function register() {
            x.style.left = "-350px";
            y.style.right = "25px";
            z.style.left = "150px";
        }


        // View Password codes



        function myLogPassword() {

            var a = document.getElementById("logPassword");
            var b = document.getElementById("eye");
            var c = document.getElementById("eye-slash");

            if (a.type === "password") {
                a.type = "text";
                b.style.opacity = "0";
                c.style.opacity = "1";
            } else {
                a.type = "password";
                b.style.opacity = "1";
                c.style.opacity = "0";
            }

        }

        function myRegPassword() {

            var d = document.getElementById("regPassword");
            var b = document.getElementById("eye-2");
            var c = document.getElementById("eye-slash-2");

            if (d.type === "password") {
                d.type = "text";
                b.style.opacity = "0";
                c.style.opacity = "1";
            } else {
                d.type = "password";
                b.style.opacity = "1";
                c.style.opacity = "0";
            }

        }
    </script>
</body>

</html>