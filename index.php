<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// creat connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM MyGuests WHERE id=2";

if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
} else{
    echo "Error deleting record: ". $conn->error;
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "- Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<a href="https://localhost/testeori.php"> hapus </a>
<a href="https://localhost"></a>

</html>