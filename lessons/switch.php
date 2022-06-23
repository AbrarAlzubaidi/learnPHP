<?php
function get_day($day){
    switch ($day) {
        case 1:
        case "sunday":
        case "Sunday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        case 2:
        case "monday":
        case "Monday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        case 3:
        case "tuesday":
        case "Tuesday":
            echo "<h3>your fav day" . $day . "</h3>";
            break;
        case 4:
        case "wednesday":
        case "Wednesday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        case 5:
        case "thursday":
        case "Thursday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        case 6:
        case "friday":
        case "Friday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        case 7:
        case "saturday":
        case "Saturday":
            echo "<h3>your fav day is " . $day . "</h3>";
            break;
        default:
            echo "a day from Mars :) OlAH 👽";
            break;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='get'>
        <label for="">type your fav day or a represent number:</label>
        <input type="text" name="day" id="">
        <input type="submit" value="submit">
        <?php
        if($_GET){
            $day = $_GET["day"];
            get_day($day);
        }
        ?>
    </form>
</body>
</html>