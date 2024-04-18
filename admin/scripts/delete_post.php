<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$id = htmlspecialchars(strip_tags($_POST['id']));
$photo = htmlspecialchars(strip_tags($_POST['photo']));

if ($conn->query("DELETE FROM `gallery` WHERE `id` = '$id'")) {
    unlink("../../assets/gallery/" . $photo);
}


?>