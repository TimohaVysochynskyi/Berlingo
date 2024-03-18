<?php

//$conn = new mysqli("localhost", "root", "", "berlingo");

$conn = new mysqli("localhost", "berlingo_admin", "B0r0nym0_\$v0iE", "berlingo_berlingo");

if ($conn->connect_error) {
    die("Connection failed");
}
$conn->set_charset("utf8");
?>