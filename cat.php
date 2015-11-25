<?php


$names = array("Karolina", "cat", "kuzinatra", "dog");
$index = rand(0, 3);
$name = $names[$index];


 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/theme.css">
  </head>
  <body>
    <h1>-=Hello, <?php echo $name; ?> !=-</h1>
  </body>
</html>
