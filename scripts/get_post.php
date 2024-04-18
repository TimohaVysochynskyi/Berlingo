<?php

require_once "../connect.php";

$postData = $conn->query("SELECT * FROM `gallery`");

?>

<?php foreach ($postData as $post): ?>
    <li class="gallery__item">
        <p class="gallery__item-date">
            <?php echo $post['date'] ?>
        </p>
        <img src="./assets/gallery/<?php echo $post['photo'] ?>" alt="<?php echo $post['title'] ?>"
            class="gallery__item-img" />
        <p class="gallery__item-description">
            <?php echo $post['description'] ?>
        </p>
    </li>
    <div class="gallery__item">
        <hr class="gallery__line">
    </div>
<?php endforeach; ?>