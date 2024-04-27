<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$title = $conn->real_escape_string($_POST['title']);
$description = $conn->real_escape_string($_POST['description']);

$photoName = $conn->real_escape_string($_FILES['photo']["name"]);
$photoTemp = $conn->real_escape_string($_FILES['photo']["tmp_name"]);
$photoFolder = "../../assets/gallery/" . $photoName;

if (
    move_uploaded_file($photoTemp, $photoFolder) &&
    $conn->query("INSERT INTO `gallery` (`name`, `description`, `photo`)
VALUES ('$name', '$description', '$photoName')")
) {
    header("Location: ../?page=gallery");
} else {
    $errorMessage = 'Виникла помилка. Спробуйте ще раз';
}

?>