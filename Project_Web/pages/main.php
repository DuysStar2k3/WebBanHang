<div class="container">
    <div class="center-container">
        <div class="list_product">
            <?php
            include("pages/sidebar/sidebar_left.php");
            ?>
        </div>
        <div class="banner_slider">
            <?php
            include("pages/sidebar/sidebar_right.php");
            ?>
        </div>
    </div>
    <div class="product-container">

        <?php
        if (isset($_GET["quanly"])) {
            $tmp = $_GET['quanly'];
        } else {
            $tmp = " ";
        }
        if ($tmp == "danhmuc") {
            include("pages/main/danhmuc.php");
        } elseif ($tmp == "giohang") {
            include("pages/main/giohang.php");
        } elseif ($tmp == "tintuc") {
            include("pages/main/tintuc.php");
        } elseif ($tmp == "lienhe") {
            include("pages/main/lienhe.php");
        } elseif ($tmp == "register") {
            include("pages/login/register.php");
        } elseif ($tmp == "login") {
            include("pages/login/login.php");
        } elseif ($tmp == "sanpham") {
            include("pages/main/sanpham.php");
        } else {
            include("pages/main/index_menu.php");
        }
        ?>

    </div>
</div>