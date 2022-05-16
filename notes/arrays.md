# arrays:
a linear data strucure to store multiple values. rather than declaring multiple variables, we can declare an array holds multiple values.

## array types:
1. indexed array
2. associative array
3. multidiminsional arary.

**syntax**
1. indexed array
```
$arr1 = [v1,v2,...];
OR
$arr1 = array(v1,v2,...);
```
2. associative array
```
$arr1 = [
    "v1" => "k1",
    "v2" => "k2",...
];
OR
$arr1 = array(
    "v1" => "k1",
    "v2" => "k2",...
);
```
3.  Multidimensional arary.
```
arr1 = [
    [v1,v2,...],
    [v1,v2,...],...
];
OR
arr1 = array(
    array(v1,v2,...),
    array(v1,v2,...),...
);
```


- you can access a value inside any indexed array by it's index.
- you can print all values inside any indexed array by loops (especially for and foreach loops), or by using `print_r() function`

**notes**

- in associative array key datatypes (if it is):
1. string is string:
    - `'abrar => 'a',` // abrar => a
2. integer is integer:
    - `10 => 'a' ` // 10 => a
    - `'10' => 'a'` // 10 => a
3. float is integer:
    - `10.5 => 'a'` // 10 => a
    - `10.1 => 'a'` // 10 => a
    - `10.9 => 'a'` // 10 => a
4. boolean is integer: 
    - `true => 'a'` // 1 => a
    - `false => 'a'` // 0 => a
5. null is nothing:
    - `null => 'a'` //  => a
6. key cant be array or object. otherwise value can be. 
7. key is unique, but value is not unique

*conclusion: key is dealing with its datatypes as either integer or string*

## array's function (most popular):
1. search functions:

a) **in_array(Needle, Haystack, Type);**

which:
- Needle: the value that you want to search about. (exist or not)
- Haystack: is the array that you want to search useing it.
- Type: if the search will be identical or not.Ex: 10 !== '10'  (by default its value is false)
- it will return 1 if it is Exist, otherwise NOTHING. so we can use it with if condition to check if a certain value is there or not.

Ex:
```
$pets = array('cats', 'dogs', 'hamisters', 'horses', 'ducks', 'gold fishes', 'canarys', 10);

if (in_array('dogs', $pets, true)){
    echo "exist";
}else{
    echo "not exist";
}
// will print exist
```

b) **array_search(Needle, Haystack, Type);**

same as in_array method. it returns the index of searched value.

c) **array_key_exists(Needle, Haystack);**

it is useful for associative array more than indexed array.

2. add item into array:

a) **array_push(array, value1, value2,...);**

adding items at the end of an array.

b) **array_unshift(array, value1, value2,...);**

adding items at the beginning of an array.

3. remove items:

a) **array_pop(array);**

remove the last item inside an array.

b) **array_shift(array);**

remove item from the beginning of an array.

4. sort indexed array

a)  - **sort(indexed_array, sort type);** // for indexed array
    - **rsort(indexed_array, sort type);** // sort in reverse order

which:
- sort type are: (by default its value SORT_REGULAR)
    - Ascending order (SORT_ASC) 
    - Descending Order. (SORT_DESC)
    - string order (SORT_STRING)

b)  - **asort(associative_array, sort type);** // for associative array
    - **arsort(associative_array, sort type);** // sort in reverse order

will sort the value not the key.

c)  - **ksort(associative_array, sort type);** // for associative array
    - **krsort(associative_array, sort type);** // sort in reverse order

will sort the key.

5. reverse array:

**array_reverse($array, preserve);**

which:
- it reversed the array without sorting.
- preserver: optinal by default it is false. what is benifit? keep the index as it
- ex:
```
// without preserve:
🔵 pet's array before reversed

Array
(
    [0] => 10
    [1] => canarys
    [2] => cats
    [3] => dogs
)
🔵 pet's array after reversed

Array
(
    [0] => dogs
    [1] => cats
    [2] => canarys
    [3] => 10
)

// with preserve:
🔵 pet's array before reversed

Array
(
    [0] => 10
    [1] => canarys
    [2] => cats
    [3] => dogs
)
🔵 pet's array after reversed

Array
(
    [3] => dogs
    [2] => cats
    [1] => canarys
    [0] => 10
)
```

6. shuffle array: **shuffle($array);**

- to mix array's elements (يخلط العناصر بشكل عشوائي)
- after each reload, each mix will be different from the previous mix.

7. array fill: **array_fill(start index, counts, value);**

which: 
- to fill the array with multi elements.
- counts: how many numbers/elements you want to fill the array.
- value: one value that filled the array. you can make it a single value like (5, -1, 'hello', 1.2, null,...) or you can add it as array (array(5, -1, 'hello', 1.2, null,...))
- if the start index is negative, it will start from it then jump to 0 index.
- you can add as value another array_fill function 
- ex:
```
array_fill(1, 10, array_fill(3, 4, 'hello'));
```

8. sum the elements inside array: **array_sum($array);**

which:
- if the array have concatinate from strings and integers, it will sum the integer numbers and ignore string values.
- **note** if the strings value are numbers, ex: '10' or '1a0', it will sum it and deal with it as if it is an integer number. for '1a0' it will consider it as 1.
- it is sutable for indexed and associative arrays. for associative array will sum the values not the keys.

9. array random: **array_rand($array, $num);**

which:
- it will get the index of the random element.
- $num: how many random numbers you want to get. (optional)
- if you add $num the out put will be an array of indexs 
```
$arr = [10, '10a', 20, '20b', 30, '30c'];
$rand = array_rand($arr, 3);
//for example: $rand = Array ( [0] => 1 [1] => 2 [2] => 4 )
```

10. unique array: **array_unique($array, $flag);**

which:
- removes duplicated elements inside an array. with its index.
- $flag: sort flag to sort the result