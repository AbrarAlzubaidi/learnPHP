<?php

$arr = [1,2,3,4,5,6,7,8,9,10];
// $arr = array(1,2,3,4,5,6,7,8,9,10);
$arrLength = count($arr);

for( $i = 0 ; $i < $arrLength ; $i++ ){
    echo $arr[$i] . '<br>';
}


?>

<h3>Choose Year</h3>
<select name="year" id="year">
<?php 
for( $i = 1990 ; $i <= 2022 ; $i++ ){
    echo "<option value='$i'>" . $i . "</option>";
}
?> 
    <!-- <option value="1990"> </option> -->
</select>