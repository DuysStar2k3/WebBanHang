<div id="slide-banner" class="slide-banner">
    <?php
    $imageDirectory = './banner';
    $imageFormats = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    $images = [];
    foreach ($imageFormats as $format) {
        $images = array_merge($images, glob($imageDirectory . '/*.' . $format));
    }
    ?>
</div>

<script>
    const slider = document.getElementById('slide-banner');
    const sliderItems = document.querySelectorAll('.slide-banner');
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % sliderItems.length;
        updateSlider();
    }

    function updateSlider() {
        const translateValue = -currentIndex * 100 + '%';
        slider.style.transform = `translateX(${translateValue})`;
    }

    setInterval(nextSlide, 3000); // Chuyển ảnh mỗi 3 giây
</script>
