# file system
PHP can handle what we do using terminals in our device. for example: make a folder/file, open a folder/file, delete a folder/file, rename a folder/file, etc..

# file system functions:
[docs](https://www.php.net/manual/en/ref.filesystem.php)

## `file_exists`:
### what is it?
check if a certain file is exists somewhere (path).

### syntax
`file_exists(string $filename): bool`

where:
- filename: Path to the file or directory.

### example:
```
$file_name = '../css/style.css';

if(file_exists($file_name)){
    echo "yes (" . $file_name . ") is exists";
}
```

## `file_put_contents`:
### what is it?
add a content to a file if file exist else, it will create it and add the content.

### syntax
```
file_put_contents(
    string $filename,
    mixed $data,
    int $flags = 0,
    ?resource $context = null
): int|false
```

where:
- filename: Path to the file where to write the data.
- data: The data to write. Can be either a string, an array or a stream resource.

*If data is a stream resource, the remaining buffer of that stream will be copied to the specified file. This is similar with using stream_copy_to_stream().*

*You can also specify the data parameter as a single dimension array. This is equivalent to file_put_contents($filename, implode('', $array)).*

- flags: The value of flags can be any combination of the following flags, joined with the binary OR (|) operator.

![file put content function flag](../images/file_put_content_flags.PNG)

- context: A valid context resource created with `stream_context_create()`.

### example:
```
$file_name = '../css/style.css';

if(file_exists($file_name)){
    echo "yes (" . $file_name . ") is exists";
    file_put_contents($file_path, "h1{color:yellow}");

}else{
    file_put_contents($file_path, "h1{color:yellow}");
}
```

## `is_writable`:
### what is it?
Tells whether the filename is writable.
### syntax:
`is_writable(string $filename): bool`

where:
- filename: The filename being checked.
### example:
```
$file_path = '../css/style.css';

if(file_exists($file_path)){
    if(is_writable($file_path)){
        echo "<h1>yes (" . end($file_path_explode) . ") is exists and writable</h1>";
    }else{
        echo "<h1>no, not exist and not writable</h1>";
    }  
}
```

## `mkdir, rmdir, is_dir`:
### what is it?
- `mkdir:` Makes directory.
- `rmdir:` remove directory.
- `is_dir:` check if directory is exist or not. Tells whether the filename is a directory
### syntax:
1. `mkdir: `
```
mkdir(
    string $directory,
    int $permissions = 0777,
    bool $recursive = false,
    ?resource $context = null
): bool
```

where:
- directory: The directory path.
- permissions: The permissions are 0777 by default, which means the widest possible access.
**permissions is ignored on Windows.**
- recursive: Allows the creation of nested directories specified in the directory.
- context: A context stream resource.

2. `rmdir: `

```
rmdir(string $directory, ?resource $context = null): bool
```

where:
- directory: Path to the directory.
- context: A context stream resource.
**Attempts to remove the directory named by directory. The directory must be empty, and the relevant permissions must permit this.**

3. `is_dir:`
```
is_dir(string $filename): bool
```
where:
- filename: Path to the file. If filename is a relative filename, it will be checked relative to the current working directory. If filename is a symbolic or hard link then the link will be resolved and checked.
### example:
```
$user_name = "abrar";
if(is_dir("../" . $user_name)){ 
    echo "yes the directory is found and i will remove it" . "<br>";
    rmdir("../" . $user_name);
}else{
    echo "not found and i will create it" . "<br>";
    mkdir("../" . $user_name);
}
```