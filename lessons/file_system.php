<?php

// echo dirname(__FILE__); // give you the full path of the file that include this statement.


// file_exists, is_writable, file_put_content 
echo "<h1 class='subject'>file_exist, is_writable, file_put_content</h1>";
$file_path = '../css/style.css';

if(file_exists($file_path)){
    if(is_writable($file_path)){
        $file_path_explode =explode("/", $file_path, 10);
        echo "<p id='is_exist'>yes (" . end($file_path_explode) . ") is exists and writable</p>";
        file_put_contents($file_path, "#is_exist{color:#CA3E6B; margin:auto;text-align: center;}");
        echo '<link rel="stylesheet" href="../css/style.css">';
    }else{
        echo "<h1>no, not exist and not writable</h1>";
    }  
}

// mkdir, rmdir, is_dir
echo "<h1 class='subject'>mkdir, rmdir, is_dir</h1>";
$user_name = "abrar";
if(is_dir("../" . $user_name)){ // same as: file_exists("../" . $user_name)
    echo "<p>yes the directory is found and i will remove it </p>" . "<br>";
    rmdir("../" . $user_name);
}else{
    echo "<p>not found and i will create it</p>" . "<br>";
    mkdir("../" . $user_name);
}

/*
* real example: check if a directory is exist, if it is, create a file inside it 
* and add a content in it, then check if the file is writable or not.
$directory_path = "../test";
$file_name = "text.txt";
if(is_dir($directory_path)){
    $file_full_path = $directory_path . "/" . $file_name;
    if(file_exists($file_full_path)){
        if(is_writable($file_full_path)){
            echo "file is exist and it is writable";
        }
    }else{
        file_put_contents($file_full_path, "testing real example");
    }
}else{
    mkdir($directory_path);
    file_put_contents($file_full_path, "testing real example");
}
*/

// dirname, __DIR__
echo "<h1 class='subject'>dirname</h1>";
$file_path = "C:/xampp/htdocs/learnPHP/images/file_put_content_flags.PNG";
// echo dirname($file_path, 2);
$dir_name = explode("/", dirname($file_path)); 
echo "<p> the first parent that hold this file is (" . end($dir_name) . ")</p>";

//basename, __FILE__
echo "<h1 class='subject'>basename</h1>";
$file_path = "C:/xampp/htdocs/learnPHP/images/file_put_content_flags.PNG";
echo "<p> without suffix (" . basename($file_path) . ")</p>";
echo "<p> with suffix (" . basename($file_path, ".PNG") . ")</p>";

/*
^ first training:
^ 1) check if the directory is exist or no. (done)
^ 2) if the directory is not exist create it. (done)
^ 3) assign it into variable to save it and re-use it when you want. (done)
^ 4) create a file inside this directory. then assign it into variable (done)
^ 5) change the mood of this file to read only. (done)
^ 6) then check if this file is writable. (done)
^ 7) change the mood of this file to be writable. (done)
^ 8) include this file.

& way 1) my thought:
$dir_path = "../training";
if(is_dir($dir_path)){
    echo "yes it is exist";
} else{
    echo "not exist and i will create it";
    mkdir($dir_path);
    $file_path = $dir_path . "/train.txt";
    file_put_contents($file_path, "text file" );
    chmod($file_path, 4);
    if(is_writable($file_path)){
        echo "<p> yes is writable</p>";
    } else{
        echo "<p> no is not writable and i will change it</p>";
        chmod($file_path, 2);
    }
    include $file_path;
}

& way 2: Mr. Osama way:
if(is_dir(__DIR__ . "/training")){
    echo "yes it is exist";
} else{
    echo "not exist and i will create it";
    mkdir(__DIR__ . "/training");
}
$dir_path = __DIR__ . "\\training\\"; // because he __dir__ will out the resullt as windows os backslash
$file_path = $dir_path . "\\train.txt";
file_put_contents($file_path, "text file" );
chmod($file_path, 0444);
if(is_writable($file_path)){
    echo "<p> yes is writable</p>";
} else{
    echo "<p> no is not writable and i will change it</p>";
    chmod($file_path, 0755);
}
include $file_path;

& way3: more logically, and with functions to reduce redundunt code.
function check_file($file_path){
    if(file_exists($file_path)){
        if(is_writable($file_path)){
            file_put_contents($file_path, "<p> exist and it is writable </p>" );
            chmod($file_path, 0444);
        } else{
            chmod($file_path, 0755);
            file_put_contents($file_path, "<p> exist and it was read only permission </p>" );
        }
    }else{
        file_put_contents($file_path, "creation now" );
        if(is_writable($file_path)){
            file_put_contents($file_path, "<p> NOT exist and it is writable </p>" );
            chmod($file_path, 0444);
        } else{
            chmod($file_path, 0755);
            file_put_contents($file_path, "<p> NOT exist and it was read only permission </p>" );
        }
    }
    include $file_path;
}

function check_dir($dir_path, $file_path){
    if(is_dir($dir_path)){
     echo "<p> yes directory is exist ... </p>";
     check_file($file_path);
 } else{
     echo "<p> not exist and i will create it ... </p>";
     mkdir($dir_path);
     check_file($file_path);
 } 
 }

$dir_path = "../training";
$file_path = $dir_path . "/train.txt";
echo "<h1 class='subject'>traning example</h1>";
check_dir($dir_path, $file_path);
*/

