function fetchNewQuote() {
  fetch("random.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("quote").innerHTML = `"${data.quote}"`;
      document.getElementById("character").innerHTML = `-${data.character} (${data.anime})`;
      document.getElementById("image").innerHTML = data.image;
    });
}