<?php
$pets = array('cats', 'dogs', 'hamisters', 'horses', 'ducks', 'gold fishes', 'canarys', 10);

//=======search============
echo "<h1>Search methods</h1>";
echo "<h2>in_array()</h2>";
$pet_name = 'dgs';
if (in_array($pet_name, $pets, true)){
    echo "($pet_name) exist";
}else{
    echo "($pet_name) not exist";
}

echo "<h2>array_search()</h2>";
$pet_name = 's';
if (array_search($pet_name, $pets, true)){
    echo "($pet_name) exist";
}else{
    echo "($pet_name) not exist";
}
// $index = array_search($pet_name, $pets, true); //* if pet_name not exist in the array in this example it will return the first value 
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
sort($pets, SORT_STRING);
echo '<pre>';
print_r($pets);
echo '</pre>';
//========end=============

//===========sort associative array=========
echo "<p> 🟡 icons's array after sorting sort the values (associative array)</p>";
asort($icons, SORT_STRING);
echo '<pre>';
print_r($icons);
echo '</pre>';

echo "<p> 🟡 icons's array after sorting sort the keys (associative array)</p>";
ksort($icons, SORT_STRING);
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

echo "<p> 🔵 pet's array after reversed</p>";
echo '<pre>';
print_r(array_reverse($pets, true));
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

/* error because in this case rand value is not an array it is a single value.
$rand = array_rand($arr);
echo "<p> ⚫ random array</p>";
print_r($rand);
*/

$rand = array_rand($arr,2);
echo "<p> ⚫ random array</p>";
print_r($rand);

echo "<p> ⚫ random element/s from an array</p>";
foreach($rand as $r){
    echo $arr[$r] . '<br>';
}
//========end=============

//=======unique array=====
$arr = [10, '10a', 20, '20b', 30, '30c', 10];
echo "<h1>unique array</h1>";
echo "<p> 🔲 unique array </p>";
echo '<pre>';
print_r($arr);
echo '</pre>';

$unique = array_unique($arr, SORT_STRING);
echo "<p> 🔲 uunique array</p>";
echo '<pre>';
print_r($unique);
echo '</pre>';

//========end=============