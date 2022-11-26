<html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}

$sql = "INSERT INTO MYGuests (firstname, lastname, email)
VALUES ('Jhon', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MYGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MYGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com');";

if($conn->multi_query($sql) === TRUE){
    echo "New records created succesfully";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn = new mysqli ($servername, $username, $password, $dbname);
$sql=  "SELECT no, firstname, lastname FROM MyGuests";
$result=$conn->query($sql);
if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()) {
        echo "no:" . $row["no"]. "-Name:" . $row["firstname"]." " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<a href="http://localhost/data.php">hapus</a>
<a href="http://localhost/tambahdata.php">tambah</a>
</html>