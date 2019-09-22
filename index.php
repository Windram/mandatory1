<?php
session_start();

if (!isset($_POST["guess"])) {
     $_SESSION["count"] = 0; //Initialize count
     $message = "Go-go-gadget guess a number!";
     $_POST["numtobeguessed"] = rand(1,10);
    // echo $_POST["numtobeguessed"];
} else if ($_SESSION["count"] > 2) { //out of lives
    $message = "You're out of lives. Go away, or press RESET to start over";

} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { //greater than
    $message = $_POST["guess"]." is too big! Try a smaller number.";
    $_SESSION["count"]++; //Declare the variable $count to increment by 1.

} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { //less than
    $message = $_POST["guess"]." is too small! Try a larger number.";
    $_SESSION["count"]++; //Declare the variable $count to increment by 1.

} else { // must be equivalent
    $_SESSION["count"]++;
    $message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)!"; 
    unset($_SESSION["count"]);
        //Include the $count variable to the $message to show the user how many tries to took him.
}
?>
<html>

    <head>
        <title>It's guessing time</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Type your guess here:</strong>
            <input type="text" name="guess"></p>
            <input type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input type="submit" value="Submit your guess"/></p>
        </form>
        <a href="index.php">RESET</a> <br>
        <a href="gametwo.php">Try my other game</a>
    </body>
</html>