<?php
include 'quotes.php';
$random_quote = getRandomQuote();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Quote Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

    <div class="max-w-lg p-6 bg-gray-800 rounded-lg shadow-lg text-center">
        <img src="<?= $random_quote['image'] ?>" alt="<?= $random_quote['character'] ?>"
             class="w-32 h-32 mx-auto rounded-full border-4 border-gray-700 mb-4">
        
        <h2 class="text-xl font-semibold">"<?= $random_quote['quote'] ?>"</h2>
        <p class="mt-2 text-gray-400">- <?= $random_quote['character'] ?> (<?= $random_quote['anime'] ?>)</p>

        <form method="POST">
            <button onclick="fetchNewQuote()" class="mt-4 px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg" name="new_quote">New Quote</button>
        </form>
    </div>

</body>
</html>
