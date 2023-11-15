<div class="menu_container">
    <ul class="menu_list">
        <li class="active">
            <a href="index.php?action=danhmucsp&query=them">
                Quản lý danh mục sản phẩm
            </a>
        </li>
        <li class="">
            <a href="index.php?action=quanlysp&id=002&query=them">
                Quản lý sản phẩm
            </a>
        </li>
        <li class="">
            <a href="index.php?action=quanlydmbviet&query=them">
                Quản lý danh mục bài viết
            </a>
        </li>
        <li class="">
            <a href="index.php?action=quanlybviet&query=them">
                Quản lý bài viết
            </a>
        </li>
    </ul>
</div>

<script>
    var listItems = document.querySelectorAll('.menu_list li');

    listItems.forEach(function(li) {
      li.addEventListener('click', function(event) {
       
        var link = li.querySelector('a');
        window.location.href = link.getAttribute('href');
      });
    });
  </script>

</body>