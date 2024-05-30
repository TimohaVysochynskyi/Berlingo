<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$id = htmlspecialchars(strip_tags($_POST['id']));

$photoData = $conn->query("SELECT `photo` FROM `memory` WHERE `id` = '$id'");
$photoData = $photoData->fetch_assoc();
$photo = $photoData['photo'];

if ($conn->query("DELETE FROM `memory` WHERE `id` = '$id'")) {
    unlink("../../../assets/memory/" . $photo);
}


?>