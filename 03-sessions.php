<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
$_SESSION["favcolour"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set. <br>";

echo "Favorite colour is " . $_SESSION["favcolour"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ". <br>";

print_r($_SESSION);
echo "<br>";
$_SESSION["favcolour"] = "yellow";
session_unset();
session_destroy();
print_r($_SESSION);
?>



</head>
</html>
