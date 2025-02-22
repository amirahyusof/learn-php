<?php
include 'quotes.php';
$random_quote = getRandomQuote();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girl Affirmation Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-700 text-white flex flex-col items-center justify-center min-h-screen">
    <div class="text-2xl font-semibold mb-4">
        <h1>Affirmation Generator</h1>
    </div>
    

    <div class="max-w-lg p-6 bg-pink-500 rounded-lg shadow-lg text-center">
        <img src="<?= $random_quote['image'] ?>" alt="<?= $random_quote['image'] ?>"
             class="w-32 h-32 mx-auto rounded-full border-4 border-pink-600 mb-4">
        
        <h2 class="text-xl font-semibold">"<?= $random_quote['quote'] ?>"</h2>
        <p class="mt-2 text-white">- In aspect of <?= $random_quote['aspect'] ?> -</p>

        <form method="POST">
            <button onclick="fetchNewQuote()" class="mt-4 px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg" name="new_quote">More Quote</button>
        </form>
    </div>

</body>
</html>
