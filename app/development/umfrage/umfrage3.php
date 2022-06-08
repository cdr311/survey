<?php

  require_once 'sessionfunctions.php';

  session_start();
  saveIntoSessionVariablesPage3();
  printSessionVariables();

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Matthias Seitz" />
  <meta name="keywords" content="Umfrage, Digitale Nutzung" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten" />

  <link rel="stylesheet" href="../stylesheets/umfrage3.css" />
  <link rel="icon" type="image/x-icon" href="../images/fragezeichen.png" />
  <script src="changePage.js"></script>

  <title>Umfrage zur Nutzung digitaler Geräte</title>

</head>

<body id="aussen">

  <?php
if( isset($_COOKIE['setCookieHinweis']) ) {
  $showPopup = false;
} else {
  $showPopup = true;
}
?>

<?php if($showPopup) { ?>
<div id="cookie-popup">
  <div class="hinweis">
    <p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
  </div>
  <span class="more">
    <a href="https://www.gesetze-bayern.de/Content/Document/BayDSG/" id="abstand1">Details</a>
  </span>
  <button onclick='cookieOk()' id="abstand2">Einverstanden</button>
</div>
<?php  }; ?>

  <!--die obere Auswahlleiste-->
  <header>
    <article>
      <section class="links">
        <div>
          <div><img src="../images/statistik.png" alt="Statistikbild" width="110px" height="50px" title="iStock" /></div>
      </section>
      <section class="mitte">
        <div class="ueberschrift">Umfrage</div>

      </section>
      <section class="rechts">
        <table>
          <th><a href="umfrage1.php" title="Umfrage" class="unter"><span>Umfrage</span></a></th>
          <th><a href="../infopage/index.php" title="Über Uns" class="unter"><span>Infos</span></a></th>
          <th><a href="../linkpage/index.php" title="Links" class="unter"><span>Links</span></a></th>
          <th><a href="../startpage/index.php" title="Home" class="unter"><span>Home</span></a></th>
          <th>
            <button onclick="circleklick()" title="Moduswechsel">M</button>
          </th>
        </table>
      </section>
    </article>
  </header>

  <!-- im Menü dann die übersicht machen welche thematik und die Fragen dann darunter mit DropDown bzw Liste darunter -->
  <menu id="gross">
    <div class="sidenav">
      <p class="gliederung" id="kasten"><b>Übersicht:</b></p>
      <ol type="1">
        <li id="kasten"><button type="button" name="button" onclick="aufklappenA()" class="dropdown drueber" id="kasten">Allgemein</button></li>
        <ul id="infoAllgemein" class="ausklappbar">
          <li class="drop"><span class="droppen">Geschlecht</span></li>
          <li class="drop"><span class="droppen">Alter</span></li>
          <li class="drop"><span class="droppen">Beruf</span></li>
          <li class="drop"><span class="droppen">Familienstand</span></li>
          <li class="drop"><span class="droppen">Bildung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenG()" class="dropdown drueber" id="kasten">Gerätenutzung</button></li>
        <ul id="infoGerat" class="ausklappbar">
          <li class="drop"><span class="droppen">Geräte</span></li>
          <li class="drop"><span class="droppen">Zweck&Nutzung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenSo()" class="dropdown drueber" id="kasten">Software</button></li>
        <ul id="infoSoftware" class="ausklappbar">
          <li class="drop"><span class="droppen">Betriebssystem</span></li>
          <li class="drop"><span class="droppen">Browser</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenSi()" class="dropdown drueber" id="kasten">Sicherheit</button></li>
        <ul id="infoSicherheit" class="ausklappbar">
          <li class="drop"><span class="droppen">E-Mail</span></li>
          <li class="drop"><span class="droppen">Verschlüsselung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenF()" class="dropdown drueber" id="kasten">Fazit</button></li>
        <ul id="infoFazit" class="ausklappbar">
          <li class="drop"><span class="droppen">Bewertung</span></li>
          <li class="drop"><span class="droppen">Feedback</span></li>
        </ul>
      </ol>
    </div>
  </menu>

  <nav id="klein">
    <span class="kleiner" onclick="openNav()">&#9776;</span>
  </nav>

  <aside id="sidebar">
    <div class="sidenav2">
      <p><button onclick="closeNav()" class="Xrechts"><b>X</b></button></p>
      <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
      <p class="gliederung" id="kasten"><b>Übersicht:</b></p>
      <ol type="1">
        <li id="kasten"><button type="button" name="button" onclick="aufklappenAA()" class="dropdown drueber" id="kasten">Allgemein</button></li>
        <ul id="infoAllgemeinA" class="ausklappbar">
          <li class="drop"><span class="droppen">Geschlecht</span></li>
          <li class="drop"><span class="droppen">Alter</span></li>
          <li class="drop"><span class="droppen">Beruf</span></li>
          <li class="drop"><span class="droppen">Familienstand</span></li>
          <li class="drop"><span class="droppen">Bildung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenGG()" class="dropdown drueber" id="kasten">Gerätenutzung</button></li>
        <ul id="infoGeratG" class="ausklappbar">
          <li class="drop"><span class="droppen">Geräte</span></li>
          <li class="drop"><span class="droppen">Zweck&Nutzung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenSoSo()" class="dropdown drueber" id="kasten">Software</button></li>
        <ul id="infoSoftwareSo" class="ausklappbar">
          <li class="drop"><span class="droppen">Betriebssystem</span></li>
          <li class="drop"><span class="droppen">Browser</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenSiSi()" class="dropdown drueber" id="kasten">Sicherheit</button></li>
        <ul id="infoSicherheitSi" class="ausklappbar">
          <li class="drop"><span class="droppen">E-Mail</span></li>
          <li class="drop"><span class="droppen">Verschlüsselung</span></li>
        </ul>
        <li id="kasten"><button type="button" name="button" onclick="aufklappenFF()" class="dropdown drueber" id="kasten">Fazit</button></li>
        <ul id="infoFazitF" class="ausklappbar">
          <li class="drop"><span class="droppen">Bewertung</span></li>
          <li class="drop"><span class="droppen">Feedback</span></li>
        </ul>
      </ol>
    </div>
  </aside>

  <main>
    <form method="post" id="form3">
    <div class="main">
      <div class="auswahl1" id="aus1">
        <h2>Wie viel Stunden benutzen Sie ihren Desktop PC pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitDesktop" id="zwei" value="0" />
          <label for="zwei">
             unter 1</label><br />
              <input type="radio" name="nutzungszeitDesktop" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitDesktop" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitDesktop" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitDesktop" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitDesktop" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl2" id="aus2">
        <h2>Wie viel Stunden benutzen Sie ihren Laptop pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitLaptop" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitLaptop" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitLaptop" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitLaptop" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitLaptop" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitLaptop" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl3" id="aus3">
        <h2>Wie viel Stunden benutzen Sie ihr Smartphone pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitSmartphone" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitSmartphone" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitSmartphone" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitSmartphone" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitSmartphone" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitSmartphone" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl4"  id="aus4">
        <h2>Wie viel Stunden benutzen Sie ihr Tablet pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitTablet" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitTablet" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitTablet" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitTablet" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitTablet" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitTablet" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl5"  id="aus5">
        <h2>Wie viel Stunden benutzen Sie ihren SmartTV pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitSmartTV" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitSmartTV" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitSmartTV" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitSmartTV" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitSmartTV" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitSmartTV" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl6" id="aus6">
        <h2>Wie viel Stunden benutzen Sie ihre Smartwatch pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitSmartwatch" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitSmartwatch" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitSmartwatch" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitSmartwatch" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitSmartwatch" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitSmartwatch" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="auswahl7"  id="aus7">
        <h2>Wie viel Stunden benutzen Sie ihre Spielekonsole pro Tag?</h2>
        <section>
          <input type="radio" name="nutzungszeitSpielekonsole" id="zwei" value="0" />
          <label for="zwei">
            unter 1</label><br />
              <input type="radio" name="nutzungszeitSpielekonsole" id="vier" value="1" />
              <label for="vier">1-3</label><br />
              <input type="radio" name="nutzungszeitSpielekonsole" id="acht" value="2" />
              <label for="acht">3-5</label><br />
              <input type="radio" name="nutzungszeitSpielekonsole" id="zwoe" value="3" />
              <label for="zwoe">5-7</label><br />
              <input type="radio" name="nutzungszeitSpielekonsole" id="sechs" value="4" />
              <label for="sechs">7-8</label><br />
              <input type="radio" name="nutzungszeitSpielekonsole" id="lang" value="5" />
              <label for="lang">über 8</label>
        </section>
      </div>
      <div class="vorher">
        <!-- <a href="umfragepagephp2.php" title="Vorherige Seite"><button type="button" name="umfrage" id="aendern">Vorherige Seite</button></a> -->
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage2.php', 'form3')">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <!-- <a href="umfragepagephp4.php" title="Folgende Seite"><button type="button" name="umfrage" id="aendern">Nächste Seite</button></a> -->
        <button type="button" name="umfrage" id="aendern" onclick="buttonNaechst(); submitForm('umfrage4.php', 'form3')">Nächste Seite</button>
      </div>
    </div>
  </form>
  </main>

  <footer class="mittig">
    <p>Die Gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a>verwendet.</p>
    <p>copyright@2022</p>
  </footer>
  <script type="text/javascript" src="../scripte/umfrage.js">
  </script>
  <script type="text/javascript">

