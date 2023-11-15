<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc order by tbl_sanpham.id_sp desc limit 25";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
<ul class="puduct_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row["id_sp"] ?>">
                <p><b><?php echo $row['tendanhmuc'] ?></p>
                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="Lỗi hình ảnh">
                <p class="title_puduct">Tên sản phẩm: <?php echo $row['tensp'] ?></p>
                <p class="price_puduct">Giá: <?php echo number_format($row['giasp']) . 'vnđ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>

