<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$id = htmlspecialchars(strip_tags($_POST['id']));

$conn->query("DELETE FROM `anketa` WHERE `id` = '$id'");

?>