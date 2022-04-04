# get type
- get type function return just the type without any additiona information
- note: float datatype in gettype --> return double. but in var_dump --> return float
- array --> return just the type


# data types:
1. string
2. integer
3. float
4. boolean
5. array
6. object
7. null
8. resource

# var dump
- var dump function return the type and inside the parenthesees information about the type.
    for example:
    1. integer return --> int(the value of the variable), same as float
    2. string return --> string(how many characters in the string) "the value of the string variable"
- array --> `using var dump:... array(3) { ["A"]=> string(2) "v1" ["B"]=> string(2) "v2" ["C"]=> string(2) "v3" }`

## null datatype:
- empty value: means there is a value but an empty value
  
![print null value](assests/nullDatatype.png)

## resource
get anything out of the code 
returning datatype is --> boolean (not connected, not found, ..etc)
OR --> resource (connected, found, ..etc)
**examples**

1. when you want to connectwith database by function (mysqli_connect('domain','username','password','db_name'))
2. fopen function --> fopen('filename.extension','open type')