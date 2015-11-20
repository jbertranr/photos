<?php
$servername = "mysql.hostinger.es";
$username = "u261058157_admin";
$password = "mImUVY2g";
$dbname = "u261058157_ma";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuari (CODI,NOM, COGNOM) VALUES ('1212','Joan','Perez')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 