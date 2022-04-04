<?php
$name        = 'abrar';
$age         = 23;
$name2       = 'name';
$page_title  = 'my first program';
$languages   = '<li>java</li>';
$languages  .= '<li>javascript</li>';
$languages  .= '<li>python</li>';
$languages  .= '<li>html</li>';
$about_me    = '<p>aaaaaaaaaaaaaaaaaanfhsfjhjfywefhskjdfndfhweiufh</p>';
$img = 'https://tse1.mm.bing.net/th?id=OIP.1Dyth-2BFxRq7IAuG0jK0wHaEK&pid=Api&P=0&w=287&h=161'
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php 
     echo $page_title;
     ?></title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h2>lessons</h2>
    <ul>
        <li><a href='data_type.php'>go to data type lesson</a></li>
        <li><a href='constants.php'>go to constants lesson</a></li>
        <li><a href='else_if.php'>go to else if lesson</a></li>
        <li><a href='operators.php'>go to operators lesson</a></li>
        <li><a href='loops.php'>go to loops lesson</a></li>
    </ul>
    <h1>Welcome into My First program in php</h1>
    <h3>
        <?php 
    echo 'my name is '.$name, ' & i am '.$age,' years old';
    echo '<br/>',$$name2
    ?> </h3>
    <h2> languages that i know </h2>
    <ul><?php echo $languages ?></ul>

    <h2> About me </h2>
    <?php echo $about_me; ?>
    <?php echo "<img src=$img/>"; ?>
    <br />
    <br />
    <br />

</body>

</html>