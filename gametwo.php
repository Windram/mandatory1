<?php
if (isset($_POST['submitted'])==1) {
//get variables
$throw = $_POST['throw'];
$win = $_POST['win'];
$loss = $_POST['loss'];
$draw = $_POST['draw'];
$playerthrow = $_POST['playerthrow'];
//randomize computer throw
$randomcomp = rand(1,3);
if ($randomcomp == 1) {
$computerthrow = "ROCK";}
if ($randomcomp == 2) {
$computerthrow = "PAPER";}
if ($randomcomp == 3) {
$computerthrow = "SCISSORS";}
//compare throws
if ($computerthrow == $playerthrow) {
$winlossdraw = "DRAW";
$draw++;}
if ($computerthrow == "ROCK" && $playerthrow == "PAPER") {
$winlossdraw = "WIN";
$win++;}
if ($computerthrow == "PAPER" && $playerthrow == "SCISSORS") {
$winlossdraw = "WIN";
$win++;}
if ($computerthrow == "SCISSORS" && $playerthrow == "ROCK") {
$winlossdraw = "WIN";
$win++;}
if ($computerthrow == "SCISSORS" && $playerthrow == "PAPER") {
$winlossdraw = "LOSS";
$loss++;}
if ($computerthrow == "PAPER" && $playerthrow == "ROCK") {
$winlossdraw = "LOSS";
$loss++;}
if ($computerthrow == "ROCK" && $playerthrow == "SCISSORS") {
$winlossdraw = "LOSS";
$loss++;}
$throw++;
} else {
//set initial variables
$throw = 0;
$win = 0;
$loss = 0;
$draw = 0;
$winlossdraw = "No games played yet";
$playerthrow = "Nothing yet";
$computerthrow = "Nothing yet";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Rock Paper Scissors</title>
</head>
<body>

<form action="" method="post" style="">

    <input name="submitted" type="hidden" value="1" />

    <input name="throw" type="hidden" value="<?php echo $throw; ?>" />

    <input name="win" type="hidden" value="<?php echo $win; ?>" />

    <input name="loss" type="hidden" value="<?php echo $loss; ?>" />

    <input name="draw" type="hidden" value="<?php echo $draw; ?>" />

    <label><input type="submit" name="playerthrow" value="ROCK"></label>

    <label><input type="submit" name="playerthrow" value="PAPER"></label>

    <label><input type="submit" name="playerthrow" value="SCISSORS"></label>

</form>

<p>CURRENT GAME STATUS: <?php echo $winlossdraw; ?></p>

<p>You threw: <?php echo $playerthrow; ?></p>

<p>Computer threw: <?php echo $computerthrow; ?></p>

<p>Total Throws: <?php echo $throw; ?></p>

<p>Wins: <?php echo $win; ?></p>

<p>Losses: <?php echo $loss; ?></p>

<p>Draws: <?php echo $draw; ?></p>

<a href="gametwo.php">RESET</a> <br>
<a href="index.php">Go back to the number guesser</a>

</body>
</html>