function cookieOk() {
  var now = new Date(); // Variable für aktuelles Datum
  var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
  // var deleteCookie = lifetime + 2592000000; // Macht den Cookie 30 Tage gültig.
  var deleteCookie = lifetime + 2;

  now.setTime(deleteCookie);
  var enddate = now.toUTCString();

  document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
  document.getElementById("cookie-popup").classList.add("hidden");
}

function circleklick() {
  var element = document.body
  element.classList.toggle("darkmode")
}

document.getElementById('aussen').style.opacity = '0.5'
window.addEventListener('load', () =>{
  if(confirm("Unsere Website verwendet Cookies um ausgewählte Daten über Sie zu sammeln. Bevor Sie fortfahren, unsere Website zu nutzen, müssen Sie den Datenschutzbestimmungen zustimmen"))
      document.getElementById('aussen').style.opacity = '1.0';
  document.getElementById('aussen').style.opacity = '1.0';
})
