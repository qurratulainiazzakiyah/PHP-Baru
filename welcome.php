<html>
    <body>
    welcome <?php echo $_POST["firstname"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    $servername="localhost";
    $username="root";
    $password="";

    $dbname="mydb";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
   
    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check Connection
    if ($conn->connect_error) {
        die("Connection Failed: ". $conn -> connect_error);
    }
    $sql = "INSERT INTO MYGuests (firstname, lastname, email)
    VALUE ('$Hari','$Tanggal','$Kegiatan','$curah_hujan', '$Penjualan')";

    if ($conn -> query($sql) === TRUE) {
        echo "New Records Created Successfully";
    } else {
        echo 'Error' . $sql . "<br>". $conn->error;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT id, firstname, lastname FROM MyGuests"
    ?>
    </body>
</html>