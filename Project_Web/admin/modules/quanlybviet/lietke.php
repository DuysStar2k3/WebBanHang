<?php

?>
<h3 class="font-size-24 mg-5">Danh sách vừa nhập</h3>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_bv)) {
            $i++;
            ?>
            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $row["tenbv"] ?>
                </td>
                <td>
                    <?php echo $row["noidungbv"] ?>
                </td>
                <td><img style="width: 200px;" src="modules/quanlybv/uploads/<?php echo $row['hinhanh'] ?>" alt=""></td>

                <td><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp'] ?>">Xóa</a>
                    |<a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sp'] ?>">Sửa</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>