# loops
1. for loop:

**Reason for use**

- loop through a block of code a specified number of times.

**syntax**
```
for( initial value ; condition ; increment/decrement ){
    // do something
}
```


**notes** 

- sometimes we can dispense one of its components: initial value, or condition, or increment/decrement
- Ex:
```
for( $i = 0 ; ; $i++ ){
    if ( $i < 10 ){
        echo $i . '<br>';
    }else{
        continue;
    }
}
```

2. while loop:

**Reason for use**

-  loops through a block of code if and as long as a specified condition is true.

**syntax**
```
initial value
while( condition ){
    // do something
    increment/ decrement
}
```


3. do-while loop:

**Reason for use**

- loops through a block of code once, and then repeats the loop as long as a special condition is true

**syntax**
```
initial value;
do{
    // do something
    increment/ decrement
}while( condition );

```

4. foreach:

**Reason for use**

- loops through a block of code for each element in an array.

**syntax1: for indexed arrays**
```
foreach ( $arr as $val){
    // do something
}

```

**syntax1: for associated arrays**
```
foreach ( $arr as $key => $val){
    // do something
}
```

**notes**

- $key, for index 0, 1, 2, 3, ...
- $val, the value for each index.
- Ex: 
```
$arr2 = [
    'fname' => 'abrar',
    'fatherName' => 'nidal', 
    'grandName' => 'mousa', 
    'familyName' => 'alzubaidi'];
echo 'using foreach loop with associative array' . '<br>';
foreach ( $arr2 as $key => $val ){
    echo "$key: $val" . '<br>';
}
```