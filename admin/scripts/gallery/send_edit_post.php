<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$oldImageData = $conn->query("SELECT `image` FROM `gallery` WHERE `id` = '$id'");
$oldImageData = $oldImageData->fetch_assoc();
$oldImageName = $oldImageData['image'];
$oldImageArray = explode("|", $oldImageName);

$title = $conn->real_escape_string($_POST['title']);
$description = $conn->real_escape_string($_POST['description']);

$imageNameArray = $_FILES['image']["name"];
$imageTempArray = $_FILES['image']["tmp_name"];

$finalImageNameArray = '';
$imageNumber = 0;

foreach ($oldImageArray as $oldImage) {
    unlink("../../../assets/gallery/" . $id . '/' . $oldImage);
}

foreach ($imageNameArray as $imageName) {
    $imageFolder = "../../../assets/gallery/" . $id . '/' . $imageName;
    $finalImageNameArray = $finalImageNameArray . $imageName . '|';
    if (!move_uploaded_file($imageTempArray[$imageNumber], $imageFolder)) {
        echo 'Помилка завантаження картинок. Спробуйте ще раз або зв\'яжіться з розробником';
    }

    $imageNumber++;
}

$finalImageNameArray = $conn->real_escape_string($finalImageNameArray);

if ($conn->query("UPDATE `gallery` SET `title` = '$title', `description` = '$description', `image` = '$finalImageNameArray' WHERE `id` = '$id'")) {
    header("Location: ../../?page=gallery");
} else {
    echo 'Виникла помилка. Спробуйте ще раз або зв\'яжіться з розробником';
}
