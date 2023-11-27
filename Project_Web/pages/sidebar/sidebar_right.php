<style>
  .carousel-control-prev,
  .carousel-control-next {
    width: 50px;
    /* Adjust the width as needed */
    height: 50px;
    /* Adjust the height as needed */
    background-color: #A9A9A9;
    /* Change the background color */
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
    color: #fff;
    /* Change the text color */
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    background-color: #0056b3;
    /* Change the background color on hover */
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    font-size: 24px;
    /* Adjust the icon size as needed */
  }

  .carousel-indicators [data-bs-target] {
    background-color: #007bff;
  }

  .carousel-control-prev,
  .carousel-control-next {
    margin-left: -27px;
    margin-right: -27px;
  }

  span.carousel-control-prev-icon {
    margin-left: 15px;
  }

  span.carousel-control-next-icon {
    margin-right: 15px;
  }
    /* Các kiểu dáng CSS cho các phần tử của carousel */
    .carousel-control-prev,
    .carousel-control-next {
        /* Các thuộc tính khác ở đây */
        opacity: 0; /* Mặc định ẩn */
        transition: opacity 0.3s;
    }

    
</style>

<script>
    // Chờ cho trang HTML được load hoàn tất
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy các phần tử nút "Prev" và "Next"
        var prevButton = document.querySelector(".carousel-control-prev");
        var nextButton = document.querySelector(".carousel-control-next");

        // Lắng nghe sự kiện khi di chuột vào carousel
        document.getElementById("demo").addEventListener("mouseenter", function () {
            // Khi di chuột vào, hiển thị nút "Prev" và "Next"
            prevButton.style.opacity = '0.7';
            nextButton.style.opacity = '0.7';
        });

        // Lắng nghe sự kiện khi di chuột ra khỏi carousel
        document.getElementById("demo").addEventListener("mouseleave", function () {
            // Khi di chuột ra, ẩn nút "Prev" và "Next"
            prevButton.style.opacity = '0';
            nextButton.style.opacity = '0';
        });
    });
</script>

<!-- Phần HTML và PHP khác -->

</style>
<?php
// Truy vấn để lấy danh sách banner từ cơ sở dữ liệu
$sql_pro = "SELECT * FROM tbl_banner ORDER BY id_banner ASC";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<style>
  /* Các kiểu dáng CSS cho các phần tử của carousel */
</style>

<body>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Chỉ số/Chấm -->
    <div class="carousel-indicators">
      <?php
      $indicatorIndex = 0;
      // Duyệt qua danh sách banner để tạo chỉ số tương ứng
      while ($row_pro = mysqli_fetch_array($query_pro)) {
      ?>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $indicatorIndex; ?>" class="<?php echo $indicatorIndex === 0 ? 'active' : ''; ?>"></button>
      <?php
        $indicatorIndex++;
      }
      ?>
    </div>

    <!-- Phần hiển thị hình ảnh trong carousel -->
    <div class="carousel-inner">
      <?php
      // Đặt con trỏ kết quả về đầu để lặp lại từ đầu
      mysqli_data_seek($query_pro, 0);
      $itemIndex = 0;
      // Duyệt qua danh sách banner để hiển thị từng hình ảnh trong carousel
      while ($row_pro = mysqli_fetch_array($query_pro)) {
      ?>
        <div class="carousel-item <?php echo $itemIndex === 0 ? 'active' : ''; ?>">
          <img src="admin/modules/banner/img_banner/<?php echo $row_pro['hinhanh'] ?>" alt="Banner Image" class="d-block" style="width: 948.64px; height: 412.45px;">
        </div>
      <?php
        $itemIndex++;
      }
      ?>
    </div>

    <!-- Các nút điều khiển bên trái và bên phải -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <script>
  // Chờ cho trang HTML được load hoàn tất
  document.addEventListener("DOMContentLoaded", function () {
    // Lấy các phần tử nút "Prev" và "Next"
    var prevButton = document.querySelector(".carousel-control-prev");
    var nextButton = document.querySelector(".carousel-control-next");

    // Lắng nghe sự kiện khi di chuột vào carousel
    document.getElementById("demo").addEventListener("mouseenter", function () {
      // Khi di chuột vào, hiển thị nút "Prev" và "Next"
      prevButton.classList.add("show");
      nextButton.classList.add("show");
    });

    // Lắng nghe sự kiện khi di chuột ra khỏi carousel
    document.getElementById("demo").addEventListener("mouseleave", function () {
      // Khi di chuột ra, ẩn nút "Prev" và "Next"
      prevButton.classList.remove("show");
      nextButton.classList.remove("show");
    });
  });
</script>

<!-- Kết thúc thẻ </body> -->
</body>
<!-- Các phần khác của trang -->


