<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$photoData = $conn->query("SELECT `photo` FROM `gallery` WHERE `id` = '$id'");
$photoData = $photoData->fetch_assoc();
$photo = $photoData['photo'];

$title = $conn->real_escape_string($_POST['title']);
$description = $conn->real_escape_string($_POST['description']);

$photoName = $conn->real_escape_string($_FILES['photo']["name"]);
$photoTemp = $conn->real_escape_string($_FILES['photo']["tmp_name"]);
$photoFolder = "../../assets/gallery/" . $photoName;

if ($photoName == "" || $photoTemp == "" || empty($photoName) || empty($photoTemp)) {
    $photoName = $photo;
} else {
    unlink("../../assets/gallery/" . $photo);
    move_uploaded_file($photoTemp, $photoFolder);
}

if (
    $conn->query("UPDATE `gallery` SET `name` = '$name', `description` = '$description', `photo` = '$photoName' WHERE `id` = '$id'")
) {
    header("Location: ../?page=gallery");
} else {
    $errorMessage = 'Виникла помилка. Спробуйте ще раз';
}

?>