<?php
$servername = "mysql.hostinger.es";
$username = "u261058157_admin";
$password = "mImUVY2g";
$dbname = "u261058157_ma";
$codi = $_GET['codi'];
$usuari_codi= $_GET['usuari_codi'];
$adreca = $_GET['adreca'];
$den_x = $_GET['den_x'];
$den_y = $_GET['den_y'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO denuncia (codi,usuari_codi,adreca,den_x,den_y) VALUES ('$codi','$codi_usuari','$adreca','$den_x','$den_y')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 