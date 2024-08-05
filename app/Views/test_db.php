<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SistemLI";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

// Test query to retrieve departments
$query = "SELECT * FROM department";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<br>Departments found:<br>";
    while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["dept_id"]. ", Name: ". $row["dept_name"]. "<br>";
    }
} else {
    echo "<br>No departments found.";
}