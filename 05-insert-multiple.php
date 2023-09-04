<?php
$servername = "localhost";
$username = "stan";
$password = "EducomSQL2023";
$dbname = "myDBPDO";

try {

    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();

    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'Julie@example.com')");


    $conn->commit();
    echo "New records created successfully";
} catch(PDOException $e) {
    $conn->rollBack();
    echo "Error " . $e->getMessage();
}

$conn = null;
?>