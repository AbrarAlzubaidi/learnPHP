<?php

/*
function greeting()
{
    echo '<h2>from 0 parameter function</h2>';
    echo 'hello there!!' . '<br>';
}
*/

function greeting()
{
    return '<h2>from 0 parameter function</h2>' . 'hello there!!';
}

function add($a, $b)
{
    echo "<h2>from 2 parameter function which are $a , $b</h2>";
    echo  $a . "+" . $b . "= " . ($a + $b) . '<br>';
}

function counter($val = 'Unknown')
{
    echo "<h2>from 1 parameter function <span>counts from 0 till $val</span></h2>";
    if ($val == 'Unknown') {
        for ($i = 1; $i <= 10; $i++) {
            echo $i . ' ';
        }
    }
    for ($i = 1; $i <= $val; $i++) {
        echo $i . ' ';
    }
}


$currentDate = new DateTime();
$current_year = $currentDate->format("Y");

function generateYears($start = 1990, $end = 2022)
{
    echo "<h3>Choose Year</h3>";
    echo '<select name="year" id="year">';
    for ($year = $start; $year <= $end; $year++) {
        echo "<option value='$year'>" . $year . "</option>";
    }
    echo '</select>';
}

function ageInDays($age)
{
    echo "<h2>your agein days</h2>";
    echo "age in years is $age" . '<br>';
    echo "age in days is ";
    return $age * 365;
}

/*
Functions Advanced Example: getTecket function to theater if age if greater than 20 else there is no tecket
*/
function getTecket($name, $age)
{
    echo "<h2>get tecket example</h2>";
    $ticket = rand(5000, 7900);
    if ($age >= 20){
        return "Welcome Ms.$name you allowed to enter, here is your tecket number <span> $ticket </span>  and have fun. 😎";
    }else{
        return 'oooh, we are sorry your age is less than 20. 🙁';
    }
}

function frame($element){
    $frame = "<div class='nice-frame'>$element</div>";
    return $frame;
}

//* calling
echo greeting();
add(4, 8);
counter();
generateYears();
echo ageInDays(23);
$get_ticket =  getTecket('abrar',24);
$my_element1 = frame('hello');
$my_element2 = frame($get_ticket);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>advanced function</title>
    <style>
    .nice-frame{
        margin: auto;
        margin-top: 20px;
        border: 5px salmon double;
        text-align: center;
        padding: 20px;
        width: 20%;
        overflow: hidden;
    }
    .nice-frame span{
        color:crimson;
        font-weight: 800;
    }
</style>
</head>
<body>
    <?php echo $my_element1;
            echo $my_element2;
        
    ?>
    
</body>
</html>