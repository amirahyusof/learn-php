<?php
include 'quotes.php';// import the list of anime quotes
header('Content-Type: application/json');// set response type to JSON
echo json_encode(getRandomQuote()); // convert PHP array to JSON and return it
?>