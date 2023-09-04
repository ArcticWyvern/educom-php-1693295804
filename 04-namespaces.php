<?php
namespace Html;

Class table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}


$table = new table();
$table -> title = "My table";
$table -> numRows = 5;
?>
<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
