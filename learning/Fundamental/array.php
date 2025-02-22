<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Recommended Anime</h1>
    <?php 
      $anime = [
        'One Piece',
        'Naruto',
        'Bleach',
        'Attack on Titan',
        'My Hero Academia',
        'Demon Slayer',
        'Tokyo Ghoul',
        'Black Clover',
        'Solo Leveling'
      ]
    ?>
    <ul>
      <!-- --Basic syntax-- -->
      <?php foreach ($anime as $list) {
        echo "<li>$list</li>";
      } 
      ?>


      <!-- --Complex syntax-- -->
      <?php foreach ($anime as $list) : ?>
        <li><?= $list ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>