<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Learning Conditional</title>
  <style>
    body{
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
      
    }
  </style>

</head>
<body>
  <?php
    $book = "Solo Leveling";
    $read = true;

    if($read){
      $message = "You read $book";
      
    }else {
      $message = "You not read $book";
    }
  ?>
  <h1>
    <?php
      echo $message;
    ?>
  </h1>
</body>

</html>