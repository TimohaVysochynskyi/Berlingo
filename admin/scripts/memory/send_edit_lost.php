<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$photoData = $conn->query("SELECT `photo` FROM `memory` WHERE `id` = '$id'");
$photoData = $photoData->fetch_assoc();
$photo = $photoData['photo'];

$name = $conn->real_escape_string($_POST['name']);
$psevdo = $conn->real_escape_string($_POST['psevdo']);
$rank = $conn->real_escape_string($_POST['rank']);
$description = $conn->real_escape_string($_POST['description']);

$photoName = $conn->real_escape_string($_FILES['photo']["name"]);
$photoTemp = $conn->real_escape_string($_FILES['photo']["tmp_name"]);
$photoFolder = "../../../assets/memory/" . $photoName;

if ($photoName == "" || $photoTemp == "" || empty($photoName) || empty($photoTemp)) {
    $photoName = $photo;
} else {
    unlink("../../../assets/memory/" . $photo);
    move_uploaded_file($photoTemp, $photoFolder);
}

if (
    $conn->query("UPDATE `memory` SET `name` = '$name', `psevdo` = '$psevdo', `rank` = '$rank', `description` = '$description', `photo` = '$photoName' WHERE `id` = '$id'")
) {
    header("Location: ../../?page=memory");
} else {
    $errorMessage = 'Виникла помилка. Спробуйте ще раз';
}

?>