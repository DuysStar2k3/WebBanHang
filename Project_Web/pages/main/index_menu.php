<?php
$per_page = 10; // Adjust the number of products per page as needed
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sp DESC LIMIT $start, $per_page";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
<div id="popup" class="popup-container">
    <div>
        <span class="close-button" onclick="closePopup()">&times;</span>
    </div>
    <div>
        Trang web đang trong quá trình phát triển.Mục đích sử dụng cho dự án WEB của Nhóm 2_K66_HUMG.
        Đề nghị ko mua sắm nếu không thuộc bộ phận quản trị dự án.
    </div>
    <div>
        Web được làm bởi:
    </div>
    <ul>

        <li>
            Trần Đức Vương
        </li>
        <li>
            Đỗ Quang Bình Minh
        </li>
        <li>Nguyễn Đức Minh Quân</li>
        <li>Nguyễn Hồ Việt Anh</li>
        <li>Nguyễn Hoàng Duy</li>
        <li>Đỗ Xuân Hạnh</li>
        <li>Phạm Quốc Huy</li>
        <li>Đoàn Tuấn Nam</li>
        <li>Nguyễn Trường Sơn</li>
        <li>Phạm Thị Hồng Thư</li>
        <li>Nguyễn Minh Tiến</li>
    </ul>

</div>
<script>
    // Hàm đóng thông báo
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>
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
<div class="container mt-3">
    <ul class="pagination">
        <?php
        $sql_count = "SELECT COUNT(id_sp) AS total FROM tbl_sanpham";
        $result_count = mysqli_query($mysqli, $sql_count);
        $row_count = mysqli_fetch_assoc($result_count);
        $total_pages = ceil($row_count['total'] / $per_page);
        if ($page > 1) {
        ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
        <?php
        }
        for ($i = 1; $i <= $total_pages; $i++) {
        ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        }
        if ($page < $total_pages) {
        ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
        <?php
        }
        ?>
    </ul>
</div>