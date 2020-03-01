
<?php
$servername = "localhost";
$username = "root";
$password = "jame1412";
$dbname = "shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");
mysqli_query($conn,"set name utf8");
?>
