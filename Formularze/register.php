<?php
$login = $_POST["name"];
$password = sha1($_POST["haslo"]);

$sql = "INSERT INTO MyGuests (login, haslo) VALUES ('$name', '$password')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>