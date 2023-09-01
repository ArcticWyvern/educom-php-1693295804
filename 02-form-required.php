<?php
// define vars and set to empty
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($POST["name"])) {
        $nameErr = "name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if(empty($POST["gender"])) {
        $genderErr = "gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if(empty($POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
    if(empty($POST["website"])) {
        $website = " ";
    } else {
        $website = test_input($_POST["website"]);
    }
    if(empty($POST["comment"])) {
        $commentErr = " ";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>




<html>
    <body>
        <h2>PHP Form Validation Example </h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Email: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website">
            <span class="error">* <?php echo $websiteErr;?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        echo "<h2>Your Input</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>
    </body>
</html>