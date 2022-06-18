# String Functions

## `explode()`: 

### what is it ??

it's like to split/divide a string with a certain separator. and return an array of strings.

### syntax

`explode(separator, string, limit);`

where:
- separator: is the boundary string.
- string: is your input string.
- limit (optional): a flag maybe its value (negative OR positive OR zero).

    a) If limit is positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.***except for number 1.***. 
    
    Ex:
    ```
    $full_name  = "your full name";
    $explode_full_name = explode(" ", $full_name, 10);

    Array
    (
        [0] => your
        [1] => full
        [2] => name
    )
    ```

    b) If the limit parameter is negative, all components except the last -limit are returned. Ex:
    ```
    $full_name  = "your full name";
    $explode_full_name = explode(" ", $full_name, -2);

   Array
    (
        [0] => your
    )
    ```

    c) If the limit parameter is zero, then this is treated as 1. it will return the original string without separating. 
    
    Ex:
    ```
    $full_name  = "your full name";
    $explode_full_name = explode(" ", $full_name, 0);

    Array
    (
        [0] => your full name
    )
    ```

## `implode()`

### what is it ??
the opposite of explode function. Join array elements and make it as a string. this will return a string.

implode has alias name called: join

### syntax
`implode(string $separator, array $array);`
`join(string $separator, array $array);`

which:
- separator (optional): is the boundary string. Defaults to an empty string.
- array: your array.

### Example:
```
$array = ['lukas', 'lukas@example.com', '+978541263'];
$s = join(",", $array);
echo $s ; //lukas,lukas@example.com,+978541263
```

## `str_split()`
### what is it ??
similar of explode function. convert a string to an array. each element inside the array is a single character.
### Syntax
`str_split(string $string, int $length = 1)`

which:
- array: your array
- length (optional): Maximum length of the chunk. start from 1. Default value is 1

### Example:
```
$chars = 'ahmad ali';
$chars_array = str_split($chars);
print_r($chars_array); //Array ( [0] => a [1] => h [2] => m [3] => a [4] => d [5] => 
                                    [6] => a [7] => l [8] => i )

$chars_array = str_split($chars, 3);
print_r($chars_array); // Array ( [0] => ahm [1] => ad [2] => ali )
```

## `chunk_split()`
### what is it ??
Split a string into smaller chunks. 
chunk of strings which means from string to small strings
### Syntax
`chunk_split(string $string, int $length , string $end)`

which:
- string: your string
- length (optional): Maximum length of the chunk. start from 1. Default value is 76
- end (optional): the line ending sequence. Default value is \r\n

### Example
```
$chars = 'ahmadali';
$chars_array = chunk_split($chars);
print($chars_array); // ahmadali

$chars = 'ahmadali';
$chars_array = chunk_split($chars, 2);
print($chars_array); // ah ma da li

$chars = 'ahmadali';
$chars_array = chunk_split($chars, 2, ',');
print($chars_array); // ah,ma,da,li,
```

## `str_replace()`
### What is it ??
Replace all occurrences of the search string with the replacement string. 

This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.
### Syntax
`str_replace(array|string $search, array|string $replace, string|array $subject, int &$count = null)`

which:
- search: the string/array that want to replace it.
- replace: the string/array that want to replace by.
- subject: the string/array that you search on.
- count (optional): number of replacement.
### Example
```
$str = 'ahmad,2000,issa,1000,fatima,2000,yosef,2600';
echo str_replace('ahmad', 'Done', $str); //Done,2000,issa,1000,fatima,2000,yosef,2600

echo str_replace(['ahmad','2000'], 'Done', $str); //Done,Done,issa,1000,fatima,Done,yosef,2600

echo str_replace(['ahmad','2000'], ['@', '@@'], $str); //@,@@,issa,1000,fatima,@@,yosef,2600
```

## `str_repeat()`
### What is it ??
repeat a string for numbers of times. 

