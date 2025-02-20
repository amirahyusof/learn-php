<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Associative Array</title>
  </head>
  <body>
    <h1>Recommended Anime</h1>
    <?php 
      $anime = [
        [
          'title' => 'One Piece',
          'author' => 'Eiichiro Oda',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Naruto',
          'author' => 'Masashi Kishimoto',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Bleach',
          'author' => 'Tite Kubo',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Attack on Titan',
          'author' => 'Hajime Isayama',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'My Hero Academia',
          'author' => 'Kohei Horikoshi',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Demon Slayer',
          'author' => 'Koyoharu Gotouge',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Tokyo Ghoul',
          'author' => 'Sui Ishida',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Black Clover',
          'author' => 'Yūki Tabata',
          'genre' => 'Adventure'
        ],
        [
          'title' => 'Solo Leveling',
          'author' => 'Chugong',
          'genre' => 'Adventure'
        ]
      ]
    ?>
    <ul>
      <?php foreach ($anime as $list) : ?>
        <li>
          <?= $list['title'] ?>  
          by <?= $list['author'] ?>
          (Genre: <?= $list['genre'] ?>)
        </li>
      <?php endforeach; ?>
    
      <li>
        <?= $anime[3]['title'] ?>  <br>
        by <?= $anime[3]['author'] ?> <br>
        (Genre: <?= $anime[3]['genre'] ?>)
      </li>
    </ul>
  </body>
</html>