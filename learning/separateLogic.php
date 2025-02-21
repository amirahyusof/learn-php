<!-- //separate logic of PHP from html -->
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
    ], 
    [
        'title' => 'Vinland Saga',
        'author' => 'Hajime Isayama',
        'genre' => 'Adventure'
    ]
  ];


  //Function to filter anime by author
  // function filter($data, $key, $value) {
  //   $filteredData = [];

  //   foreach ($data as $list) {
  //     if ($list[$key] === $value) {
  //       $filteredData[] = $list;
  //     }
  //   }
  //   return $filteredData;
  // }

  $filteredAnime = array_filter($anime, function($list) {
    return $list['title'] === 'Demon Slayer';
  });


  require 'index.view.php';