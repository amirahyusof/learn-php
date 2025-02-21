function fetchNewQuote() {
  fetch("random.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("quote").innerHTML = `"${data.quote}"`;
      document.getElementById("aspect").innerHTML = `(${data.aspect})`;
      document.getElementById("image").innerHTML = data.image;
    });
}