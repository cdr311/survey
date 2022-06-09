<?php

  require_once '../phpfunctions/sessionfunctions.php';

  session_start();
  saveIntoSessionVariablesPage2();
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

  <link rel="stylesheet" href="../stylesheets/umfrage2.css" />
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg" />
  <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/). Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert. Es wurden keine Veränderungen am Material vorgenommen. -->

  <script src="../scripte/changePage.js"></script>

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

  <main id="mainmain">
    <form method="post" id="form2">
    <div class="main" id="main">
      <div class="auswahl1">
        <h2>Welche der folgenden Geräte haben Sie schon benutzt?</h2>
        <section>
          <input type="checkbox" name="benutzteGeraete[]" id="pc" value="0" onclick="desktopCheck()"/>
          <label for="pc">Desktop PC</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="laptop" value="1" onclick="laptopCheck()"/>
          <label for="laptop">Laptop</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="smartp" value="2" onclick="smartphoneCheck()"/>
          <label for="smartp">Smartphone</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="tab" value="3" onclick="tabletCheck()"/>
          <label for="tab">Tablet</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="smartt" value="4" onclick="smarttvCheck()"/>
          <label for="smartt">Smart TV</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="smartw" value="5" onclick="smartwatchCheck()"/>
          <label for="smartw">Smartwatch</label><br />
          <input type="checkbox" name="benutzteGeraete[]" id="spiel" value="6" onclick="spielekonsoleCheck()"/>
          <label for="spiel">Spielekonsole</label><br />
        </section>
      </div>
      <div class="auswahl2" id="a2">
        <h2>Für welche Tätigkeiten verwenden Sie ihren Desktop PC?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenDesktop[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenDesktop[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenDesktop[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenDesktop[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenDesktop[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenDesktopSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl3" id="a3">
        <h2>Für welche Tätigkeiten verwenden Sie ihren Laptop?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenLaptop[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenLaptop[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenLaptop[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenLaptop[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenLaptop[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenLaptopSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl4" id="a4">
        <h2>Für welche Tätigkeiten verwenden Sie ihr Smartphone?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenSmartphone[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenSmartphone[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenSmartphone[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenSmartphone[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenSmartphone[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenSmartphoneSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl5" id="a5">
        <h2>Für welche Tätigkeiten verwenden Sie ihr Tablet?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenTablet[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenTablet[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenTablet[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenTablet[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenTablet[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenTabletSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl6"id="a6">
        <h2>Für welche Tätigkeiten verwenden Sie ihren Smart TV?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenSmartTV[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenSmartTV[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenSmartTV[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenSmartTV[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenSmartTV[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenSmartTVSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl7" id="a7">
        <h2>Für welche Tätigkeiten verwenden Sie ihre Smartwatch?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <input type="checkbox" name="taetigkeitenSmartwatch[]" id="gesund" value="5" />
          <label for="gesund">Körperwerte kontollieren</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenSmartwatchSonstiges" id="anderes" />
        </section>
      </div>
      <div class="auswahl8" id="a8">
        <h2>Für welche Tätigkeiten verwenden Sie ihre Spielekonsole?</h2>
        <section>
          <input type="checkbox" name="taetigkeitenSpielekonsole[]" id="arbeit" value="0" />
          <label for="arbeit">Arbeit</label><br />
          <input type="checkbox" name="taetigkeitenSpielekonsole[]" id="surfen" value="1" />
          <label for="surfen">Surfen im Internet</label><br />
          <input type="checkbox" name="taetigkeitenSpielekonsole[]" id="shop" value="2" />
          <label for="shop">Online Shopping</label><br />
          <input type="checkbox" name="taetigkeitenSpielekonsole[]" id="film" value="3" />
          <label for="film">Videos/Filme/Serien schauen</label><br />
          <input type="checkbox" name="taetigkeitenSpielekonsole[]" id="spiele" value="4" />
          <label for="spiele">Spiele spielen</label><br />
          <label for="anderes">Andere Verwendungszwecke:</label>
          <input type="text" name="taetigkeitenSpielekonsoleSonstiges" id="anderes" />
        </section>
      </div>
      <div class="vorher">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage1.php', 'form2')">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <button type="button" name="umfrage" id="aendern" onclick="buttonNaechst(); submitForm('umfrage3.php', 'form2')">Nächste Seite</button>
      </div>
    </div>
  </form>
  </main>

  <footer class="mittig" id="footing">
    <p>Die Gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a>verwendet.</p>
    <p>copyright@2022</p>
  </footer>
  <script type="text/javascript" src="../scripte/umfrage.js">
  </script>
</body>

</html>
