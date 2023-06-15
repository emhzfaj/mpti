<?php
$servername = "localhost"; // Replace with your database server name
$username = "id20899078_selfdummy"; // Replace with your database username
$password = "Selfdummy@19"; // Replace with your database password
$dbname = "id20899078_bimbel_juara"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "koneksi berhasil"
// Connection successful! You can now perform database operations

// Example: Retrieving data from a table
$sql = "SELECT * FROM login";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
*/
// Close the connection
$conn->close();
?>
