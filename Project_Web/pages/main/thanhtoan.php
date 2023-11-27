<?php
// Thay vì sử dụng $id_khachhang, bạn có thể đặt tên biến phản ánh mục đích của nó:
$id_nguoidung =$_SESSION['id_khachhang'];
$code_order = rand(1, 9999);
$insert_gio = "INSERT INTO tbl_giohang (id_user, code_gio, trangthai_don) 
                   VALUES ('" . $id_nguoidung . "', '" . $code_order . "', 1)";
$gio_query = mysqli_query($mysqli, $insert_gio);

if ($gio_query) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_sanpham_gio = "INSERT INTO tbl_sanpham_gio (code_gio, id_sp, soluong_sanpham) 
                                   VALUES ('" . $code_order . "', '" . $id_sanpham . "', '" . $soluong . "')";
        mysqli_query($mysqli, $insert_sanpham_gio);
    }
}
unset($_SESSION['cart']);
header('Location:index.php?quanly=camon');