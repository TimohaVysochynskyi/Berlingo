<?php
$conn = new mysqli("localhost", "root", "", "berlingo");
if ($conn->connect_error) {
    die("Connection failed");
}
$conn->set_charset("utf8");
?>