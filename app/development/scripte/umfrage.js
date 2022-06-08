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

var gedruecktA = false;
function aufklappenA(){
  var klapp = document.getElementById("infoAllgemein");
  if(!gedruecktA){
     klapp.style.display = 'block';
    gedruecktA = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktA = false;
  }
}

var gedruecktG = false;
function aufklappenG(){
  var klapp = document.getElementById("infoGerat");
  if(!gedruecktG){
     klapp.style.display = 'block';
    gedruecktG = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktG = false;
  }
}

var gedruecktSo = false;
function aufklappenSo(){
  var klapp = document.getElementById("infoSoftware");
  if(!gedruecktSo){
     klapp.style.display = 'block';
    gedruecktSo = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktSo = false;
  }
}

var gedruecktSi = false;
function aufklappenSi(){
  var klapp = document.getElementById("infoSicherheit");
  if(!gedruecktSi){
     klapp.style.display = 'block';
    gedruecktSi = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktSi = false;
  }
}

var gedruecktF = false;
function aufklappenF(){
  var klapp = document.getElementById("infoFazit");
  if(!gedruecktF){
     klapp.style.display = 'block';
    gedruecktF = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktF = false;
  }
}

var gedruecktAA = false;
function aufklappenAA(){
  var klapp = document.getElementById("infoAllgemeinA");
  if(!gedruecktAA){
     klapp.style.display = 'block';
    gedruecktAA = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktAA = false;
  }
}

var gedruecktGG = false;
function aufklappenGG(){
  var klapp = document.getElementById("infoGeratG");
  if(!gedruecktGG){
     klapp.style.display = 'block';
    gedruecktGG = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktG = false;
  }
}

var gedruecktSoSo = false;
function aufklappenSoSo(){
  var klapp = document.getElementById("infoSoftwareSo");
  if(!gedruecktSoSo){
     klapp.style.display = 'block';
    gedruecktSoSo = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktSoSo = false;
  }
}

var gedruecktSiSi = false;
function aufklappenSiSi(){
  var klapp = document.getElementById("infoSicherheitSi");
  if(!gedruecktSiSi){
     klapp.style.display = 'block';
    gedruecktSiSi = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktSiSi = false;
  }
}

var gedruecktFF = false;
function aufklappenFF(){
  var klapp = document.getElementById("infoFazitF");
  if(!gedruecktFF){
     klapp.style.display = 'block';
    gedruecktFF = true;
  }
  else{
    klapp.style.display = 'none';
    gedruecktFF = false;
  }
}

var breite = window.innerWidth;
if(breite<1100){
  document.getElementById('gross').style.display = 'none';
  document.getElementById('klein').style.display = 'block';
}
else{
  document.getElementById('gross').style.display = 'block';
  document.getElementById('klein').style.display = 'none';
}

window.addEventListener('resize', function(){
  breite = window.innerWidth
  if(breite<1100){
    document.getElementById('gross').style.display = 'none';
    document.getElementById('klein').style.display = 'block';
    document.getElementById('sidebar').style.display = 'none';
  }
  else{
    document.getElementById('gross').style.display = 'block';
    document.getElementById('klein').style.display = 'none';
    document.getElementById('sidebar').style.display = 'none';
  }
})

function openNav() {
  document.getElementById('klein').style.display = 'none'
  document.getElementById('sidebar').style.display = 'block';
}

function closeNav() {
  document.getElementById('klein').style.display = 'block'
  document.getElementById('sidebar').style.display = 'none';
}

function eingabeText(){
  var eingabe = document.getElementById('texteingabe')
    eingabe.innerText = ""
}

var desktop = false;
var laptop = false;
var smartphone = false;
var tablet = false;
var smarttv = false;
var smartwatch = false;
var spielekonsole = false;

function desktopCheck(){
  if(desktop){
    document.getElementById('a2').style.display = 'none'
    desktop = false;
  }
  else {
    document.getElementById('a2').style.display = 'block'
    desktop = true;
  }
}
function laptopCheck(){
  if(laptop){
    document.getElementById('a3').style.display = 'none'
    laptop = false;
  }
  else {
    document.getElementById('a3').style.display = 'block'
    laptop = true;
  }
}
function smartphoneCheck(){
  if(smartphone){
    document.getElementById('a4').style.display = 'none'
    smartphone = false;
  }
  else {
    document.getElementById('a4').style.display = 'block'
    smartphone = true;
  }
}
function tabletCheck(){
  if(tablet){
    document.getElementById('a5').style.display = 'none'
    tablet = false;
  }
  else {
    document.getElementById('a5').style.display = 'block'
    tablet = true;
  }
}
function smarttvCheck(){
  if(smarttv){
    document.getElementById('a6').style.display = 'none'
    smarttv = false;
  }
  else{
    document.getElementById('a6').style.display = 'block'
    smarttv = true;
  }
}
function smartwatchCheck(){
  if(smartwatch){
    document.getElementById('a7').style.display = 'none'
    smartwatch = false;
  }
  else {
    document.getElementById('a7').style.display = 'block'
    smartwatch = true;
  }
}
function spielekonsoleCheck(){
  if(spielekonsole){
    document.getElementById('a8').style.display = 'none'
    spielekonsole = false;
  }
  else {
    document.getElementById('a8').style.display = 'block'
    spielekonsole = true;
  }
}

function buttonNaechst(){

  window.localStorage.setItem('desktop', desktop);
  window.localStorage.setItem('laptop', laptop);
  window.localStorage.setItem('smartphone', smartphone);
  window.localStorage.setItem('tablet', tablet);
  window.localStorage.setItem('smarttv', smarttv);
  window.localStorage.setItem('smartwatch', smartwatch);
  window.localStorage.setItem('spielekonsole', spielekonsole);
}
