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
echo '<table style="margin-bottom:10px">';
echo '<tr>';
echo '<th>Employee Name</th>';
echo '<th>Salary</th>';
echo '</tr>';
for($i = 0; $i<count($names); $i++){
  echo '<tr>';
  echo '<td>' . $names[$i] . '</td>';
  echo '<td>' . $salaries[$i] . '</td>';
  echo '</tr>';
}
echo '</table>';
// =============END ==============

// ========= str_repeat function =========
echo '<h2>repeat string function</h2>';
$repeate_string = ' \(≧∇≦)/ (╯°□°）╯    ';
echo '<p>'. str_repeat($repeate_string, 5) . '</p>';
// ========= END ===================

// =========== str_shuffle function =========
echo '<h2>shuffle string function</h2>';
$shuffle_string = '(>w<)';
echo '<p>'. str_shuffle($shuffle_string) . '</p>';
// ========= END =================

// =========== strlen function =========
echo '<h2>length string function</h2>';
echo '<p>'. "(>w<) length is: " .  strlen('(>w<)') . '</p>';
// ========= END =================

// =========== addslash function =========
echo '<h2>add slashes string function</h2>';
$str_slash = "i' am blue :(  \ NULL";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after add slash function *****  '. addslashes($str_slash) . ' *****</p>';
// ========= END =================

// =========== stripslashes function =========
echo '<h2>strip slashes string function</h2>';
$str_slash = "i' am blue :(  \ NULL";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after add slash function *****  '. addslashes($str_slash) . ' *****</p>';
echo '<p> after clean it from slashs by strip slashes function *****  '. stripslashes($str_slash) . ' *****</p>';
// ========= END =================

// =========== striptags function =========
echo '<h2>strip tags string function</h2>';
$str_slash = "go to <a href='https://google.com'> <b>Google</b></a> to Search about <span style='color:green'>anything</span>";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after implement strip tags without allowed_tags properity *****  '. strip_tags($str_slash) . ' *****</p>';
echo '<p> after implement strip tags with allowed_tags properity *****  '. strip_tags($str_slash, "<a><span>") . ' *****</p>';
// ========= END =================

// =========== strtolower, strtoupper, lcfirst, ucfirst and ucwords function =========
echo '<h2>lower & upper string functions</h2>';
$str = "my name is ABRAR";
echo '<p> normal string is ***** '. $str . ' *****</p>';
echo '<p> after implement lower string *****  '. strtolower($str) . ' *****</p>';
echo '<p> after implement upper string *****  '. strtoupper($str) . ' *****</p>';
echo '<p> after implement lower case first *****  '. lcfirst($str) . ' *****</p>';
echo '<p> after implement upper case first *****  '. ucfirst($str) . ' *****</p>';
echo '<p> after implement upper case words *****  '. ucwords($str) . ' *****</p>';
// ========= END =================

// =========== trim function =========
echo '<h2>trim string function</h2>';
$str = "my name is abrar";
echo '<p> normal string is ***** '. $str . ' ***** and its length '. strlen($str) .' </p>';
$str = "  my name is abrar     ";
echo '<p> after add 5 spaces, 2 at left and 3 at right *****  '. $str . ' ***** and its length '. strlen($str) .' </p>';
echo '<p> after implement trim *****  '. $str . ' ***** and its length '. strlen(trim($str)) .' </p>';
echo '<p> after implement left trim *****  '. $str . ' ***** and its length '. strlen(ltrim($str)) .' </p>';
echo '<p> after implement right trim *****  '. $str . ' ***** and its length '. strlen(rtrim($str)) .' </p>';
$trimed_str = trim($str, "my nar");
echo '<p> after implement trim with special chars *****  '. $trimed_str . ' ***** and its length '. strlen(trim($str, "y n")) .' </p>';
// ========= END =================

// =========== string word count function =========
echo '<h2>string word count function</h2>';
$str = "my name is abrar  / ++ ====";
echo '<p> normal string is ***** '. $str . ' ***** and its length (by words) is '. str_word_count($str, 0) .' </p>';
echo '<p> ▶ after implement str_word_count with format=1 ***** </p>';
echo '<pre>';
echo print_r(str_word_count($str, 1));
echo '<p> and its length (by words) is '. str_word_count($str) .' </p>';
echo '</pre>';
echo '<p> ▶ after implement str_word_count with format=2 ***** </p>';
echo '<pre>';
echo print_r(str_word_count($str, 2));
echo '<p> and its length (by words) is '. str_word_count($str) .' </p>';
echo '</pre>';
echo '<p> ▶ after implement str_word_count with format=1 and chars ***** </p>';
echo '<pre>';
echo print_r(str_word_count($str, 2, "/+="));
$size = str_word_count($str, 2, "/+=");
echo '<p> and its length (by words) is '. count($size) .' </p>';
echo '</pre>';
// ========= END =================
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

<!-- <form action="" method="get" class="form-example">
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
</form> -->
</body>
</html>