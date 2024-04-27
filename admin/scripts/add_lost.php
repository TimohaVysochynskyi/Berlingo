<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$name = $conn->real_escape_string($_POST['name']);
$psevdo = $conn->real_escape_string($_POST['psevdo']);
$rank = $conn->real_escape_string($_POST['rank']);
$description = $conn->real_escape_string($_POST['description']);

$photoName = $conn->real_escape_string($_FILES['photo']["name"]);
$photoTemp = $conn->real_escape_string($_FILES['photo']["tmp_name"]);
$photoFolder = "../../assets/memory/" . $photoName;

if (
    move_uploaded_file($photoTemp, $photoFolder) &&
    $conn->query("INSERT INTO `memory` (`name`, `psevdo`, `rank`, `description`, `photo`)
VALUES ('$name', '$psevdo', '$rank', '$description', '$photoName')")
) {
    header("Location: ../?page=memory");
} else {
    $errorMessage = 'Виникла помилка. Спробуйте ще раз';
}

?>