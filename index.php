<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$number= $_POST['number_entered'];

$submitbutton= $_POST['submit'];


$randomnumber= mt_rand(1,10);


?>


<form action="" method="POST">
Guess a Number Between 1 and 10: 
<input type="number" name="number_entered" min="1" max="10"/> <br><br>

Result: 
<?php 
if ($submitbutton){

if (($number > 0) && ($number <11)){
if ($number != $randomnumber)
{
echo "Incorrect guess. The correct number was $randomnumber. Try again";
}
else 
{
echo "$randomnumber is the correct guess. You got it right.";
}
}

}

?>
<br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>

</body>
</html>