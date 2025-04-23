<?php

require 'function.php';
// require 'router.php';

//connect to our MySQL database
$dsn = "mysql:host=localhost; port=3306; dbname=demo;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', '');

$statement = $pdo->prepare("select * from post");
$statement->execute();

$post = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($post as $posts){
  echo "<li>". $posts['title'] . "</li>";
  echo "<li>". $posts['user_name'] . "</li>";
}






//testing data connection
// try {
//     $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=post;charset=utf8mb4", "root", "");
//     echo "PDO MySQL is working!";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
