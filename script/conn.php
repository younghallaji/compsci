<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "nacoss";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);

?>