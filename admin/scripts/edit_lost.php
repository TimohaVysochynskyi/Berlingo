<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$lostData = $conn->query("SELECT * FROM `memory` WHERE `id` = '$id'");
$lost = $lostData->fetch_assoc();

$photo = $lost['photo'];

$photoFolder = "../assets/memory/" . $photo;


?>

<div class="edit-form-wrapper">
    <form class="edit-form" method="post" action="./scripts/send_edit_lost.php?id=<?php echo $id ?>"
        enctype="multipart/form-data">
        <h2 class="h3 mb-1 font-weight-normal text-center">Редагування</h2>
        <div class="d-flex align-items-center w-100">
            <div class="edit-form__col">
                <input type="text" name="name" class="form-control" placeholder="Ім'я та прізвище" required=""
                    value="<?php echo $lost['name'] ?>">
                <input type="text" name="psevdo" class="form-control" placeholder="Позивний" required=""
                    value="<?php echo $lost['psevdo'] ?>">
                <input type="text" name="rank" class="form-control" placeholder="Звання" required=""
                    value="<?php echo $lost['rank'] ?>">
                <textarea name="description" class="form-control" placeholder="Опис"
                    required=""><?php echo $lost['description'] ?></textarea>
                <input type="file" name="photo" id="input-photo" class="form-control" placeholder="Фотографія"
                    required="">
            </div>
            <img src="<?php echo $photoFolder ?>" alt="Фото" class="edit-form__photo" id="display-photo">
        </div>
        <button class="btn btn-lg btn-primary btn-block w-100" type="submit">Додати</button>
        <p class="text-center text-info">Додана фотографія повинна бути <b>КОЛЬОРОВОЮ</b>! Вона буде автоматично
            відфільтрована на стіні пам'яті</p>
        <?php
        if (isset($errorMessage)) {
            echo '<p>' . $errorMessage . '</p>';
        }
        ?>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let displayPhoto = document.querySelector("#display-photo");
    $('#input-photo').change(function () {
        let inputPhoto = this.files[0];

        const fileReader = new FileReader();
        fileReader.onload = function (e) {
            displayPhoto.src = e.target.result;
        };
        fileReader.readAsDataURL(inputPhoto);
    });
</script>