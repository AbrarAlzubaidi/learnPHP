# function
block of code to do the same thing multiple times in different places.

**syntax**

```
function identifier (){
    // block of code 
}
```
which:
1. identifier: is the name of the function.(be sure to follow the rules of naming).
2. functions have 4 types:
    - no parameter function as the syntax
    - with parameter function `function identifier ($param1, $param2, ...)`
    - with returning value as the syntax
    - no returning value inside the body of the function `return` keyword

## notes for getting the current year

1. date function:
```
$year = date("Y");
echo $year;
```
2. date object:
```
$currentDate = new DateTime();
$year = $currentDate->format("Y");
echo $year;
```
3. both ways if we use "Y"-> will return the year with 4 digits, to return it with lase 2 digit you can use "y".

**to convert from string value to integer value use `intval()`**

## notes for returnning function VS non-returnning function
1. var_dump in return function -> `string(13) "hello there!!"`. print its type and its value
2. var_dump in non-return function -> `hello there!!NULL`. print its value and its type always null
3. var_dump in empty function (empty body) or just empty `return;` or `return null;` -> `NULL` 
4. any code after return statement is a non-reachable code.(useless code)

### Notes:
1. 'Unkown' is a build-in default value for parameters in PHP