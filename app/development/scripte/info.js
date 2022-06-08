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
