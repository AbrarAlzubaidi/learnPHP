# arrays:
a linear data strucure to store multiple values. rather than declaring multiple variables, we declare an array holds multi values.

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
- you can print all values inside any indexed array by loops (especially for and foreach loops)

**notes**

- in associative array key datatype:
1. string is string:
    - `'abrar => 'a',` // abrar => a
2. integer in integer:
    - `10 => 'a' ` // 10 => a
    - `'10' => 'a'` // 10 => a
3. float is integer:
    - `10.5 => 'a'` // 10 => a
    - `10.1 => 'a'` // 10 => a
4. boolean is integer: 
    - `true => 'a'` // 1 => a
    - `false => 'a'` // 0 => a
5. null is nothing:
    - `null => 'a'` //  => a
6. key cant be array or object. 
7. key is unique, but value is not unique

*conclusion: key is dealing with data datatypes as either integer or string*

## array's function (most popular):
1. search functions:

a) in_array(Needle, Haystack, Type);

which:
- Needle: the value that you want to search about. (exist or not)
- Haystack: is the array that you want to search useing it.
- Type: if the search will be identical or not.Ex: 10 !== '10'  (by default its value is false)

Ex:
```
$pets = array('cats', 'dogs', 'hamisters', 'horses', 'ducks', 'gold fishes', 'canarys', 10);

if (in_array('dogs', $pets, true)){
    echo "exist";
}else{
    echo "not exist";
}
```

b) array_search(Needle, Haystack, Type);

same as in_array method. it returns the index of searched value.

c) array_key_exists(Needle, Haystack);

it is useful for associative array more than indexed array.

2. add item into array:

a) array_push(array, value1, value2,...);

adding items at the end of an array.

b) array_unshift(array, value1, value2,...);

adding items at the beginning of an array.

3. remove items:

a) array_pop(array);

remove the last item inside an array.

b) array_shift(array);

remove item from the beginning of an array.

4. sort indexed array

a) sort(indexed_array, sort type); // for indexed array

which:
- sort type are: (by default its value SORT_REGULAR)
    - Ascending order (SORT_ASC) 
    - Descending Order. (SORT_DESC)
    - string order (SORT_STRING)

b) asort(associative_array, sort type); // for associative array

will sort the value not the key.