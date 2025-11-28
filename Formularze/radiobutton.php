<?php
$login = $_POST['login'];
$haslo = sha1($_POST['haslo']);
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel121";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (firstname, lastname, fav_language) VALUES ('$firstname', '$lastname' , '$fav_language')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>