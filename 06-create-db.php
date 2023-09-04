<?php
$servername = "localhost";
$username = "stan";
$password = "EducomSQL2023";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(30) NOT NULL,
    LastName VARCHAR(30) NOT NULL,
    Age INT(3),
    Hometown VARCHAR(30), 
    Job VARCHAR(30))";
    $conn->exec($sql);
    echo "Table user created successfully";

    $conn->beginTransaction();

    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Peter', 'Griffin', '41', 'Quahog','Brewery')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Lois', 'Griffin', '40', 'Newport','Piano Teacher')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Joseph', 'Swanson', '39', 'Quahog','Police Officer')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Glenn', 'Quagmire', '41', 'Quahog','Pilot')");


    $conn->commit();
    echo "New records created successfully";
    
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;

/*




$conn->beginTransaction();

    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Peter', 'Griffin', '41', 'Quahog','Brewery')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Lois', 'Griffin', '40', 'Newport','Piano Teacher')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Joseph', 'Swanson', '39', 'Quahog','Police Officer')");
    $conn->exec("INSERT INTO user (FirstName, LastName, Age, Hometown, Job)
    VALUES ('Glenn', 'Quagmire', '41', 'Quahog','Pilot')");


    $conn->commit();
    echo "New records created successfully";

*/
?>



