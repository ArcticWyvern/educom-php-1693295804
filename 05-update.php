<?php
$servername = "localhost";
$username = "stan";
$password = "EducomSQL2023";
$dbname = "myDBPDO";

try {

    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "UPDATE MyGuests SET lastname = 'Doe' WHERE lastname = 'Hillen'";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $conn->exec($sql);
    echo $stmt->rowCount() . " records UPDATED successfully <br>";
    $sql = "UPDATE MyGuests SET lastname = 'Dooley' WHERE firstname = 'Julie'";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $conn->exec($sql);
    echo $stmt->rowCount() . " records UPDATED successfully <br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>