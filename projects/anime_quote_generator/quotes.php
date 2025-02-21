<?php
$anime_quotes = [
  [
      "quote" => "Power comes in response to a need, not a desire.",
      "character" => "Goku",
      "anime" => "Dragon Ball Z",
      "image" => "https://upload.wikimedia.org/wikipedia/en/2/2c/Goku_Dragon_Ball_Z.png"
  ],
  [
      "quote" => "Fear is not evil. It tells you what your weaknesses are.",
      "character" => "Gildarts Clive",
      "anime" => "Fairy Tail",
      "image" => "https://upload.wikimedia.org/wikipedia/en/4/4b/Fairy_Tail_Gildarts.png"
  ],
  [
      "quote" => "A lesson without pain is meaningless.",
      "character" => "Edward Elric",
      "anime" => "Fullmetal Alchemist: Brotherhood",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/9d/Edward_Elric.png"
  ],
  [
      "quote" => "It's not the face that makes someone a monster, it's the choices they make with their lives.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/99/Naruto_Uzumaki.png"
  ],
  [
      "quote" => "The world's not perfect, but it's there for us trying the best it can. That's what makes it so damn beautiful.",
      "character" => "Roy Mustang",
      "anime" => "Fullmetal Alchemist: Brotherhood",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/9a/Roy_Mustang_FMA.jpg"
  ],
  [
      "quote" => "If you don't like your destiny, don't accept it. Instead, have the courage to change it the way you want it to be.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/99/Naruto_Uzumaki.png"
  ],
  [
      "quote" => "It's not the face that makes someone a monster, it's the choices they make with their lives.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/99/Naruto_Uzumaki.png"
  ],
  [
      "quote" => "The world's not perfect, but it's there for us trying the best it can. That's what makes it so damn beautiful.",
      "character" => "Roy Mustang",
      "anime" => "Fullmetal Alchemist: Brotherhood",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/9a/Roy_Mustang_FMA.jpg"
  ],
  [
      "quote" => "If you don't like your destiny, don't accept it. Instead, have the courage to change it the way you want it to be.",
      "character" => "Naruto Uzumaki",
      "anime" => "Naruto Shippuden",
      "image" => "https://upload.wikimedia.org/wikipedia/en/9/99/Naruto_Uzumaki.png"
  ],
  [
    [
        "quote" => "No matter how many people you may lose, you have no choice but to go on living.",
        "character" => "Tanjiro Kamado",
        "anime" => "Demon Slayer",
        "image" => "https://upload.wikimedia.org/wikipedia/en/9/9a/Tanjiro_Kamado.png"
    ],
    [
        "quote" => "If you can't do something, then don't. Focus on what you can do.",
        "character" => "Shinobu Kocho",
        "anime" => "Demon Slayer",
        "image" => "https://upload.wikimedia.org/wikipedia/en/1/1e/Shinobu_Kocho.png"
    ],
    [
        "quote" => "I alone am enough to defeat them.",
        "character" => "Sung Jin-Woo",
        "anime" => "Solo Leveling",
        "image" => "https://upload.wikimedia.org/wikipedia/en/8/8e/Solo_Leveling_Sung_Jin-Woo.png"
    ],
    [
        "quote" => "I will become the strongest hunter in the world.",
        "character" => "Sung Jin-Woo",
        "anime" => "Solo Leveling",
        "image" => "https://upload.wikimedia.org/wikipedia/en/8/8e/Solo_Leveling_Sung_Jin-Woo.png"
    ]
  ]
];

function getRandomQuote() {
    global $anime_quotes;
    return $anime_quotes[array_rand($anime_quotes)];
}

