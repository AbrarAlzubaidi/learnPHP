# loops
**syntax**

```
for( initial value ; condition ; increment/decrement ){
    // code
}
```

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