// file_put_content (more details):
file_put_contents("../test/abrar.txt", "first entry ... ");
file_put_contents("../test/abrar.txt", "\nsecond entry ... ", FILE_APPEND);
file_put_contents("../test/abrar.txt", "\nthird entry ... ", LOCK_EX);
file_put_contents("../test/abrar.txt", "\nforth entry ... ", FILE_APPEND);
/*
LOCK_EX: it will remove all thing before it, then add its content
? but what if it followed by a normal file_put_content ???
* it will remove its entry and add the last sentence, for ex:
    file_put_contents("../test/abrar.txt", "\nthird entry ... ", LOCK_EX);
    file_put_contents("../test/abrar.txt", "\nforth entry ... ");
    file_put_contents("../test/abrar.txt", "\nfifth entry ... ");
    file_put_contents("../test/abrar.txt", "\nsixth entry ... ");
* here will just add (the sixth entry ...)  to the file.
? what about followed by append file ???
* it will append all the followed append files.
    file_put_contents("../test/abrar.txt", "\nthird entry ... ", LOCK_EX);
    file_put_contents("../test/abrar.txt", "\nforth entry ... ", FILE_APPEND);
    file_put_contents("../test/abrar.txt", "\nfifth entry ... ", FILE_APPEND);
    file_put_contents("../test/abrar.txt", "\nsixth entry ... ", FILE_APPEND);
* here will just add 
* (third entry ... 
* forth entry ... 
* fifth entry ... 
* sixth entry ... )  
* to the file.
? what about if it is followed by another lock_ex, normal ???
* it will remove all things and add the last statement either it is normal or lock_ex
    file_put_contents("../test/abrar.txt", "\nthird entry ... ", LOCK_EX);
    file_put_contents("../test/abrar.txt", "\nforth entry ... ", LOCK_EX);
* here it will add (forth entry ... ) to the file. 
? what about if it is followed by another file_append ???
* it will add the content inside the lock_ex and append to it the content that inside the file_appened
    file_put_contents("../test/abrar.txt", "\nthird entry ... ", LOCK_EX);
    file_put_contents("../test/abrar.txt", "\nforth entry ... ", FILE_APPEND);
* here it will add 
* (third entry ... 
* forth entry ... )
* to the file 

! ofcourse for each case if it followed at the end with normal file_put_content it will re-write the content.
*/

// file_get_content:
// echo file_get_contents("https://lipsum.com/"); // it will get you the website content.
echo "<h1 class='subject'>file_get_cotent</h1>";
$file_content = file_get_contents("../test/text.txt");
$file_content_explode = explode(" ", $file_content);
$name_from_file = end($file_content_explode);
echo "<p>" . $name_from_file . "</p>";

// rename
$file = "../test/text3.txt";
rename($file, "../test/text_new.txt");
rename("../test/text_new.txt" , "../test/text3.txt");

// copy
$file = "../test/text2.txt";
copy($file, "../test/text2_copy.txt");
file_put_contents("../test/text2_copy.txt", "\n****a new copy****", FILE_APPEND);

/*
* a real example: if you want to save a copy from your file/s to back to it anytime, 
    * or if something happen and the system down at least you will have a copy from your 
    * system. this thing called (backUp)
    * although, you can make a backup with your fav extention, for ex: copy a .php file into a .txt file
        * or make it as .php.txt  
^ $original_file = __FILE__; // it will return the path of the current file that has this statement.

*/

// pathinfo
echo "<h1 class='subject'>pathinfo</h1>";
$path = "C:/xampp/htdocs/learnPHP/notes/arrays.md";
$info = pathinfo($path);
echo "<pre>";
print_r($info);
echo "</pre>";
echo "<p> ⚫ the directory: ". $info["dirname"] . "</p>";
echo "<p> ⚫ the basename: ". $info["basename"] . "</p>";
echo "<p> ⚫ the extension: ". $info["extension"] . "</p>";
echo "<p> ⚫ the filename: ". $info["filename"] . "</p>";

