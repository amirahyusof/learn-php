<?php
$girl_quotes = [
[
    "quote" => "I am confident and capable in all that I do.",
    "aspect" => "life",
    "image" => ""
],
[
    "quote" => "I am surrounded by love and everything is fine.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "My family is my strength and my support.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am successful in my career and my work brings me joy.",
    "aspect" => "career",
    "image" => ""
],
[
    "quote" => "I am worthy of all the good things that happen in my life.",
    "aspect" => "life",
    "image" => ""
],
[
    "quote" => "I attract love and romance into my life with ease.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "I cherish the time I spend with my family.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am dedicated and focused on achieving my career goals.",
    "aspect" => "career",
    "image" => ""
],
[
    "quote" => "I am grateful for the love and support I receive from my family.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am open to new opportunities and experiences in my career.",
    "aspect" => "career",
    "image" => ""
],
[
    "quote" => "I am deserving of a loving and fulfilling relationship.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "I am proud of all my accomplishments and successes.",
    "aspect" => "life",
    "image" => ""
], 
[
    "quote" => "I am in control of my own happiness.",
    "aspect" => "life",
    "image" => ""
],
[
    "quote" => "I am worthy of love and respect.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "My family brings me joy and comfort.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am constantly growing and developing in my career.",
    "aspect" => "career",
    "image" => ""
],
[
    "quote" => "I am at peace with who I am as a person.",
    "aspect" => "life",
    "image" => ""
],
[
    "quote" => "I attract positive and loving relationships.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "I am grateful for the strong bond I have with my family.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am passionate about my career and it shows in my work.",
    "aspect" => "career",
    "image" => ""
],
[
    "quote" => "I am surrounded by positive and supportive people.",
    "aspect" => "life",
    "image" => ""
],
[
    "quote" => "I am open to receiving love in my life.",
    "aspect" => "love",
    "image" => ""
],
[
    "quote" => "I am thankful for the love and support of my family.",
    "aspect" => "family",
    "image" => ""
],
[
    "quote" => "I am confident in my abilities and skills in my career.",
    "aspect" => "career",
    "image" => ""
]
];

function getRandomQuote() {
    global $girl_quotes;
    return $girl_quotes[array_rand($girl_quotes)];
}

