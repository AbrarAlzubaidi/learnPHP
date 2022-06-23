<?php
$num1 = 10;
$num2 = 5;

echo "<h1>Arithmatic operators</h1> " . '<br>';
echo "add " . ($num1 + $num2) . '<br>';
echo "sub " . ($num1 - $num2) . '<br>';
echo 'mul ' . ($num1 * $num2) . '<br>';
echo 'div ' . ($num1 / $num2) . '<br>';
echo 'mod  ' . ($num1 % $num2) . '<br>';

echo "<h1>Assignment operators</h1> " . '<br>';
echo "assign = " . ($num1) . '<br>';

$num1 +=5;
echo "addAssign += " . ($num1) . '<br>';

$num1 -=2;
echo "subAssign -= " . ($num1) . '<br>';

$num1 *=2;
echo "mulAssign *= " . ($num1) . '<br>';

$num1 /=5;
echo "subAssign /= " . ($num1) . '<br>';

$fname = 'abrar ';
$lname = 'nidal';
$fname .= $lname;

echo "concatinatingAssign .= " . ($fname) . '<br>';

/*
example: Currency exchange
100JD == 70$
*/
echo "<h1>Currency exchange</h1> " . '<br>';
$currency = 50;
echo 'your currency in JD is: ' . $currency . '<br>';
$currency *= 0.7;
echo 'currency in $ is: ' . $currency;

echo "<h1>Comparision operators</h1> " . '<br>';
$num1 = 1;
$num2 = 10;

if ($num1 == $num2){
    echo $num1 . ' is equal ' . $num2 . '<br>';
} elseif ($num1 > $num2){
    echo $num1 . ' is greater than ' . $num2. '<br>';
} else {
    echo $num1 . ' is less than ' . $num2. '<br>';
}


echo "<h1>Decrement/Increment operators</h1> " . '<br>';
$var1 = 0;
$var2 = 0;
echo 'initial value for $var1 and $var2 are: ' . $var1 . ", " . $var2. '<br>';
echo '$var1: ' . ++$var1 . '<br>';
echo '$var1: ' . ++$var1 . '<br>';
echo '$var1: ' . ++$var1 . '<br>';

echo '$var2: ' . $var2++ . '<br>';
echo '$var2: ' . $var2++ . '<br>';
echo '$var2: ' . $var2++ . '<br>';
echo 'after increment by 3 ($var1-> pre-inc, $var2-> post-inc) the final values are: ' . $var1 . ", " . $var2. '<br>';


echo "<h1>Logical operators</h1> " . '<br>';
$ticketPrice = 1000;

if ($ticketPrice >= 500){
    $discount = ($ticketPrice * 15/100);
    echo ' your ticket price is: ' . $ticketPrice . ' and you have a discount 15%, so your ticket price will be: ' . $discount. '<br>';
} elseif ($ticketPrice < 500 && $ticketPrice > 300){
    $discount = ($ticketPrice * 5/100);
    echo ' your ticket price is: ' . $ticketPrice . ' and you have a discount 5%, so your ticket price will be: ' . $discount. '<br>';
} else {
    echo 'Sorry, you do not have a discount'. '<br>';
}
echo "<h3>why && is better than and</h3>" . '<br>';
$a = true and false;
$b = false && true;
var_dump($a, $b); // both of them must be false

echo "<h1>Error Control operator</h1> " . '<br>';
// $file = @fopen('style1.css', 'r') or die('File Not Found');
// $file = @fopen('style.css', 'r') or die('File Not Found');

// include('index.php');
// @(include('index1.php')) or die('No such file or directory');
$server = 'localhost';
$user = 'abrar';
$password = '123456789';
$db_name = 'database';
// @mysqli_connect($server, $user, $password, $db_name) or die('database refuse connection');


echo "<h1>String operators</h1> " . '<br>';
echo "<p>from examples above</p> " . '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
</body>
</html>