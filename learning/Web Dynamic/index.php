<?php

require 'function.php';
// require 'router.php';

//connect to our MySQL database and execute a query
require 'Database.php';

$db = new Database();
$post = $db->query("SELECT * FROM post");


foreach ($post as $posts){
  echo "<li>". $posts['title'] . "</li>";
}






//testing data connection
// try {
//     $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=post;charset=utf8mb4", "root", "");
//     echo "PDO MySQL is working!";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
