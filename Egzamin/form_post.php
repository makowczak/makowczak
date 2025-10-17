Welcome <?php echo $_POST["name"];?> <br>
Your adress email is: <?php echo $_POST["email"];?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel1";
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$database = "goetel1";

$name = $_POST["name"];

$email = $_POST["email"];

$sql = "INSERT INTO MyGuests (firstname, email)
VALUES ('$name', '$email')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}