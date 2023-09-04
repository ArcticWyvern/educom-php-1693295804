<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set! <br>";
} else {
    echo "Cookie '" . $cookie_name . "' is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
}

if(count($_COOKIE) >0 ) {
    echo "Cookies are enabled.". "<br>";
} else {
    echo "Cookies are disabled". "<br>";
}
?>
</head>
</html>
