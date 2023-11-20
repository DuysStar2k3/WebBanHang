<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc asc";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<ul>
  <?php
  while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
  ?>
    <!-- Fixed the anchor tag closing position -->
    <li style="display: flex; justify-content: space-between;">
      <b><a style="text-transform: capitalize;" href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc["id_danhmuc"] ?>"><?php echo $row_danhmuc["tendanhmuc"] ?></a></b> 
    <i class="ti-angle-right" style="font-size: 12px;"></i>
  </li>
  <?php
  }
  ?>

  <!-- Thêm các mục danh sách khác nếu cần -->
</ul>