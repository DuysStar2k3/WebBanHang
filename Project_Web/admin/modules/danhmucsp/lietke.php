<?php
$sql_lietke_danhmucsp = "SELECT *FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">
    <table border="1px" style="width: 100%;" class="danhmuc-lietke">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["tendanhmuc"] ?></td>
                <td><a href="modules/danhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> 
                |<a href="?action=danhmucsp&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>