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

echo "<p> 🟡 icons's array after sorting (associative array)</p>";
asort($icons, SORT_STRING);
echo '<pre>';
print_r($icons);
echo '</pre>';