<?php
$num1 = 1;
$num2 = 10;

if ($num1 == $num2){
    echo $num1 . ' is equal ' . $num2 . '<br>';
} elseif ($num1 > $num2){
    echo $num1 . ' is greater than ' . $num2. '<br>';
} else {
    echo $num1 . ' is less than ' . $num2. '<br>';
}

/*

an example: if your ticket is more than 500$ you will have a discount 20%
if your ticket between 500-300 your discount is 10%, otherwise there is no discount

*/

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

echo 2 ** 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
</body>
</html>