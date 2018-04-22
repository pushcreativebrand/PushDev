<?php
$servername = "localhost";
$username = "petah";
$password = "peet1";
$dbname = "petah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$message = $_POST['message'];xw

$sql = "INSERT INTO messages (name)VALUES ('$first','$last','$email','$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