//unlink
echo "<h1 class='subject'>unlink</h1>";
if(file_exists("../test/abrar.txt")){
    unlink("../test/abrar.txt");
    echo "<p>deleted</p>";
}else{
    echo "<p>no such file</p>";
}

// scandir
echo "<h1 class='subject'>scandir</h1>";
$path = "../notes";
$directory_info = scandir($path);
echo "<pre>";
print_r($directory_info);
echo "</pre>";

// fopen
echo "<h1 class='subject'>fopen</h1>";
$path = "../notes/arrays.md";
$opend_file = fopen($path, "r+");
echo "<p>" . $opend_file . "</p>";
fclose($opend_file);

//fread
echo "<h1 class='subject'>fread</h1>";
$path = "../test/text2_copy.txt";
$opend_file = fopen($path, "r");
$file_size = filesize($path);
$file_content = fread($opend_file, $file_size);
echo "<p>". $file_content . "</p>";
fclose($opend_file);

// fwrite
echo "<h1 class='subject'>fwrite</h1>";
$path = "../test/text_write.txt";
$opend_file = fopen($path, "w");
$content = "ADD this content into the file by fwrite (w) mode";
fwrite($opend_file, $content);
$file_content = file_get_contents($path);
echo "<p>". $file_content . "</p>";
fclose($opend_file);

// fseek
echo "<h1 class='subject'>fseek</h1>";
$path = "../test/text_write.txt";
$opend_file = fopen($path, "r+");
$file_size = filesize($path);
$file_content = fread($opend_file, $file_size);
echo "<p> 🟠 original content is: <br/>". $file_content . "</p>";
fseek($opend_file, 34, SEEK_SET); // or fseek($opend_fike, -15, SEEK_END)
$content = "fseek at pos34 (r+) mode";
fwrite($opend_file, $content);
$file_content = file_get_contents($path);
echo "<p> 🟠 after seeking at pos: 34, the new content is: <br/>". $file_content . "</p>";
fclose($opend_file);

/*
^ second training:
^ 1) check if the directory called train2 is exist or not. (done)
^ 2) if the directory is not exist create it. (done)
^ 3) check if a file called train2.txt is exist, if it is not create it. (done)
^ 4) check if the file is writable or not. (done)
^ 5) if it is writable open the file.(done)
^ 6) add a content like this: (done)
        username: Abrar
        password: 123
^ 7) copy the file into another file called train2_copy.txt (done)
^ 7) print the content as a previous content (done)
^ 8) then update the username to: nidal and the password to nidal123 (done)
^ 9) print the new content. and print a successful message. * successfully update username and password * (done)
^ 10) close the file.

function write_in_the_file($file_path, $dic_path){
    $opend_file = fopen($file_path, "w+");
    fwrite($opend_file, "username: Abrar \npassword: 123");
    copy($file_path, $dic_path . "/train2_copy.txt");
    fclose($opend_file);
}
function read_prev_content($file_path){
    $opend_file = fopen($file_path, "r+");
    $file_size = filesize($file_path);
    $prev_content = fread($opend_file, $file_size);
    echo "<p class='content'>previous content is <br/>". $prev_content ."<br/></p>";
    return $opend_file;
}
function update_content($opend_file){
    fseek($opend_file, 10);
    fwrite($opend_file, "Nidal");
    fseek($opend_file, -3, SEEK_END);
    fwrite($opend_file, "Nidal123");
    fclose($opend_file);
}
function read_the_new_content($file_path){
    $opend_file = fopen($file_path, "r");
    $file_size = filesize($file_path);
    $new_content = fread($opend_file, $file_size);
    echo "<p class='content'>new content is <br/>". $new_content ."<br/></p>";
    fclose($opend_file);
}
function check_if_file_writable($dic_path, $file_path){
    if(is_writable($file_path)){
        write_in_the_file($file_path, $dic_path);
        $opend_file = read_prev_content($file_path);
        update_content($opend_file);
        clearstatcache();
        read_the_new_content($file_path);
        echo "<p>successfully update username and password</p>";
    } else{
        echo "<p>the file not writable Sorry, operation failed</p>";
    }
}
function check_if_file_exist($dic_path, $file_path){
    if(file_exists($file_path)){
        check_if_file_writable($dic_path, $file_path);
    } else{
        file_put_contents($file_path, "");
        check_if_file_writable($dic_path, $file_path);
    }
}
function train2(){
    echo "<h1 class='subject'>train 2</h1>";
    $dic_path = "../train2";
    $file_path = $dic_path . "/train2.txt";
    if(is_dir($dic_path)){
        check_if_file_exist($dic_path, $file_path);
    }else{
        mkdir($dic_path);
        check_if_file_exist($dic_path, $file_path);
    }
}
train2();

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/file_system.css">
    <title>file system</title>
</head>
<body>
    
</body>
</html>