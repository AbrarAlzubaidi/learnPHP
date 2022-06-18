<?php

// ======== explode string function ===========
echo '<h2>explode function</h2>';
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

// ======== implode string function ===========
echo '<h2>Implode function</h2>';
$full_name_as_a_string = implode(",", $explode_full_name);

echo '<p>' . $full_name_as_a_string . '</p>';

/*
//*     real example: if someone wants to show his name with his email and phone number
*       separated by comma ','
*/

$array = ['lukas', 'lukas@example.com', '+978541263'];
$s = join(",", $array);
echo '<p>' . $s . '</p>';

// ======== split string function ===========
echo '<h2>str_split function</h2>';
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


// ======== chunk split function ===========
echo '<h2>chunk_split function</h2>';
$chars = 'ahmadali';
$chars_array = chunk_split($chars);
echo "<div>";
print($chars_array);
echo "</div>";
$chars_array = chunk_split($chars, 2);
echo "<div>";
print_r($chars_array);
echo "</div>";

// ======== replacestring function ===========
echo '<h2>str_replace function</h2>';
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

// ========= repeat string function =========
echo '<h2>str_repeat function</h2>';
$repeate_string = ' \(≧∇≦)/ (╯°□°）╯    ';
echo '<p>'. str_repeat($repeate_string, 5) . '</p>';
// ========= END ===================

// =========== string shuffle function =========
echo '<h2>str_shuffle string function</h2>';
$shuffle_string = '(>w<)';
echo '<p>'. str_shuffle($shuffle_string) . '</p>';
// ========= END =================

// =========== string length function =========
echo '<h2>strlen function</h2>';
echo '<p>'. "(>w<) length is: " .  strlen('(>w<)') . '</p>';
// ========= END =================

// =========== add slashes function =========
echo '<h2>addslashes string function</h2>';
$str_slash = "i' am blue :(  \ NULL";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after add slash function *****  '. addslashes($str_slash) . ' *****</p>';
// ========= END =================

// =========== strip slashes function =========
echo '<h2>stripslashes string function</h2>';
$str_slash = "i' am blue :(  \ NULL";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after add slash function *****  '. addslashes($str_slash) . ' *****</p>';
echo '<p> after clean it from slashs by strip slashes function *****  '. stripslashes($str_slash) . ' *****</p>';
// ========= END =================

// =========== strip tags function =========
echo '<h2>strip_tags string function</h2>';
$str_slash = "go to <a href='https://google.com'> <b>Google</b></a> to Search about <span style='color:green'>anything</span>";
echo '<p> normal string is ***** '. $str_slash . ' *****</p>';
echo '<p> after implement strip tags without allowed_tags properity *****  '. strip_tags($str_slash) . ' *****</p>';
echo '<p> after implement strip tags with allowed_tags properity *****  '. strip_tags($str_slash, "<a><span>") . ' *****</p>';
// ========= END =================

// =========== lower & upper string functions =========
echo '<h2>strtolower, strtoupper, lcfirst, ucfirst and ucwords function</h2>';
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
echo '<h2>str_word_count function</h2>';
$str = "my name is abrar  / ++ ====";
echo '<p> normal string is ***** '. $str . ' ***** and its length (by words) is '. str_word_count($str, 0) .' </p>';
echo '<p> ▶ after implement str_word_count with format=1 ***** </p>';
echo '<pre>';
print_r(str_word_count($str, 1));
echo '<p> and its length (by words) is '. str_word_count($str) .' </p>';
echo '</pre>';
echo '<p> ▶ after implement str_word_count with format=2 ***** </p>';
echo '<pre>';
print_r(str_word_count($str, 2));
echo '<p> and its length (by words) is '. str_word_count($str) .' </p>';
echo '</pre>';
echo '<p> ▶ after implement str_word_count with format=1 and chars ***** </p>';
echo '<pre>';
print_r(str_word_count($str, 2, "/+="));
$size = str_word_count($str, 2, "/+=");
echo '<p> and its length (by words) is '. count($size) .' </p>';
echo '</pre>';
// ========= END =================

// =========== parse string function =========
echo '<h2>parse_str function</h2>';
$str = "name=abrar&age=24&favColor=blue";
echo '<p> normal string is ***** '. $str . ' *****</p>';
parse_str($str, $res);
echo '<pre>';
print_r($res);
echo "</pre>";
// ========= END =================

// =========== new line to break tag string function =========
echo '<h2>nl2br string function</h2>';
$str = "i am abrar \n nice to meet you";
echo '<p> normal string is ***** '. $str . ' *****</p>';
echo '<p> after adding break tag ***** '. nl2br($str) . ' *****</p>';
// ========= END =================

