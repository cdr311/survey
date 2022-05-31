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
