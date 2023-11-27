<?php
$sql_lietke_banner = "SELECT *FROM tbl_banner ORDER BY id_banner DESC";
$query_lietke_banner = mysqli_query($mysqli, $sql_lietke_banner);
?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Tên banner</th>
            <th>Hình ảnh</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_banner)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["tenbanner"] ?></td>
                <td><img style="width: 200px;" src="modules/banner/img_banner/<?php echo $row['hinhanh']?>" alt=""></td>
                <td><a href="modules/banner/xuly.php?idbanner=<?php echo $row['id_banner'] ?>">Xóa</td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>