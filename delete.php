<?php
$servername = "localhost";
$username = "root";
$password = "mahapharata";
$dbname = "barrier";
$phone = $_POST["phonedel"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM numbers  WHERE phone='".$phone."'";

if ($conn->query($sql) === TRUE) {
    echo "Запись успешно удалена\r\n";
} else {
    echo "Проверьте параметры подключения к базе: " . $conn->error;
}

$conn->close();
?>
<input type="button" value="Назад" onclick="history.back()">
