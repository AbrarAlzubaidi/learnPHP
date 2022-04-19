# variables
variable is a box of memory.

## variable syntax rules in php:
1. start with dolar sign ($).
2. after dolar sign, start with letter (A-Z/a-z) or under score (_).
3. not a keyword.
4. not contain any special characters.

## concatination
by using:
- dot (.): "hello"."world" (concatinate with all datatypes)
- plus sign (+): "hello"+"world" (concatinate with string datatype only)

## examples:
- Ex1:
```
$name = 'abrar';
$age = 23;
echo $name . $age; // will out --> abrar23
```

- Ex2:
```
echo 1.2; // float number will out --> 1.2
echo 1 . 2; // concatination will out --> 12
```

- Ex3:
```
$lang = 'javascript';
$lang = 'python';
echo $lang; // will out --> python
```

- Ex3:
```
$lang = 'javascript, ';
$lang .= 'python';
echo $lang; // will out --> javascript, python
```