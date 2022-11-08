<?php
$servername = "mysql.selfmade.ninja";
$username = "jayachandran";
$password = "jaisharma";
$dbname = "jayachandran_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
$sql = "INSERT INTO `jai_db` (`email`, `pass`)
VALUES ('ja@mco33m', 'j3ea3335')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

