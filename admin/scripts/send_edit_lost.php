<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$photoData = $conn->query("SELECT `photo` FROM `memory` WHERE `id` = '$id'");
$photoData = $photoData->fetch_assoc();
$photo = $photoData['photo'];

$name = test_input($_POST['name']);
$psevdo = test_input($_POST['psevdo']);
$rank = test_input($_POST['rank']);
$description = test_input($_POST['description']);

$photoName = $_FILES['photo']["name"];
$photoTemp = $_FILES['photo']["tmp_name"];
$photoFolder = "../../assets/memory/" . $photoName;

if (
    unlink("../../assets/memory/" . $photo) &&
    move_uploaded_file($photoTemp, $photoFolder) &&
    $conn->query("UPDATE `memory` SET `name` = '$name', `psevdo` = '$psevdo', `rank` = '$rank', `description` = '$description', `photo` = '$photoName' WHERE `id` = '$id'")
) {
    header("Location: ../?page=memory");
} else {
    $errorMessage = 'Виникла помилка. Спробуйте ще раз';
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    if ($data == "") {
        $data = 0;
    }
    return $data;
}

?>