This function returns a string that repeats number of times.
### Syntax
`str_repeat(string $string, int $times): string`

which:
- string: the string that want to repeat it.
- times: the number of how much you want to repeat the string.
- 0: not allowed as a value for number of times.

### Example
```
$str = '@@@';
echo str_repeat($str, 5); // @@@@@@@@@@@@@@@
```

## `str_shuffle()`
### What is it ??
mix string characters.

### Syntax
`str_shuffle(string $string): string`

which:
- string: the string that want to mix its element/char.
### Example
```
echo str_shuffle('abrar'); //barra
```

## `strlen()`
### What is it ??
get the length of a string.

### Syntax
`strlen(string $string): number`

which:
- string: the string that want to get how many char have.
### Example
```
echo strlen('(>w<)'); //5
```

## `addslashes()`
### What is it ??
Quote string with slashes.

Returns a string with backslashes added before characters that need to be escaped. These characters are:
- single quote (')
- double quote (")
- backslash (\)
- NUL (the NUL byte)

### Syntax
`addslashes(string $string): string`

which:
- string: the string that want to be escaped.

### important note:
Never use `addslashes` function to escape values you are going to send to `mysql`. keep in mind that single quote is not the only special character that can break your `sql` query. and quotes are the only thing which `addslashes` care.

### Example
```
$str_slash = "i' am blue :(  \ NULL";
echo '<p>'. addslashes($str_slash) . '</p>'; # i\' am blue :( \\ NULL
```

## `stripslashes()`
### What is it ??
remove the backslashes inside a string.

### Syntax
`stripslashes($string: string): string`

which:
- string: the string that want to remove from it slashes.
### Example
```
$str_slash = "i' am blue :(  \ NULL";
echo stripslashes($str_slash); //i' am blue :( NULL
```

## `strip_tags()`
### What is it ??
if allowed_tags not have any value it will remove html, xml and `php` tags from the string. and if it has a value if will keep those tags.

### Syntax
`strip_tags(string $string, array|string|null $allowed_tags = null): string`

which:
- string: the string that want to remove from it tags.
- allowed_tags: allowed tags that will stay in the string.
### Example
```
$str_slash = "i' am blue :(  \ NULL";
echo stripslashes($str_slash); //i' am blue :( NULL
```

## `strtolower(), strtoupper(), lcfirst(), ucfirst(), ucwords()` functions
### What is it ??
make string characters all of it in lower case or in upper case. or only the first word make the first char lower or upper. or each first char inside each word make it upper.

### Syntax
`strtolower(string $string): string`: lower case for all char's in the string.
`strtoupper(string $string): string`: upper case for all char's in the string.
`lcfirst(string $string): string`: lower case for only the first char inside the first word in the string.
`ucfirst(string $string): string`: upper case for only the first char inside the first word in the string.
`ucwords(string $string): string`: upper case only for the first char inside the  all words in the string.

which:
- string: the string that want to lower or upper it.
### Example
```
$str = "my name is ABRAR";
echo strtolower($str); //my name is abrar
echo strtoupper($str); //MY NAME IS ABRAR 
echo lcfirst($str); //my name is abrar
echo ucfirst($str); //MY name is abrar 
echo ucwors($str); //My Name Is Abrar 
```

## `trim()`
### What is it ??
remove the whitespaces and some special chars from the string.

**special chars**:

- " " (ASCII 32 (0x20)), an ordinary space.
- "\t" (ASCII 9 (0x09)), a tab.
- "\n" (ASCII 10 (0x0A)), a new line.
- "\r" (ASCII 13 (0x0D)), a carriage return.
- "\0" (ASCII 0 (0x00)), the NULL-byte.
- "\v" (ASCII 11 (0x0B)), a vertical tab.

### Syntax
`trim(string $string, string $characters = " \n\r\t\v\x00"): string`

which:
- string: the string that want to remove from it tags.
- characters: chars that you want to remove the default are above.
### Example
```
$str = "  my name is abrar  ";
echo var_dump($str); //20
$trimed_str = trim($str);
echo var_dump($trimed_str); //16
```

## `str_word_count()`
### What is it ??
return how many words inside the string.

### Syntax
`str_word_count(string $string, int $format = 0, ?string $characters = null): array|int`

which:
- string: the string that want to count its words.
- format: If the optional format is not specified, then the return value will be an integer representing the number of words found. In the event the format is specified, the return value will be an array, content of which is dependent on the format.
- characters: A list of additional characters which will be considered as 'word'.
- special chars and spaces are not counted.

**format option**

has 3 values:
- 0: return the value as integer represent.
- 1: return the value as array represent.
- 2: return the value as associative array represent [this word at any index?] => [the word].

### Example
```
$str = "my name is abrar";

echo str_word_count($str, 0); //4
echo print_r(str_word_count($str, 1)); //Array([0] => my, [1] => name, [2] => is, [3] => abrar)
echo print_r(str_word_count($str, 2)); //Array([0] => my, [3] => name, [8] => is, [11] => abrar)
```

## `parse_str()`
### What is it ??
split the link into array of link's data.

### Syntax
`parse_str(string $string, array &$result): void`

which:
- string: The input string.
- result: If the second parameter result is present, variables are stored in this variable as array elements instead.
### Example
```
$str = "name=abrar&age=24&favColor=blue";
parse_str($str, $res);
print_r($res); //Array([name] => abrar, [age] => 24, [favColor] => blue)
```

## `nl2br()`
### What is it ??
stands for (new line to break tag). Inserts HTML line breaks before all newlines in a string

### Syntax
`nl2br(string $string, bool $use_xhtml = true): string`

which:
- string: The input string.
- `use_xhtml`: Whether to use XHTML compatible line breaks or not. (its value if true: `<br/>` or false: `<br>`)
### Example
```
$str = "i am abrar \n nice to meet you";
echo nl2br($str);     //i am abrar
                        nice to meet you
```

## `strpos(), stripos(), strrpos(), strripos()` functions 
### What is it ??
- `strpos`:
    - Find the position of the first occurrence of a substring/char in a string.
    - case sensitive 
    - start searching from left
- `stripos`:
    - Find the position of the first occurrence of a substring/char in a string.
    - case insensitive 
    - start searching from left
- `strrpos`:
    - Find the position of the first occurrence of a substring/char in a string.
    - case sensitive 
    - start searching from right
- `strripos`:
    - Find the position of the first occurrence of a substring/char in a string.
    - case insensitive 
    - start searching from right

### Syntax
`strpos(string $haystack, string $needle, int $offset = 0): int|false`

which:
- haystack: The input string.
- needle: the substring or chars that you want to find its position.
- offset: If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.

### Example
```
$str = "i am abrar, nice to meet you";
$searched_chunk = "abrar";
$pos = strpos($str, $searched_chunk); 
echo $pos; //5
```

## `strstr(), stristr(), strchr()` functions
### What is it ??
`strstr/strchr`: Find the first occurrence of a string, (case sensitive).
`stristr`: Find the first occurrence of a string, (case intensive).
### Syntax
`strstr/strchr(string $haystack, string $needle, bool $before_needle = false): string|false`
`stristr(string $haystack, string $needle, bool $before_needle = false): string|false`

which:
- haystack: The input string that you want to search on.
- needle: the string you want to search for.
- before_needle: If true, `strstr()` returns the part of the haystack before the first occurrence of the needle (excluding the needle).
### Example
```
$str = "i am abrar, nice to meet you";
$searched_chunk = "abrar";
$new_str = strstr($str, $searched_chunk);
echo $searched_chunk; //abrar, nice to meet you
```

## `strcmp(), strncmp()` functions
### What is it ??
- `strcmp`: Binary safe **string comparison**.
- `strncmp`: Binary safe **string comparison** of the first n characters.

### Syntax
`strcmp(string $string1, string $string2): int`

which:
- string1: The first string.
- string2: the second string.

`strncmp(string $string1, string $string2, int $length): int`

which:
- string1: The first string.
- string2: the second string.
- length: how many number of characters you want to use it in comparison.

the output will be :
- equal 0: string1 equal string2.
- greater than 0: string1 larger than string2.
- less than 0: string1 less than string2.

### Example
```
$str1 = "i am abrar, nice to meet u";
$str2 = "i'm abrar, nice to meet you";
$comp = strcmp($str1, $str2);
if ($comp == 0){
  echo '<p> yes there are equal </p>';
}else if($comp > 0){
echo '<p> first string larger than second string </p>';
}else{
echo '<p> second string larger than first string </p>';
//output: second string larger than first string
```

## `strrev()`
### What is it ??
Reverse a string.

### Syntax
`strrev(string $string): int`

which:
- string: The string you want to reverse it.

### Example
```
$str = "EmmA";
$rev = strrev($str);
echo '<p> the string: '. $str .' </p>'; //EmmA
echo '<p> the reverse: '. $rev .' </p>'; //AmmE
```

## `substr()`
### What is it ??
Return part of a string.

### Syntax
`substr(string $string, int $offset, ?int $length = null): string`

which:
- string: The input string.
- offset: 
    - If offset is non-negative, the returned string will start at the offset in string, counting from zero. For instance, in the string `abcdef`, the character at position 0 is 'a', the character at position 2 is 'c', and so forth.
    - If offset is negative, the returned string will start at the offset from the end of string.
    - If string is less than offset characters long, an empty string will be returned.
- length: 
    - If length is given and is positive, the string returned will contain at most length characters beginning from offset (depending on the length of string).
    - If length is given and is negative, then that many characters will be removed from the end of string (after the start position has been calculated when a offset is negative).
    - If length is given and is 0, an empty string will be returned.
    - If length is omitted or null, the substring starting from offset until the end of the string will be returned.

### Example
```
$str = "EmmA";
$rev = strrev($str);
echo '<p> the string: '. $str .' </p>'; //EmmA
echo '<p> the reverse: '. $rev .' </p>'; //AmmE
```

## `substr_count()`
### What is it ??
Count the number of substring occurrences.

### Syntax
`substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = null): int`

which:
- haystack: The input string that you want to search on.
- needle: the string/char you want to search for.
- offset: The offset where to start counting. If the offset is negative, counting starts from the end of the string. 
- length: The maximum length after the specified offset to search for the substring. It outputs a warning if the offset plus the length is greater than the haystack length. A negative length counts from the end of haystack.

### Example
```
$str = "hello world, hello php";
$sub = substr_count($str, "hello", 0);
echo $sub; //2
```

## `substr_compair()`
### What is it ??
Binary safe comparison of two strings from an offset, up to length characters. compare the chars between each other: for example: H is less than O so it will print -1

### Syntax
```
substr_compare(
    string $haystack,
    string $needle,
    int $offset,
    ?int $length = null,
    bool $case_insensitive = false
): int
```

which:
- haystack: The input string that you want to search on.
- needle: the string/char you want to search for.
- offset: The offset where to start counting. If the offset is negative, counting starts from the end of the string. 
- length: The maximum length after the specified offset to search for the substring. It outputs a warning if the offset plus the length is greater than the haystack length. A negative length counts from the end of haystack.
- case_insensitive: if true case intensive, false case sensitive.

the output will be :
- equal 0: all chars equal each other.
- greater than 0: char in string1 less than char in string2.
- less than 0: char in string1 greater than char in string2.

```
// for example:
$str1 = "hello";
$str2 = "wello";
echo substr_compare($str, $str2, 0); // -1

$str1 = "hello";
$str2 = "ello";
echo substr_compare($str, $str2, 0); // 1
```

### Example
```
$str = "hello world, hello php";
$sub = substr_count($str, "hello", 0);
echo $sub; //2
```