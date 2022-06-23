# Control Structure
## include:
include used to include a page in your page/project instead of redefine it multi times.

for example: DB configuration file (to connect the website with your DB), for each page type the connection statements instead of doing this, type it in one file and include it in each file you need this configuration.

### include function type:-
- include once: include the file just one time.

## require:
same as include.

### require function type:-
- require once: include the file just one time.

### what is the different:
if you include a file that not in your project:
- using include: there is no error a warning and the script 
will continue the executing.
```
ex:
include "loopss.php"; // warning no such file.
echo "hello"; // hello
```
- using require: an error happen and the script will stop the executing.
```
ex:
require "loopss.php"; // error no such file.
echo "hello"; // no printed data
```