<?php
$anime_quotes = [
  [
      "quote" => "Power comes in response to a need, not a desire.",
      "character" => "Goku",
      "anime" => "Dragon Ball Z",
      "image" => "images/goku.jpeg"
  ],
  [
      "quote" => "Fear is not evil. It tells you what your weaknesses are.",
      "character" => "Gildarts Clive",
      "anime" => "Fairy Tail",
      "image" => "images/gildarts.jpeg"
  ],
  [
      "quote" => "A lesson without pain is meaningless.",
      "character" => "Edward Elric",
      "anime" => "Fullmetal Alchemist: Brotherhood",
      "image" => "images/edward.jpeg"
  ],
  [
      "quote" => "It's not the face that makes someone a monster, it's the choices they make with their lives.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "images/naruto_02.jpeg"
  ],
  [
        "quote" => "Inherited will, the swelling of the changing times, and the dreams of people. These are things that cannot be stopped.",
        "character" => "Gol D. Roger",
        "anime" => "One Piece",
        "image" => "images/golDRoger.jpeg"
  ],
  [
      "quote" => "If you don't like your destiny, don't accept it. Instead, have the courage to change it the way you want it to be.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "images/naruto_02.jpeg"
  ],
  [
      "quote" => "It's not the face that makes someone a monster, it's the choices they make with their lives.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "images/naruto_03.jpeg"
  ],
  [
    "quote" => "I don't want to conquer anything. I just think the guy with the most freedom in this whole ocean... is the Pirate King!",
    "character" => "Monkey D. Luffy",
    "anime" => "One Piece",
    "image" => "images/Luffy.jpeg"
  ],
  [
      "quote" => "If you don't like your destiny, don't accept it. Instead, have the courage to change it the way you want it to be.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "images/naruto_01.jpeg"
  ],
  [
        "quote" => "No matter how many people you may lose, you have no choice but to go on living.",
        "character" => "Tanjiro Kamado",
        "anime" => "Demon Slayer",
        "image" => "images/Tanjiro.jpeg"
],
    [
        "quote" => "If you can't do something, then don't. Focus on what you can do.",
        "character" => "Shinobu Kocho",
        "anime" => "Demon Slayer",
        "image" => "images/Shinobu.jpeg"
    ],
    [
        "quote" => "I alone enough to defeat them.",
        "character" => "Sung Jin-Woo",
        "anime" => "Solo Leveling",
        "image" => "images/JinWoo.jpeg"
    ],
    [
        "quote" => "I will become the strongest hunter in the world.",
        "character" => "Sung Jin-Woo",
        "anime" => "Solo Leveling",
        "image" => "images/JinWoo_01.jpeg"
    ]
];

function getRandomQuote() {
    global $anime_quotes;
    return $anime_quotes[array_rand($anime_quotes)];
}

