<?php
$sql_pro = "SELECT * FROM tbl_banner ORDER BY id_banner asc";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px; /* Adjust the width as needed */
        height: 50px; /* Adjust the height as needed */
        background-color: #007bff; /* Change the background color */
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.7;
        transition: background-color 0.3s;
        cursor: pointer;
        color: #fff; /* Change the text color */
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: #0056b3; /* Change the background color on hover */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        font-size: 24px; /* Adjust the icon size as needed */
    }
</style>
<body>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <?php
      while ($row_pro = mysqli_fetch_array($query_pro)) {
      ?>
        <div class="carousel-item active">
          <img src="admin/modules/banner/img_banner/<?php echo $row_pro['hinhanh'] ?>" alt="Los Angeles" class="d-block" style="width:100% ;height: 412.25px;">
        </div>
      <?php
      }
      ?>
    </div>

    <!-- Left and right controls/icons -->
    <button  class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button  class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span  class="carousel-control-next-icon"></span>
    </button>
  </div>
</body>