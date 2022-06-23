# switch
The switch statement is similar to a series of IF statements on the same expression
## syntax:
```
switch (expression) {
    case value1:
    case value2: // this case is optional
        // do something
        break;
    ... 
    default:
    // default statements if the all cases not satisfied.
}
```
## example:
```
<?php
if ($day == 1) {
    echo "sunday";
} elseif ($day == 2) {
    echo "monday";
} elseif ($day == 3) {
    echo "tuesday";
}elseif ($day == 4) {
    echo "wednesday";
}elseif ($day == 5) {
    echo "thursday";
}elseif ($day == 6) {
    echo "friday";
}elseif ($day == 7) {
    echo "saturday";
}

switch ($day) {
    case 1:
        echo "sunday";
        break;
    case 2:
        echo "monday";
        break;
    case 3:
        echo "tuesday";
        break;
    case 4:
        echo "wenesday";
        break;
    case 5:
        echo "thursday";
        break;
    case 6:
        echo "friday";
        break;
    case 7:
        echo "saturday";
        break;
}
?>
```