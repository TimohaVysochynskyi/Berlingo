<?php
require_once "../connect.php";

$name = $birth = $tel = $degree = $school = $expInStructure = $structure = $rank = $vos = $expInBattle = $battle = $expWithGuns = $guns = $driver = $notes = "";

$name = test_input($_POST['name']);
$birth = test_input($_POST['birth']);
$tel = test_input($_POST['tel']);
$degree = test_input($_POST['degree']);
$school = test_input($_POST['school']);
$expInStructure = test_input($_POST['exp-in-structure']);
$structure = test_input($_POST['structure']);
$rank = test_input($_POST['rank']);
$vos = test_input($_POST['vos']);
$expInBattle = test_input($_POST['exp-in-battle']);
$battle = test_input($_POST['battle']);
$expWithGuns = test_input($_POST['exp-with-guns']);
$guns = test_input($_POST['guns']);
$driver = test_input($_POST['driver']);
$notes = test_input($_POST['notes']);

$conn->query("INSERT INTO `anketa` (`name`, `birth`, `tel`, `degree`, `school`, `exp-in-structure`, `structure`, `rank`, `vos`, `exp-in-battle`, `battle`, `exp-with-guns`, `guns`, `driver`, `notes`)
        VALUES ('$name', '$birth', '$tel', '$degree', '$school', '$expInStructure', '$structure', '$rank', '$vos', '$expInBattle', '$battle', '$expWithGuns', '$guns', '$driver', '$notes')");

$idData = $conn->query("SELECT `id` FROM `anketa` WHERE `name` = '$name' AND `birth` = '$birth' AND `tel` = '$tel'");
$idData = $idData->fetch_assoc();
$id = $idData['id'];


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

header("Location: ../anketa_success?id=" . $id);

?>