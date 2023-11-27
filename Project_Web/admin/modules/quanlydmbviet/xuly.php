<?php
include('../../config/config.php');
$tenloaibv = $_POST["tendanhmucbv"];
$thutubv = $_POST["thutubv"];
//THEM
if (isset($_POST["themdanhmucbv"])) {
    $sql_them = "INSERT INTO tbl_danhmucbv(tendanhmuc,thutu) VALUE('" . $tenloaibv . "','" . $thutubv . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlydmbviet&query=them');
} elseif (isset($_POST["suadanhmucbv"])) {
    //SUA
    $sql_update = "UPDATE tbl_danhmucbv SET  tendanhmuc='" . $tenloaibv . "',thutu='" . $thutubv . "' WHERE id_danhmuc= '$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlydmbviet&query=them');
} else {
    // Xóa
    $id = $_GET['iddanhmuc'];

    // Check if there are articles associated with the category
    $sql_check_articles = "SELECT COUNT(*) as count_articles FROM tbl_baiviet WHERE id_danhmuc = '$id'";
    $query_check_articles = mysqli_query($mysqli, $sql_check_articles);
    $result_check_articles = mysqli_fetch_assoc($query_check_articles);
    $count_articles = $result_check_articles['count_articles'];

    if ($count_articles > 0) {
        header('Location:../../index.php?action=quanlydmbviet&query=them&error=category_has_articles');
    } else {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmucbv WHERE id_danhmuc='" . $id . "'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlydmbviet&query=them');
        
        header('Location:../../index.php?action=quanlydmbviet&query=them');
    }
}
