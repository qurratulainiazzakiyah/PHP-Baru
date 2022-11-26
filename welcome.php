<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your Email adress is: <?php echo $_POST["email"]; ?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$Email (Wajib Diisi)=$_POST["Email (Wajib Diisi)"];
$Pesan (Wajib Diisi)=$_POST["Pesan (Wajib Diisi)"];


//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (Email (Wajib Diisi),Pesan (Wajib Diisi))
VALUES ('$Email (Wajib Diisi)', '$Pesan (Wajib Diisi)')";

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
