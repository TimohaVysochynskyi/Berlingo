<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$id = htmlspecialchars(strip_tags($_POST['id']));

$imageData = $conn->query("SELECT `image` from `gallery` WHERE `id` = '$id'");
$imageData = $imageData->fetch_assoc();
$imageDataRow = $imageData['image'];

$imageArray = explode("|", $imageDataRow);

$imageFolder = "../../../assets/gallery/" . $id . '/';

$conn->query("DELETE FROM `gallery` WHERE `id` = '$id'");

foreach ($imageArray as $image) {
    unlink($imageFolder . $image);
}
rmdir($imageFolder);