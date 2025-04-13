<?php
$host = "localhost";
$username = "root";
$password = "rfcGuhb1029!";
$db = "testdb";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
  die("konekso gagal" . mysqli_connct_error());
}
