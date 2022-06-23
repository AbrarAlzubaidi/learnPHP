<?php

// echo dirname(__FILE__); // give you the full path of the file that include this statement.


// file_exists, is_writable, file_put_content 
$file_path = '../css/style.css';

if(file_exists($file_path)){
    if(is_writable($file_path)){
        $file_path_explode =explode("/", $file_path, 10);
        echo "<h1>yes (" . end($file_path_explode) . ") is exists and writable</h1>";
        file_put_contents($file_path, "h1{color:yellow}");
        echo '<link rel="stylesheet" href="../css/style.css">';
    }else{
        echo "<h1>no, not exist and not writable</h1>";
    }  
}

// mkdir, rmdir, is_dir
$user_name = "abrar";
if(is_dir("../" . $user_name)){ // same as: file_exists("../" . $user_name)
    echo "yes the directory is found and i will remove it" . "<br>";
    rmdir("../" . $user_name);
}else{
    echo "not found and i will create it" . "<br>";
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




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file system</title>
</head>
<body>
    
</body>
</html>