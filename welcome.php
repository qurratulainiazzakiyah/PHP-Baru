<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your Email adress is: <?php echo $_POST["email"]; ?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn -> query($sql) === TRUE) {
    echo "New records created succesfully";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="http:/localhost/daftar.php">Data yang terdaftar</a>

</body>
</html> 
