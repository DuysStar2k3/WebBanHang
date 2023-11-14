<?php
include('../../config/config.php');
$tensp = $_POST["tensp"];
$masp = $_POST["masp"];
$giasp = $_POST["giasp"];
$soluong = $_POST["soluong"];
//Xứ lý hình ảnh
$hinhanh = $_FILES["hinhanh"]["name"];
$hinhanh_tmp = $_FILES["hinhanh"]["tmp_name"];
$hinhanh = time() . '_' . $hinhanh;
$tomtat = $_POST["tomtat"];
$noidung = $_POST["noidung"];
$tinhtrang = $_POST["tinhtrang"];
$danhmuc = $_POST["danhmuc"];

//THEM
if (isset($_POST["themsp"])) {
    $sql_them = "INSERT INTO tbl_sanpham(tensp,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
    VALUE('" . $tensp . "','" . $masp . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "','" . $tomtat . "','" . $noidung . "','" . $tinhtrang . "','" . $danhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
    header('Location:../../index.php?action=quanlysp&id=002&query=them');
} elseif (isset($_POST["suasanpham"])) {
    //SUA
    if ($hinhanh != ' ') {
        move_uploaded_file($hinhanh_tmp, "uploads/" . $hinhanh);
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sp ='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
        }
        $sql_update = "UPDATE tbl_sanpham SET  tensp='" . $tensp . "',masp='" . $masp . "',giasp='" . $giasp . "'
        ,hinhanh='" . $hinhanh . "',soluong='" . $soluong . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',tinhtrang='" . $tinhtrang . "' WHERE id_sp= '$_GET[idsanpham]'";
    } else {
        $sql_update = "UPDATE tbl_sanpham SET  tensp='" . $tensp . "',masp='" . $masp . "',giasp='" . $giasp . "'
            ,soluong='" . $soluong . "',tomtat='" . $tomtat . "',noidung='" . $noidung . "',tinhtrang='" . $tinhtrang . "' WHERE id_sp= '$_GET[idsanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysp&id=002&query=them');
} else {
    //Xóa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sp ='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sp='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysp&id=002&query=them');
}
