<html>
<head>
<div>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach(filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' .filter_id($filter) . '</td></tr>';
    }

    
    ?>
</div>

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";


$int = 100;

if(!filter_var($int, FILTER_VALIDATE_INT) == false) {
    echo "Integer is valid <br>";
} else {
    echo("Integer is invalid <br>");
}

$ip = "127.0.0.1";

if(!filter_var($ip, FILTER_VALIDATE_IP) == false) {
    echo("$ip is a valid IP address <br>");
} else {
    echo("$ip is not a valid IP address <br>");
}

$email = "john.doe@example.com";

$email = filter_var($email,FILTER_SANITIZE_EMAIL);

if(!filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    echo "$email is a valid email address <br>";
} else {
    echo "$email is not a valid email address <br>";
}
$url = "https://www.w3schools.com";

$url = filter_var($url,FILTER_SANITIZE_URL);

if(!filter_var($url, FILTER_VALIDATE_URL) == false) {
    echo "$url is a valid URL <br>";
} else {
    echo "$url is not a valid url <br>";
}

?>

</html>
</head>