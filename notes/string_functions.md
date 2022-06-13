# String Functions

## Explode: 

### what is it ??

it's like to split/divide a string with a certain separator. and return an array of strings.

### syntax

`explode(separator, string, limit);`

where:
- separator: is the boundary string.
- string: is your input string.
- limit (optinal): a flag maybe its value (negative OR positive OR zero).

    a) If limit is positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.***except for number 1.***. Ex:
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

    c) If the limit parameter is zero, then this is treated as 1. it will return the original string without separating. Ex:
    ```
    $full_name  = "your full name";
    $explode_full_name = explode(" ", $full_name, 0);

    Array
    (
        [0] => your full name
    )
    ```

## Implode

### what is it ??
the oposite of explode function. Join array elements and make it as a string. this will return a string.

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

## Split String
### what is it ??
similar of explode function. convert a string to an array. each element inside the array is a singl character.
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

## Chunk Split
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

## Replace String
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

## Repeat String
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
## Shuffle String
### What is it ??
mix string charachters.

### Syntax
`str_shuffle(string $string): string`

which:
- string: the string that want to mix its element/char.
### Example
```
echo str_shuffle('abrar'); //barra
```

## length String
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

## AddSlashes String
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
Never use addslashes function to escape values you are going to send to mysql. keep in mind that single quote is not the only special character that can break your sql query. and quotes are the only thing which addslashes care.

### Example
```
$str_slash = "i' am blue :(  \ NULL";
echo '<p>'. addslashes($str_slash) . '</p>'; # i\' am blue :( \\ NULL
```

## strip slashes String
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

## strip tags String
### What is it ??
if allowed_tags not have any value it will remove html, xml and php tags from the string. and if it has a value if will keep those tags.

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

## Lower and upper String functions
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

## trim String
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

## string word count
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