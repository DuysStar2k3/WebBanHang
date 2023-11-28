<style>
    .news-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-content: flex-start;
        height: 200px;
        width: 20%;
        float: left;
        margin: 35px;
        border-radius: 12px;
    }


    .news-container a {
        text-decoration: none;
        color: #000;
        text-transform: capitalize;
    }

    .news-item {
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 5px;
        border-radius: 5px;

    }



    .news-item img {
        width: 327px;
        height: 142px;
        border-radius: 5px;
    }

    .news-title {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .news-description {
        color: #555;
    }
</style>

<?php
$sql_pro = "SELECT * FROM tbl_baiviet,tbl_danhmucbv WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbv.id_danhmuc order by id_baiviet desc limit 25";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>


<h2>Tin Tức</h2>

<?php
while ($row = mysqli_fetch_array($query_pro)) {
    // Get a short excerpt from the content
    $excerpt = substr($row['noidungbaiviet'], 0, 40); // Adjust the character limit as needed
?>
    <div class="news-container">
        <a href="<?php echo $row['nguon_url'] ?>" class="news-item">
            <img src="admin/modules/quanlybviet/uploads/<?php echo $row['hinhanh'] ?>" alt="News Image">
            <h3 class="news-title"><?php echo $row['tendanhmuc'] ?></h3>
            <p class="news-description"><?php echo $excerpt; ?>...</p>
        </a>
    </div>
<?php
} ?>
