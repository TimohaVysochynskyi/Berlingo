<?php

require_once "./connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$telData = $conn->query("SELECT `tel` FROM `anketa` WHERE `id` = '$id'");
$telData = $telData->fetch_assoc();

$tel = $telData['tel'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкету надіслано</title>

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/success.css">
    <link rel="stylesheet" href="./styles/responsive.css">
</head>

<body>
    <div class="success">
        <img src="./assets/success-tick.png" alt="Все пройшло успішно" class="success__tick">
        <h1 class="success__title">Вашу анкету було надіслано!</h1>
        <p class="success__subtitle">Очікуйте дзвінка на номер <span>
                <?php echo $tel ?>
            </span></p>
        <a href="./" class="btn btn-bordered">На головну <p>&#10230;</p></a>
    </div>
</body>

</html>