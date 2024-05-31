<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$description = $conn->real_escape_string($_POST['description']);

$imageNameArray = $_FILES['image']["name"];
$imageTempArray = $_FILES['image']["tmp_name"];

$finalImageNameArray = '';
$imageNumber = 0;

$imageFolder = '../../../assets/gallery/';

foreach ($imageNameArray as $imageName) {
    $finalImageNameArray = $finalImageNameArray . $imageName . '|';
}

$finalImageNameArray = $conn->real_escape_string($finalImageNameArray);

if (!$conn->query("INSERT INTO `gallery` (`description`, `image`) VALUES ('$description', '$finalImageNameArray')")) {
    echo 'Виникла помилка. Спробуйте ще раз або зв\'яжіться з розробником';
    exit();
}

$postIdData = $conn->query("SELECT `id` FROM `gallery` WHERE `description` = '$description' AND `image` = '$finalImageNameArray'");
$postIdData = $postIdData->fetch_assoc();
$postId = $postIdData['id'];

$newFolder = $imageFolder . $postId . '/';

mkdir($newFolder, 0700);
foreach ($imageNameArray as $imageName) {
    if (!move_uploaded_file($imageTempArray[$imageNumber], $newFolder . $imageName)) {
        echo 'Помилка завантаження картинок. Спробуйте ще раз або зв\'яжіться з розробником';
        exit();
    }
    $imageNumber++;
}

header("Location: ../../?page=gallery");
