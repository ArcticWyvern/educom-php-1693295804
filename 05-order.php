<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150pxlborder:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n" ;
    }
}


$servername = "localhost";
$username = "Stan";
$password = "verrukkulluk";
$dbname = "myDBPDO";

try {

    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id,firstname, lastname FROM MyGuests ORDER BY firstname");
    $stmt -> execute();
    //set result array to associative
    $result = $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }   
} catch(PDOException $e) {
    $conn->rollBack();
    echo "Error " . $e->getMessage();
}

$conn = null;
echo "</table>"
?>