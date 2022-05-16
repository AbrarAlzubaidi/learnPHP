<?php

// ======== explode function ===========
echo '<h2>Explode string function</h2>';
$full_name  = "abrar nidal mousa alzubaidi";
$explode_full_name = explode(" ", $full_name, 0);
echo '<pre>';
print_r($explode_full_name);
echo '</pre>';

/*
//*     real example: if someone has to enter files name like this:
*       file1, file2,...
*       and you have to separate them and each file you have to use it somewhere in your code
*       for this example the files are a css files
*/

$files_name = 'header,footer,about_us,card';
$files_name_array = explode(',', $files_name);
echo '<pre>';
print_r($files_name_array);
echo '</pre>';

foreach($files_name_array as $file){
    echo '<link rel="stylesheet"' .  "href='css/" . $file . ".css'>";
}

// ======== implode function ===========
echo '<h2>Implode string function</h2>';
$full_name_as_a_string = implode(",", $explode_full_name);

echo '<p>' . $full_name_as_a_string . '</p>';

/*
//*     real example: if someone wants to show his name with his email and phone number
*       separated by comma ','
*/

$array = ['lukas', 'lukas@example.com', '+978541263'];
$s = join(",", $array);
echo '<p>' . $s . '</p>';

// ======== str_split function ===========
echo '<h2>split string function</h2>';
$chars = 'ahmad ali';
$chars_array = str_split($chars);
echo "<pre>";
print_r($chars_array);
echo "</pre>";
// $s = join(',', $chars_array);
// echo $s;
$chars_array = str_split($chars, 3);
echo "<pre>";
print_r($chars_array);
echo "</pre>";


// ======== chunk_split function ===========
echo '<h2>chunk split string function</h2>';
$chars = 'ahmadali';
$chars_array = chunk_split($chars);
echo "<div>";
print($chars_array);
echo "</div>";
$chars_array = chunk_split($chars, 2);
echo "<div>";
print_r($chars_array);
echo "</div>";

// ======== str_replace function ===========
echo '<h2>replace string function</h2>';
$str = 'ahmad,2000,issa,1000,fatima,2050,yosef,2600';
// echo str_replace(['ahmad','2000'], 'Done', $str);
// echo str_replace(['ahmad','2000'], ['@', '@@'], $str);
$arr = explode(',', $str);
$names = [];
$salaries = [];

for($i = 0; $i<count($arr); $i++){
    if($i%2 == 0){
        array_push($names, $arr[$i]);
    }else{
        array_push($salaries, $arr[$i]);
    }
}
function get_new_name($names){
    $old_name = $_GET['oldName'];
    $new_name = $_GET['newName'];
    if(in_array($old_name, $names, true)){
        $new_names = str_replace($old_name, $new_name, $names);
        $new_arr = render_new_names($new_names);
        return $new_arr;
    }else{
        echo '<div class="alert">';
        echo '<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>';
        echo '<strong>Error!</strong> the old name is not on the system.';
        echo '</div>';
    }
}
function render_new_names($names){
    return $names;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string's functions</title>
    <?php 
        foreach($files_name_array as $file){
            echo '<link rel="stylesheet"' .  "href='css/" . $file . ".css'>";
        }
    ?>
</head>
<body>
<table>
  <tr>
    <th>Employee Name</th>
    <th>Salary</th>
  </tr>
  <?php
    $new_arr = get_new_name($names);
  if($names != $new_arr){
      for($i = 0; $i<count($names); $i++){
        echo '<tr>';
        echo '<td>' . $new_arr[$i] . '</td>';
        echo '<td>' . $salaries[$i] . '</td>';
        echo '</tr>';
      }
  }else{
      for($i = 0; $i<count($names); $i++){
        echo '<tr>';
        echo '<td>' . $names[$i] . '</td>';
        echo '<td>' . $salaries[$i] . '</td>';
        echo '</tr>';
  }
}
  ?>
 
</table>
<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="oldName">Enter the old name: </label>
    <input type="text" name="oldName" id="old-name" required >
  </div>
  <div class="form-example">
    <label for="newName">Enter the new name: </label>
    <input type="text" name="newName" id="new-name" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Change">
  </div>
  <?php 
    
  ?>
</form>
</body>
</html>