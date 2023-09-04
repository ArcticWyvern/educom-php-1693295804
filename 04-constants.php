<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting educom!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye -> byebye();

?>