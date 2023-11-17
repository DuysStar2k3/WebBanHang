<?php
    if(isset($_GET['logout'])&&$_GET['logout']==1){
        unset($_SESSION['login']);
    }
?>
<div class="header">
    <div class="name">
        <a href="index.php">DI ĐỘNG THÔNG MINH</a>
    </div>
    <div class="search-box">
        <input type="text" class="search-input" placeholder="Tìm kiếm sản phẩm..." />
        <button class="search-button">
            <img src="./IMG/icon/search-icon.png" alt="Search Icon" />
        </button>
    </div>
    <ul class="menu">
        <a href="index.php">
            <li class="home">
                <img src="./IMG/icon/Home.png" alt="" />
                <h3>Trang chủ</h3>
            </li>
        </a>
        <a href="index.php?quanly=tintuc">
            <li class="home">
                <img src="./IMG/icon/tin tức.png" alt="" />
                <h3>Tin tức</h3>
            </li>
        </a>
        <a href="index.php?quanly=lienhe">
            <li class="home">
                <img src="./IMG/icon/Liên Hệ.png" alt="" />
                <h3>Liên hệ</h3>
            </li>
        </a>
        <a href="index.php?quanly=giohang">
            <li class="home">
                <img src="./IMG/icon/Giỏ hàng.png" alt="" />
                <h3>Giỏ hàng</h3>
            </li>
        </a>
        <?php
        if (isset($_SESSION['login'])) {
        ?>
            <a href="index.php?logout=1">
                <li class="home">
                    <img src="./IMG/icon/logout_icon.png" alt="" />
                    <h3>Đăng xuất</h3>
                </li>
            </a>
        <?php
        } else {
        ?>
            <a href="index.php?quanly=login">
                <li class="home">
                    <img src="./IMG/icon/Login-icon.png" alt="" />
                    <h3>Đăng nhập</h3>
                </li>
            </a>
        <?php
        }
        ?>

    </ul>
</div>