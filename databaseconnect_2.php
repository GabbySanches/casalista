<?php
$servername = "192.168.10.52";
$database = "condominio";
$username = "aluno1";
$password = "q1w2e3r4t5";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>