//   for (let i=0; i < localStorage.length; i++) {
//   let storageKey = localStorage.key(i);
//   console.log(storageKey + ' : ' + localStorage.getItem(storageKey));
// }

  var desktop = false;
  var laptop = false;
  var smartphone = false;
  var tablet = false;
  var smarttv = false;
  var smartwatch = false;
  var spielekonsole = false;

  desktop = window.localStorage.getItem('desktop');
  if(desktop){
      document.getElementById('aus1').style.display = 'block'
  }
  else {
    document.getElementById('aus1').style.display = 'none'
  }
  laptop = window.localStorage.getItem('laptop');
  if(laptop)
    document.getElementById('aus2').style.display = 'block'
  else {
    document.getElementById('aus2').style.display = 'none'
  }
  smartphone = window.localStorage.getItem('smartphone');
  if(smartphone)
    document.getElementById('aus3').style.display = 'block'
  else {
    document.getElementById('aus3').style.display = 'none'
  }
  tablet = window.localStorage.getItem('tablet');
  if(tablet)
    document.getElementById('aus4').style.display = 'block'
  else {
    document.getElementById('aus4').style.display = 'none'
  }
  smarttv = window.localStorage.getItem('smarttv');
  if(smarttv)
    document.getElementById('aus5').style.display = 'block'
  else{
    document.getElementById('aus5').style.display = 'none'
  }
  smartwatch = window.localStorage.getItem('smartwatch');
  if(smartwatch)
    document.getElementById('aus6').style.display = 'block'
  else {
    document.getElementById('aus6').style.display = 'none'
  }
  spielekonsole = window.localStorage.getItem('spielekonsole');
  if(spielekonsole)
    document.getElementById('aus7').style.display = 'block'
  else{
    document.getElementById('aus7').style.display = 'none'
  }

  localStorage.clear();
  </script>
</body>

</html>
