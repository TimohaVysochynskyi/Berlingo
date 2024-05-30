<?php

require_once "../connect.php";

$postData = $conn->query("SELECT * FROM `gallery`");


?>

<?php foreach ($postData as $post): ?>
    <?php $id = $post['id'];
    $imageFolder = './assets/gallery/';
    $imageArray = explode('|', $post['image']);
    $imageNumber = 0; ?>
    <li class="gallery__item">
        <p class="gallery__item-date">
            <?php echo $post['date'] ?>
        </p>
        <!-- Slider goes here -->

        <div class="swiper main-swiper main-swiper<?php echo $id ?>">
            <div class="swiper-wrapper">
                <?php foreach ($imageArray as $image): ?>
                    <?php if (!empty($image)): ?>
                        <div class="swiper-slide">
                            <img class="swiper-img" src="<?php echo $imageFolder . $id.'/'.$image ?>" />
                        </div>
                        <?php $imageNumber++; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next swiper-button-next<?php echo $id ?>"></div>
            <div class="swiper-button-prev swiper-button-prev<?php echo $id ?>"></div>
        </div>
        <div thumbsSlider="" class="swiper thumb-swiper thumb-swiper<?php echo $id ?>">
            <div class="swiper-wrapper thumb-swiper-wrapper">
                <?php foreach ($imageArray as $image): ?>
                    <?php if (!empty($image)): ?>
                        <div class="swiper-slide thumb-swiper-slide">
                            <img class="swiper-img" src="<?php echo $imageFolder . $id . '/' . $image ?>" />
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="swiper-pagination swiper-pagination<?php echo $id ?>"></div>
        <style>
            <?php 
            if ($imageNumber < 6) {
                echo '.thumb-swiper-wrapper{display: flex;justify-content: center;}';
            }
            ?>
        </style>
        <script>
            var thumbSwiper<?php echo $id ?> = new Swiper(".thumb-swiper<?php echo $id ?>", {
                spaceBetween: 10,
                slidesPerView: 6,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var mainSwiper<?php echo $id ?> = new Swiper(".main-swiper<?php echo $id ?>", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next<?php echo $id ?>",
                    prevEl: ".swiper-button-prev<?php echo $id ?>",
                },
                thumbs: {
                    swiper: thumbSwiper<?php echo $id ?>,
                },
                pagination: {
                    el: ".swiper-pagination<?php echo $id ?>",
                    clickable: true
                },
            });
        </script>

        <p class="gallery__item-description">
            <?php echo $post['description'] ?>
        </p>
    </li>
    <div class="gallery__item">
        <hr class="gallery__line">
    </div>
<?php endforeach; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>