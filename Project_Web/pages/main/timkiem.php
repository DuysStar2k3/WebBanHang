<?php
if(isset($_POST['timkiem'])){
   $tukhoa =$_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc 
                WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
                AND (tbl_sanpham.tensp LIKE '%$tukhoa%' OR tbl_danhmuc.tendanhmuc LIKE '%$tukhoa%')";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3>Từ khóa tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
<ul class="puduct_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row["id_sp"] ?>">
                <p><b><?php echo $row['tendanhmuc'] ?></p>
                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="Lỗi hình ảnh">
                <p class="title_puduct"><?php echo $row['tensp'] ?></p>
                <p class="price_puduct"><?php echo number_format($row['giasp']) . 'vnđ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>