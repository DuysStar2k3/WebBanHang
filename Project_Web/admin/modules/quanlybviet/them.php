<p class="font-size-24 mg-5">Quản lý bài viết</p>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" width="50%">
        <form method="post" action="modules/quanlybviet/xuly.php" enctype="multipart/form-data">
            <label for="title">Tiêu đề:</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Nội dung:</label>
            <textarea id="content" name="content" required></textarea>
            <label for="image">Danh mục:</label>
            <select name="danhmuc">
                <?php
                $sql_danhmuc = "SELECT *FROM tbl_danhmuc ORDER BY id_danhmuc desc";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                        <?php echo $row_danhmuc['tendanhmuc'] ?>
                    </option>
                    <?php
                }
                ?>
            </select><br>
            <label for="image">Ảnh:</label>
            <input type="file" id="image" name="image">

            <button type="button">Thêm Bài Viết</button>
        </form>
    </table>
</div>