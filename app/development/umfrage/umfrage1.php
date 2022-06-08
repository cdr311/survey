<?php

require_once 'sessionfunctions.php';

session_start();
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

  <link rel="stylesheet" href="../stylesheets/umfrage1.css" />
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
    <div class="main">
      <form method="post" id="form1">
      <div class="auswahl">
        <h2>Mit welchem Geschlecht identifizieren Sie sich?</h2>
        <section>
          <input type="radio" name="geschlecht" id="maen" value="0" />
          <label for="maen">Männlich</label><br />
          <input type="radio" name="geschlecht" id="weibl" value="1" />
          <label for="maen">Weiblich</label><br />
          <input type="radio" name="geschlecht" id="dive" value="2" />
          <label for="maen">Divers</label>
        </section>
      </div>
      <div class="auswahl2">
        <h2>In welchen Altersbereich befinden Sie sich?</h2>
        <section class="breite">
          <input type="radio" name="alter" id="jugend" value="0" />
          <label for="jugend">17 oder jünger</label><br />
          <input type="radio" name="alter" id="erwachsen1" value="1" />
          <label for="erwachsen1">18-20</label><br />
          <input type="radio" name="alter" id="erwachsen2" value="2" />
          <label for="erwachsen2">21-29</label><br />
          <input type="radio" name="alter" id="erwachsen3" value="3" />
          <label for="erwachsen3">30-39</label><br />
          <input type="radio" name="alter" id="erwachsen4" value="4" />
          <label for="erwachsen4">40-49</label><br />
          <input type="radio" name="alter" id="erwachsen5" value="5" />
          <label for="erwachsen5">50-59</label><br />
          <input type="radio" name="alter" id="erwachsen6" value="6" />
          <label for="erwachsen6">60 oder älter</label>
        </section>
      </div>
      <div class="auswahl3">
        <h2>In welchen Berufsbereich sind Sie tätig?</h2>
        <section>
          <input type="radio" name="arbeit" id="labor" value="0" />
          <label for="jugend">Laborberufe</label>
          <input type="radio" name="arbeit" id="hand" value="1" />
          <label for="hand">Handwerk</label>
          <input type="radio" name="arbeit" id="technisch" value="2" />
          <label for="technisch">IT und Elektronik</label>
          <br>
          <input type="radio" name="arbeit" id="kauf" value="3" />
          <label for="kauf">Kaufmännische Berufe</label>
          <input type="radio" name="arbeit" id="sozial" value="4" />
          <label for="sozial">Gesundheit und Pflege</label>
          <input type="radio" name="arbeit" id="sonstiges" value="5" />
          <label for="sonstiges">Sonstiges</label>
        </section>
      </div>
      <div class="auswahl4">
        <h2>In welcher familiären Situation befinden Sie sich?</h2>
        <section>
          <input type="radio" name="familie" id="ledig" value="0" />
          <label for="ledig">Ledig</label>
          <input type="radio" name="familie" id="getrennt" value="1" />
          <label for="getrennt">Getrennt</label>
          <input type="radio" name="familie" id="geschieden" value="2" />
          <label for="geschieden">Geschieden</label>
          <input type="radio" name="familie" id="witwe" value="3" />
          <label for="witwe">Verwitwet</label>
          <input type="radio" name="familie" id="heirat" value="4" />
          <label for="heirat">Verheiratet</label>
        </section>
      </div>
      <div class="auswahl5">
        <h2>Was ist ihr höchster Bildungssbschluss?</h2>
        <section>
          <select name="bildung" class="dropdownfeld">
            <option value="0">Keinen Abschluss</option>
            <option value="1">Qualifizierter Hauptschulabschluss</option>
            <option value="2">Mittlere Reife</option>
            <option value="3">Fachabitur</option>
            <option value="4">Allgemeines Abitur</option>
            <option value="5">Studium ohne Abschluss</option>
            <option value="6">Bachelor</option>
            <option value="7">Diplom</option>
            <option value="8">Master</option>
            <option value="9">Promotion</option>
            <option value="10">Professur</option>
          </select>

          </select>
        </section>
      </div>
      <div class="vorher">
        <button type="button" name="umfrage" class="verschleiern" id="aendern">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage2.php', 'form1')">Nächste Seite</button>
      </div>
    </form>
    </div>
  </main>



  <footer class="mittig">
    <p>Die Gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a>verwendet.</p>
    <p>copyright@2022</p>

  </footer>


  <script type="text/javascript" src="../scripte/umfrage.js">
  </script>
</body>

</html>
