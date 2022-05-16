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