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

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("meineSlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000); // Change image every 2 seconds
}

var acc = document.getElementsByClassName("zugeordnet");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
