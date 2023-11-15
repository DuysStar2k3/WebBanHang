<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' 
ORDER BY id_sp asc";
$query_pro = mysqli_query($mysqli, $sql_pro);
//tendanhmuc
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' 
limit 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục sản phẩm :<?php echo $row_title["tendanhmuc"] ?></h3>
<ul class="puduct_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="Lỗi hình ảnh">
                <p class="title_puduct">Tên sản phẩm: <?php echo $row_pro['tensp'] ?></p>
                <p class="price_puduct">Giá: <?php echo number_format($row_pro['giasp']).'vnđ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>

</ul>