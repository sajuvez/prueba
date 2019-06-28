<?php
$hostname = "localhost";
$database = "prueba_trabajo";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($hostname, $username, $password, $database) or die("<h2>No se encuentra el servidor</h2>");
// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
// echo "Connected successfully";
// mysqli_close($conn);
 ?>
