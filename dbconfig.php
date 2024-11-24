<?php
define("DB_SERVER", "127.0.0.1:3307");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "feedback_system");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

// $conn=mysqli_connect("localhost","root","root","feedback_system")or die(mysqli_error());
?>