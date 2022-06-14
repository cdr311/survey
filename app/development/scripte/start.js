function cookieOk() {
  var now = new Date();
  var lifetime = now.getTime();
  var deleteCookie = lifetime + 2592000000;
  now.setTime(deleteCookie);
  var enddate = now.toUTCString();

  document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
  document.getElementById("cookie-popup").classList.add("hidden");
}

function circleklick() {
  var element = document.body
  element.classList.toggle("darkmode")
}

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
  setTimeout(carousel, 4000);
}

var acc = document.getElementsByClassName("zugeordnet");
var foot = document.getElementById('footing');
var i;
let k = 1000;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      k -= 130;
      foot.style['top'] = k + "px";
    } else {
      panel.style.display = "block";
      k += 130;
      foot.style['top'] = k + "px";
    }
  });
}
