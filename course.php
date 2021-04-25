<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Merit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

  $sql = "SELECT * FROM course_reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - course code: " . $row["course_code"]. " - course title: ". $row["course_title"];
  }
} else {
  echo "0 results";
}


$sql = "UPDATE course_reg SET course_code='223' WHERE id=100";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
// sql to delete a record
$sql = "DELETE FROM course_reg WHERE id=101";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
  
  $conn->close();
?>