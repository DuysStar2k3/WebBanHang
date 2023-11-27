<?php
include('../../config/config.php');
$tenloaisp = isset($_POST["tendanhmuc"]) ? $_POST["tendanhmuc"] : "";
$thutu = isset($_POST["thutu"]) ? $_POST["thutu"] : "";
//THEM
if (isset($_POST["themdanhmuc"])) {
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('" . $tenloaisp . "','" . $thutu . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=danhmucsp&query=them');
} elseif (isset($_POST["suadanhmuc"])) {
    //SUA
    $sql_update = "UPDATE tbl_danhmuc SET  tendanhmuc='" . $tenloaisp . "',thutu='" . $thutu . "' WHERE id_danhmuc= '$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=danhmucsp&query=them');
} else {
    // Xóa
    $id = $_GET['iddanhmuc'];

    // Check if there are associated products
    $sql_check_products = "SELECT COUNT(*) AS product_count FROM tbl_sanpham WHERE id_danhmuc='$id'";
    $result = mysqli_query($mysqli, $sql_check_products);
    $row = mysqli_fetch_assoc($result);
    $product_count = $row['product_count'];
    if ($product_count > 0) {
        // There are associated products, display an alert
        header('Location:../../index.php?action=danhmucsp&query=them');
    } else {
        // No associated products, proceed with deletion
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='$id'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=danhmucsp&query=them');
    }
}
