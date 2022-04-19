<?php
$pets = array('cats', 'dogs', 'hamisters', 'horses', 'ducks', 'gold fishes', 'canarys');

//* `echo $pets;` this way not working as we thought
//? to print array data as array (the whole array):

echo '<pre>';
print_r($pets);
echo '</pre>';

echo '<h1>indexed array</h1>';
echo '<h3>Pets In Our Shelter</h3>';
echo '<ul>';
foreach ($pets as $pet){
    echo '<li>' . $pet . '</li>';
}
// for ( $i = 0 ; $i < count($pets) ; $i++){
//     echo '<li>' . $pets[$i] . '</li>';
// }
echo '</ul>';

echo '<h1>associative array</h1>';
echo '<h3>awsome icons</h3>';
$icons = array(
    'alicorn'       => ' 🦄',
    'collision'     => '💥',
    'avocado'       => '🥑',
    'mug'           => '☕',
    'book'          => '📗'
);
$icons ['heart'] = '🧡';
echo '<ul>';
foreach ($icons as $icone_name => $icon){
    echo '<li>' . $icone_name . " ... " . $icon . '</li>';
}
echo '</ul>';

echo '<h1> Multidimensional array</h1>';
echo '<h3>food types</h3>';
$food = array(
    'Fruits' => array('orange', 'apples', 'banana'), 
    'Vegetables' => array('tomato', 'cucumber', 'peaper'), 
    'Meat' => array('pork', 'chicken', 'fish', 'beef'), 
    'Fast Food' => array('Burger', 'Pizza', 'Shawrma'));
echo '<ul>';
foreach ($food as $food_type => $food_name ){
    echo "<p><b>$food_type</b></p>" ;
    foreach( $food_name as $f){
        echo '<li style="margin-left:40px">' . $f .'</li>';
    }
}
echo '</ul>';