<html>
<head>

<?php

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile) . "<br>";
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);

echo "<br><br>";

$thefile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgetc($thefile). "<br>";
while(!feof($thefile)) {
    echo fgets($thefile) . "<br>";
}
fclose($thefile);

?>

</head>
</html>