<?php
$sql_danhmuc = "SELECT *FROM tbl_danhmuc ORDER BY id_danhmuc asc";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<div class="sidebar">
    <ul class="list_sidebar">
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li><b><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc["id_danhmuc"] ?>" <?php ?></a><?php echo $row_danhmuc["tendanhmuc"] ?></li>
        <?php
        }
        ?>
    </ul>
</div>