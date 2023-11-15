<p class="font-size-24 mg-5">Quản lý bài viết</p>
<div class="bg-main-item pd-5 bd-5">

    <table border="1px" width="50%">
        <div>
            <form method="post" action="modules/quanlybviet/xuly.php" enctype="multipart/form-data">
                <div class="mg-5">
                    <label for="title">Tiêu đề:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="mg-5">
                    <label for="content">Nội dung:</label>
                    <textarea class="no-resize" rows="20" id="content" name="content" required></textarea>
                </div>
                <div class="mg-5">
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
                </div>
                <div class="mg-5">
                    <label for="image">Hình ảnh:</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="mg-5">
                    <input type="submit" name="thembv" value="Thêm bài viết">
                </div>
            </form>
        </div>
    </table>
</div>