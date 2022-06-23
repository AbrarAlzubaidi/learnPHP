<?php
$pets = array('cats', 'dogs', 'hamisters', 'horses', 'ducks', 'gold fishes', 'canarys', 10);

//=======search============
echo "<h1>Search methods</h1>";
//! in_array()
echo "<h2>in_array()</h2>";
$pet_name = 's';
// $s = in_array($pet_name, $pets, true); //* it will return 1 if value there else nothing
// echo $s;
if (in_array($pet_name, $pets, true)){
    echo "($pet_name) exist";
}else{
    echo "($pet_name) not exist";
}

//! array_search()
echo "<h2>array_search()</h2>";
$pet_name = 'do';
if (array_search($pet_name, $pets, true)){
    echo "($pet_name) exist";
}else{
    echo "($pet_name) not exist";
}
// $index = array_search($pet_name, $pets, true); 
// echo "value (" . $pets[$index] . ") is found in index $index ";


echo "<h2>array_key_exists()</h2>";

$icons = array(
    'alicorn'       => ' 🦄',
    'collision'     => '💥',
    'avocado'       => '🥑',
    'mug'           => '☕',
    'book'          => '📗'
);
$icon = 'alcorn';
if (array_key_exists($icon, $icons)){
    echo "the key ($icon) is exist and its value: " . $icons[$icon];
}else{
    echo "($icon) not exist";
}
//===========end=============

//=============add items===============
echo "<h1>add items methods</h1>";
echo "<p>🟢 pet's array before adding </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';

echo "<h2>array_push()</h2>";
array_push($pets, 'owl', 'dolphin', 'parrot');
echo "<p>🟢 pet's array after adding at the end </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';

echo "<h2>array_unshift()</h2>";
array_unshift($pets, 'kwala', 'rabbit');
echo "<p>🟢 pet's array after adding at the beginning </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';
//==============end==============

//=========remove items ========
echo "<h1>remove items methods</h1>";
echo "<p> 🔴 pet's array before removing anything </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';

echo "<h2>array_pop()</h2>";
$poped_value = array_pop($pets);
echo "<p> 🔴 pet's array after remove an item from the end </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';
echo "<p> the item that removed is: $poped_value </p>";


echo "<h2>array_shift()</h2>";
$shifted_value = array_shift($pets);
echo "<p> 🔴 pet's array after remove an item from the beginning </p>";
echo '<pre>';
print_r($pets);
echo '</pre>';
echo "<p> the item that removed is: $shifted_value </p>";
//========end=============

//===========sort indexed array=========
echo "<h1>sort an indexed array</h1>";
echo "<p> 🟡 pet's array before sorting</p>";
echo '<pre>';
print_r($pets);
echo '</pre>';


echo "<p> 🟡 pet's array after sorting (indexed array)</p>";
// rsort($pets, SORT_STRING);
sort($pets, SORT_STRING);
echo '<pre>';
print_r($pets);
echo '</pre>';
//========end=============

//===========sort associative array=========
echo "<p> 🟡 icons's array after sorting the values (associative array)</p>";
asort($icons, SORT_STRING);
// arsort($icons, SORT_STRING);
echo '<pre>';
print_r($icons);
echo '</pre>';

echo "<p> 🟡 icons's array after sorting the keys (associative array)</p>";
ksort($icons, SORT_STRING);
// krsort($icons, SORT_STRING);
echo '<pre>';
print_r($icons);
echo '</pre>';
//========end=============

//=======reverse array=====
echo "<h1>reverse an indexed array</h1>";
echo "<p> 🔵 pet's array before reversed</p>";
echo '<pre>';
print_r($pets);
echo '</pre>';

echo "<p> 🔵 pet's array after reversed with preserve</p>";
echo '<pre>';
print_r(array_reverse($pets, true));
echo '</pre>';

echo "<p> 🔵 pet's array after reversed without preserve</p>";
echo '<pre>';
print_r(array_reverse($pets));
echo '</pre>';
//========end=============

//=======shuffle array=====
echo "<h1>shuffle an indexed array</h1>";
echo "<p> 🟠 pet's array before shuffeled</p>";
echo '<pre>';
print_r($pets);
echo '</pre>';

shuffle($pets);
echo "<p> 🟠 pet's array after shuffeled</p>";
echo '<pre>';
print_r($pets);
echo '</pre>';
//========end=============

//=======fill array=====
$arr = [];
echo "<h1>fill an indexed array</h1>";
echo "<p> 🟣 an array before filled</p>";
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = array_fill(0, 5, 5);
// $arr = array_fill(-2, 5, 5);   //* start index as negative value
echo "<p> 🟣 an array after filled</p>";
echo '<pre>';
print_r($arr);
echo '</pre>';
//========end=============

//=======sum array=====
$arr = [10, '10', 20, '20', 30, '30'];
echo "<h1>summation an indexed array</h1>";
echo "<p> 🟤 an array before summation</p>";
echo '<pre>';
print_r($arr);
echo '</pre>';

$sum = array_sum($arr);
echo "<p> 🟤 summation of an array</p>";
echo $sum;
//========end=============

//=======random element from an array=====
$arr = [10, '10a', 20, '20b', 30, '30c'];
echo "<h1>random element from an indexed array</h1>";
echo "<p> ⚫ an array before getting random element</p>";
echo '<pre>';
print_r($arr);
echo '</pre>';

//error if you loop through the $rand because in this case rand value is not an array it is a single value.
/*
$rand = array_rand($arr);
echo "<p> ⚫ random array</p>";
print_r($rand);
echo '<br>';
print_r($arr[$rand]);
*/

$rand = array_rand($arr,2);
echo "<p> ⚫ random array</p>";
print_r($rand);

echo "<p> ⚫ random element/s from an array</p>";
foreach($rand as $r){
    echo $arr[$r] . '  ';
}
//========end=============

//=======unique array=====
$arr = [10, '10a', 20, '20b', 10, 20, 30, '30c'];
echo "<h1>unique array</h1>";
echo "<p> 🔲 the original array </p>";
echo '<pre>';
print_r($arr);
echo '</pre>';

$unique = array_unique($arr, SORT_STRING);
echo "<p> 🔲 unique array</p>";
echo '<pre>';
print_r($unique);
echo '</pre>';
//========end=============

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array's function</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
</body>
</html>