// =========== position string function =========
echo '<h2>strpos function</h2>';
$str = "i am abrar, nice to meet you";
echo '<p> normal string is ***** '. $str . ' *****</p>';
$searched_chunk = "abrar";
$pos = strpos($str, $searched_chunk);
echo '<p> searched string/char is: "'. $searched_chunk . '" </p>';
if ($pos){
  echo '<p> yes found in position '. $pos . '</p>';
}else{
echo '<p> not there </p>';
}
// ========= END =================

// =========== find string or chars from a string =========
echo '<h2>strstr function</h2>';
$str = "i am abrar, nice to meet you";
echo '<p> normal string is ***** '. $str . ' *****</p>';
$searched_chunk = "abrar";
$new_str = strstr($str, $searched_chunk);
// $new_str = strstr($str, $searched_chunk, true); if flag set to true it will give all the chars/strings before the searched string/char
echo '<p> searched string/char is: "'. $searched_chunk . '" and the output string is: '. $new_str .'</p>';

/* 
//* real example: if the DB has a column to stroe emails, and in some point you want to
*   retrieve the domin that at the emails so the code will be like this:
$str = "abrar@gmail.com";
$domain = strstr($str, "@", false); //@gmail.com
$domain = str_replace("@", "", $domain); //gmail.com   
$email_name = strstr($str, "@", true); //abrar   
*/
// ========= END =================

// =========== compair string functions =========
echo '<h2>strcmp, strncmp function</h2>';
$str1 = "i am abrar, nice to meet u";
$str2 = "i'm abrar, nice to meet you";
$comp = strcmp($str1, $str2);
// $comp = strncmp($str1, $str2, 5); //str2 larger than str1
echo '<p> first string: '. $str1 .' </p>';
echo '<p> second string: '. $str2 .' </p>';
if ($comp == 0){
  echo '<p> yes there are equal </p>';
}else if($comp > 0){
echo '<p> first string larger than second string </p>';
}else{
echo '<p> second string larger than first string </p>';
}
// ========= END =================


// =========== reverse string function =========
echo '<h2>strrev function</h2>';
$str = "EmmA";
$rev = strrev($str);
echo '<p> the string: '. $str .' </p>';
echo '<p> the reverse: '. $rev .' </p>';
// ========= END =================

// =========== sub string function =========
echo '<h2>substr function</h2>';
$str = "hello";
// $sub = substr($str, 0); //hello
$sub = substr($str, 0, -3); //he
// $sub = substr($str, 1); //ello
// $sub = substr($str, 1, 3); //ell
// $sub = substr($str, 6, 0); //empty string
// $sub = substr($str, -3, -1); //ll
// $sub = substr($str, -5); //from -5 to -∞ it will always return hello (the whole string)
echo '<p> the string: '. $str .' </p>';
echo '<p> the substring: '. $sub .' </p>';
// ========= END =================

// =========== sub string count function =========
echo '<h2>substr_count function</h2>';
$str = "hello world, hello php";
$sub = substr_count($str, "hello", 0); //2
// $sub = substr_count($str, "hello",0, -3); //2
// $sub = substr_count($str, "hello", 1); //1
// $sub = substr_count($str, "hello",1, 3); //0
// $sub = substr_count($str, "hello",22, 5); // ERROR!!! Invalid length value
// $sub = substr_count($str, "hello", -3, -1); //0
// $sub = substr_count($str,"hello", -22); //2
// $sub = substr_count($str,"hello", -23); //ERROR!!! Offset not contained in string 
echo '<p> the string: '. $str .' </p>';
echo '<p> how many count: '. $sub .' </p>';
// ========= END =================

// =========== sub string compair function =========
echo '<h2>substr_compair function</h2>';
$str1 = "hello world, hello php";
$str2 = "ello";
$sub_comp = substr_compare($str, $str2, 0); //first string larger than second string
// $sub_comp = substr_compare($str, "hello",0, -3); //ERROR!! The length must be greater than or equal to zero 
// $sub_comp = substr_compare($str, "hello", 1); //second string larger than first string
// $sub_comp = substr_compare($str, "hello",1, 3); //second string larger than first string
// $sub_comp = substr_compare($str, "hello",22, 5); // second string larger than first string
// $sub_comp = substr_compare($str, "hello", -3, 1); //first string larger than second string
// $sub_comp = substr_compare($str,"hello", 22); //second string larger than first string
// $sub_comp = substr_compare($str,"hello", 23); //ERROR!!! The start position cannot exceed initial string length
echo '<p> the first string: '. $str1 .' </p>';
echo '<p> the second string: '. $str2 .' </p>';
if ($sub_comp == 0){
  echo '<p> yes there are equal </p>';
}else if($sub_comp > 0){
echo '<p> first string larger than second string </p>';
}else{
echo '<p> second string larger than first string </p>';
}
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