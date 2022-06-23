<?php

$arr = [1,2,3,4,5,6,7,8,9,10];
// $arr = array(1,2,3,4,5,6,7,8,9,10);
$arrLength = count($arr);

//! using foreach loop
/*
echo 'using foreach loop with index array' . '<br>';
foreach ( $arr as $a ){
    echo ($a+2)*3 . '<br>';
}

$arr2 = [
    'fname' => 'abrar',
    'fatherName' => 'nidal', 
    'grandName' => 'mousa', 
    'familyName' => 'alzubaidi'];
echo 'using foreach loop with associative array' . '<br>';
foreach ( $arr2 as $key => $val ){
    echo "$key: $val" . '<br>';
}
*/

//! using for loop
/*
echo 'using for loop' . '<br>';
for( $i = 0 ; $i < $arrLength ; $i++ ){
    echo $arr[$i] . '<br>';
}

 echo 'for loop advance' . '<br>';
$i = 1; // initialization
for(  ;  ;  ){
    if ( $i > 20 ){ // condition
        break;
    }
    echo $i . '<br>';
    $i++; // increment
}
*/

//! using while loop
/*
echo 'using while loop' . '<br>';
$i = 0;
while ($i < $arrLength){
    echo $arr[$i] . '<br>';
    $i++;
}

$i = 0;
while ($i < $arrLength):
    echo $arr[$i] . '<br>';
    $i++;
endwhile;
*/

//! using do-while loop
/* 
echo 'using do-while loop' . '<br>';
$i = 0;
do {
    echo $arr[$i] . '<br>';
    $i++;
} while ($i < $arrLength)

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h3>Choose Year</h3>
<select name="year" id="year">
<?php 
for( $i = 1990 ; $i <= 2022 ; $i++ ){
    echo "<option value='$i'>" . $i . "</option>";
}
?> 
</select>  
</body>
</html>



