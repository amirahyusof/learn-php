<?php

require 'function.php';

// require 'router.php';

//connect to database
$dsn = 'mysql:host=localhost; port=3306; dbname=post;charset=utf8mb4';
new PDO($dsn);
$pdo = new PDO($dsn, 'root', '');

$pdo->prepare("select * from user");
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($user);


// class Post {
//     public $id;
//     public $title;
//     public $content;
//     public $author;
//     public $date;

//     public function_contruct($id, $title, $content, $date) {
//         $this->id = $id;
//         $this->title = $title;
//         $this->content = $content;
//         $this->date = $date;
//     }
// }

