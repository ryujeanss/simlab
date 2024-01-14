<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simlab";
$alat_id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM form_alat WHERE alat_id=$alat_id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: tampilform_alat.php");
?>