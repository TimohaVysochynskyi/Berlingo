<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$name = test_input($_POST['name']);
$psevdo = test_input($_POST['psevdo']);
$rank = test_input($_POST['rank']);
$description = test_input($_POST['description']);

$photoName = $_FILES['photo']["name"];
$photoTemp = $_FILES['photo']["tmp_name"];
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