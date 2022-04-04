## Arithmatic Operators
| operator      | sign | Example |
| ------------- | ---- | ------- |
| add           | +    | $a + $b |
| substract     | -    | $a - $b |
| division      | /    | $a / $b |
| multiple      | *    | $a * $b |
| modul         | %    | $a % $b |
| Exponentiation| **   | $a ** $b|


----


## Assign Operator

| operator      | sign | Example |
| ------------- | ---- | ------- |
| assign        | =    | $a = 2  |


---


## Logical Operators

| operator      | sign      | Example  |
| ------------- | --------- | -------- |
| and           | && OR and | $a && $b | 
| or            |     OR or | $a or $b |  
| Xor           | xor       | $a xor $b |  
| not           | !         | !$a    |

**notes:**

- (and, &&) all conditions must be true to result true. EX: 
    - true && true -> true
    - false && true -> false
    - false && false -> false. 
- (or, ||) one condition have to be true to result true. EX: 
    - true || true -> true
    - false || true -> true
    - false || false -> false. 
- (xor) both condition are the same (true xor true)(false xor false) the result will be false. Ex:
    - true xor true -> false
    - false xor true -> true
    - false xor false -> true.
- (not) reverse the condition. EX: 
    - !true -> false
    - !false -> true. 
- && is better than and 
- || is better than or


---


## increment/decrement Operators

| operator      | sign      | Example  |
| ------------- | --------- | -------- |
| Pre-increment | ++        | ++$x     |
| Post-increment| ++        | $x++     |
| Pre-decrement | --        | --$x     |
| Post-decrement| --        | $x--     |


---


## Comparasion Operators

| operator           | sign       | Example   |
| ------------------ | ---------- | --------- |
| Equal              | ==         | $x == $y  |
| Identical          | ===        | $x === $y |
| Not equal          | != OR <>   | $x != $y  |
| Not identical      | !==        | $x !== $y |
| less than          | <          | $x < $y   |
| less than or equal | <=         | $x <= $y  |
| greater than       | >          | $x >  $y  |
| great than or equal| >=         | $x >=  $y |
| Spaceship          | <=>        | $x <=> $y |

```
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  
//************************

//EXAMPLE TO CHANGE SITE THEME USING COMPARISION OPERATORS 
<?php
$siteTheme = 'main'
if ($siteTheme == 'main'){
    $cssFile = 'main.css'
}else {
    $cssFile = 'style.css'
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $cssFile ?>">
</head>
<body>
<h1>this is <?php echo $cssFile ?> </h1>
    
</body>
</html>
```


---

## Error Control Operator

| operator           | sign       | Example   |
| ------------------ | ---------- | --------- |
| error control      | @          | @fopen('filepath', 'open mode');  |


---


## String Operators

| operator                 | sign       | Example   |
| ------------------------ | ---------- | --------- |
| Concatenation            | .          | $a . $b   |
| Concatenation assignment | .=         | $a .= $b  |