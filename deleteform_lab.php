<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simlab";
$lab_id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM form_lab WHERE lab_id=$lab_id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: tampilform_lab.php");
?>