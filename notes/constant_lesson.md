# constant variables
- syntax:
  - define(name, value, case-insensitive);
  - case-insensitive by default false
  - constant name is uppercase, why? programmers do it like this to make sure you can be able to distinguish(تمييز) between normal variable and constant variable.
  - cant re-define
  - global scope
  - example for build in constant in php:
    - `PHP_INT_MAX`
    - magic constants:
      - `__FILE__`: get the path of the current file 
      - `__DIR__`: get the path of the current director
      - `__LINE__`: get the number of the current line of code 
- another syntax:
  - const constant_name = value;