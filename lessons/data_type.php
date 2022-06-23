<?php
  $name = 'abrar'; // string datatype
  $age = 23; // integer datatype
  $avg = 2.5; // float datatype
  $flag = true; // boolean datatype
  $arr = array(
    "A" => 'v1',
    "B" => 'v2',
    "C" => 'v3',
  ); // array datatype
  $null_data = null; // you can write it NULL

  class Book {
    function Book(){
      $this->genre = 'Comedy';
    }
  }
  $obj_book = new Book(); // object datatype
  $resource1 = fopen('index.php', 'r'); // resource
  $resource2 = fopen('index2.php', 'r'); // resource
?>
  

<!DOCTYPE html>
<html>
  <head>
    <title>data type</title>
     <link rel="stylesheet" href="../css/style.css"/>
  </head>
  <body>
    <h2>using get type function: </h2>
    <ul> <?php
        echo '<li>'.$age.' is: '.gettype($age).'</li>';
        echo '<li>'.$name.' is: '.gettype($name).'</li>';
        echo '<li>'.$avg.' is: '.gettype($avg).'</li>';
        echo '<li>'.$flag.' is: '.gettype($flag).'</li>';
    ?>
    </ul>
    <h2>using variable dump function: </h2>
    <p> <?php
        echo var_dump($age).'<br/>';
        echo var_dump($name).'<br/>';
        echo var_dump($avg).'<br/>';
        echo var_dump($flag).'<br/>';
    ?>
    </p>
    <p> </p>
    <h1>arrays</h1>
    <p> using get type:...
      <?php
        echo gettype($arr);
      ?>
    </p>
    <p> using var dump:...
      <?php
        echo var_dump($arr);
      ?>
    </p>

    <h1>null/ NULL</h1>
    <p> using get type:...
      <?php
        echo gettype($null_data);
      ?>
    </p>
    <p> using var dump:...
      <?php
        echo var_dump($null_data);
      ?>
    </p>
    <p> print null datatype:...
      <?php
        echo $null_data;
      ?>
    </p>
    <h1>objects</h1>
    <p> using get type:...
      <?php
        echo gettype($obj_book);
      ?>
    </p>
    <p> using var dump:...
      <?php
        echo var_dump($obj_book);
      ?>
    </p>

    <h1>resource</h1>
    <p> using get type:...
      <?php
        echo gettype($resource1).'<br/>';
        echo gettype($resource2);
      ?>
    </p>
    <p> using var dump:...
      <?php
        echo var_dump($resource1).'<br/>';
        echo var_dump($resource2);
      ?>
    </p>
  </body>
</html>