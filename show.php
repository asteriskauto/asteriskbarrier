<?php
$servername = "localhost";
$username = "root";
$password = "mahapharata";
$dbname = "barrier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, phone, name FROM numbers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo " " . $row["name"]. " " . $row["phone"]. "<br>";
    }
} else {
    echo "В базе нет номеров";
}
$conn->close();
?>

<p><a href="index.php">На главную</a></p>
