<?php

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ./secure");
    die();
}

?>

<form class="memory-form" method="post" action="./scripts/add_lost.php" enctype="multipart/form-data">
    <h1 class="h3 mb-1 font-weight-normal text-center">Додавання на стіну пам'яті</h1>
    <input type="text" name="name" class="form-control" placeholder="Ім'я та прізвище" required="">
    <input type="text" name="psevdo" class="form-control" placeholder="Позивний" required="">
    <input type="text" name="rank" class="form-control" placeholder="Звання" required="">
    <textarea name="description" class="form-control" placeholder="Опис" required=""></textarea>
    <input type="file" name="photo" class="form-control" placeholder="Фотографія" required="">
    <button class="btn btn-lg btn-primary btn-block w-100" type="submit">Додати</button>
    <p class="text-center text-info">Додана фотографія повинна бути <b>КОЛЬОРОВОЮ</b>! Вона буде автоматично
        відфільтрована на стіні пам'яті</p>
    <?php
    if (isset($errorMessage)) {
        echo '<p>' . $errorMessage . '</p>';
    }
    ?>
</form>

<div class="table-wrapper mt-4" id="lost-wrapper"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        $('#lost-wrapper').load('./scripts/get_lost.php');
    });
</script>