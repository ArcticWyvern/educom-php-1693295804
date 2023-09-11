<?php
$servername = "localhost";
$username = "Stan";
$password = "verrukkulluk";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>