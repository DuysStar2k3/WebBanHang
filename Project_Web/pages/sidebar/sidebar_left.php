<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc asc";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<ul style="width: 100%">
  <h3 style="font-size: 14px; font-family:Arial, Helvetica, sans-serif;">Danh mục sản phẩm:</h3>
  <?php
  while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
  ?>
    <!-- Fixed the anchor tag closing position -->
    <li style="width: 100%">
      <b style="display: flex; justify-content: space-between; flex-grow: 1;"><a style="text-transform: capitalize;" href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc["id_danhmuc"] ?>"><?php echo $row_danhmuc["tendanhmuc"] ?></a> <i class="ti-angle-right" style="font-size: 12px; margin-left: 10px"></i></b> 
    
  </li>
  <?php
  }
  ?>

  <!-- Thêm các mục danh sách khác nếu cần -->
</ul>