<!DOCTYPE html>
<html>
    <body>
        <?php
        $txt = "Hello world!";
        $x= 5;
        $y = 10.5;

        echo "I love $txt!";
        echo $x + $y;

        $x = 5; // global scope

        function myTest(){
            $z = 5; //local scope
            echo "<p>Variable x inside function is: $z</p>";

        }
        myTest();
        //using z outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";

        function testMy() {
            global $x, $y;
            $y = $x + $y;
        }

        testMy();
        echo $y; 
        echo "<br>";
        
        function miTest() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        miTest();
        echo $y;
        echo "<br>";

        function staticTest() {
            static $x = 0;
            echo $x;
            echo "<br>";
            $x++;
        }
        echo staticTest();
        echo staticTest();
        echo staticTest();
        ?>

        


    </body>
</html>