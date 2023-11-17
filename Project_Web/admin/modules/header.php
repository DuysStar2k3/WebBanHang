<?php
if (isset($_GET['action']) && $_GET['action'] == 'dangxuat') {
    unset($_SESSION['dangnhap']); // Hủy bỏ phiên đăng nhập
    header("Location: login.php"); // Chuyển hướng đến trang đăng nhập 
}
?>

<div class="header-admin">
    <div class="header-admin-text">
        <a href="../././index.php">DI ĐỘNG THÔNG MINH</a>
    </div>

    <div class="info-logout pd-5">
        <div>Xin chào, Admin!</div>
        <a href="index.php?action=dangxuat">Đăng xuất:<?php if (isset($_SESSION['dangnhap'])) {
            echo $_SESSION['dangnhap'];
        } ?>
        </a>
    </div>
</div>