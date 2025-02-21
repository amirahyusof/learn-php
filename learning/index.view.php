<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Lambda Function</title>
  </head>
  <body>
    <h1>Recommended Anime</h1>
    
    <ul>
      <!-- Filtered list of anime-->
      <?php foreach ($filteredAnime as $list) : ?>
        <li>
          <?= $list['title'] ?>  
          by <?= $list['author'] ?>
          (Genre: <?= $list['genre'] ?>)
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>