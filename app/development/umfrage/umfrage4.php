<?php

  session_start();
  echo "SESSION ID: ".$_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Matthias Seitz" />
  <meta name="keywords" content="Umfrage, Digitale Nutzung" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten" />

  <link rel="stylesheet" href="../stylesheets/umfrage4.css" />
  <link rel="icon" type="image/x-icon" href="../images/fragezeichen.png" />
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

  <main>
    <form method="post" id="form4">
    <div class="main">
      <div class="auswahl1">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Desktop PC?</h2>
        <section>
          <input type="radio" name="OSDesktop" id="win" value="Windows" />
          <label for="bs">Windows</label><br />
          <input type="radio" name="OSDesktop" id="mac" value="macOS" />
          <label for="mac">macOS</label><br />
          <input type="radio" name="OSDesktop" id="linux" value="Linux" />
          <label for="linux">Linux -></label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSDesktop" value="" id="distri" /> <br />
          <input type="radio" name="OSDesktop" id="bsd" value="BSD" />
          <label for="bsd">BSD-Variante -></label>
          <label for="varia">Variante: </label>
          <input type="text" name="OSDesktop" value="" id="varia" /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSDesktop" value="" id="sonst" />
        </section>
      </div>
      <div class="auswahl2">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Laptop?</h2>
        <section>
          <input type="radio" name="OSLaptop" id="win" value="Windows" />
          <label for="bs">Windows</label><br />
          <input type="radio" name="OSLaptop" id="mac" value="macOS" />
          <label for="mac">macOS</label><br />
          <input type="radio" name="OSLaptop" id="linux" value="Linux" />
          <label for="linux">Linux -></label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSLaptop" value="" id="distri" /> <br />
          <input type="radio" name="OSLaptop" id="bsd" value="BSD" />
          <label for="bsd">BSD-Variante -></label>
          <label for="varia">Variante: </label>
          <input type="text" name="OSLaptop" value="" id="varia" /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSLaptop" value="" id="sonst" />
        </section>
      </div>
      <div class="auswahl3">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Smartphone?</h2>
        <section>
          <input type="radio" name="OSSmartphone" id="and" value="Android" />
          <label for="and">Android</label><br />
          <input type="radio" name="OSSmartphone" id="iOS" value="iOS" />
          <label for="iOS">iOS</label><br />
          <input type="radio" name="OSSmartphone" id="win" value="WindowsPhone" />
          <label for="win">Windows Phone</label><br />
          <input type="radio" name="OSSmartphone" id="bb" value="BlackBerry" />
          <label for="bb">BlackBerry</label><br />
          <input type="radio" name="OSSmartphone" id="chrome" value="ChromeOS" />
          <label for="chrome">Chrome OS</label><br />
          <input type="radio" name="OSSmartphone" id="linux" value="Linux" />
          <label for="linux">Linux</label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSSmartphone" value="" id="distri" /> <br />
          <input type="radio" name="OSSmartphone" id="fire" value="Firefox" />
          <label for="fire">Firefox OS</label><br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSSmartphone" value="" id="sonst" />
        </section>
      </div>
      <div class="auswahl4">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Tablet?</h2>
        <section>
          <input type="radio" name="OSTablet" id="and" value="Android" />
          <label for="and">Android</label><br />
          <input type="radio" name="OSTablet" id="iOS" value="iOS" />
          <label for="iOS">iOS</label><br />
          <input type="radio" name="OSTablet" id="win" value="WindowsPhone" />
          <label for="win">Windows Phone</label><br />
          <input type="radio" name="OSTablet" id="bb" value="BlackBerry" />
          <label for="bb">BlackBerry</label><br />
          <input type="radio" name="OSTablet" id="chrome" value="ChromeOS" />
          <label for="chrome">Chrome OS</label><br />
          <input type="radio" name="OSTablet" id="linux" value="Linux" />
          <label for="linux">Linux</label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSTablet" value="" id="distri" /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSTablet" value="" id="sonst" />
        </section>
      </div>
      <div class="auswahl5">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem SmartTV?</h2>
        <section>
          <input type="radio" name="OSSmartTV" id="tiz" value="Tizen" />
          <label for="tiz">Tizen OS</label><br />
          <input type="radio" name="OSSmartTV" id="web" value="webOS" />
          <label for="web">webOS</label><br />
          <input type="radio" name="OSSmartTV" id="andr" value="Android" />
          <label for="andr">Android TV</label><br />
          <input type="radio" name="OSSmartTV" id="myhome" value="MyHomeScreen" />
          <label for="myhome">MyHomeScreen</label><br />
          <input type="radio" name="OSSmartTV" id="roku" value="Roku" />
          <label for="roku">Roku TV</label><br />
          <input type="radio" name="OSSmartTV" id="fire" value="Firefox" />
          <label for="fire">Firefox OS</label><br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSSmartTV" value="" id="sonst" />
        </section>
      </div>
      <div class="auswahl6">
        <h2>Welche Browser benutzen Sie?</h2>
        <section>
          <input type="radio" name="Browser" id="edge" value="Edge" />
          <label for="edge">Microsoft Edge</label><br />
          <input type="radio" name="Browser" id="chrome" value="Chrome" />
          <label for="chrome">Google Chrome</label><br />
          <input type="radio" name="Browser" id="fire" value="Firefox" />
          <label for="fire">Firefox</label><br />
          <input type="radio" name="Browser" id="chromium" value="Chromium" />
          <label for="chromium">Chromium</label><br />
          <input type="radio" name="Browser" id="brave" value="Brave" />
          <label for="brave">Brave</label><br />
          <input type="radio" name="Browser" id="safari" value="Safari" />
          <label for="safari">Safari</label><br />
          <input type="radio" name="Browser" id="tor" value="Tor" />
          <label for="tor">Tor</label><br />
          <input type="radio" name="Browser" id="opera" value="Opera" />
          <label for="opera">Opera</label><br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="Browser" value="" id="sonst" />
        </section>
      </div>
      <div class="vorher">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage3.php', 'form4')">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <button type="button" name="umfrage" id="aendern" onclick="buttonNaechst(); submitForm('umfrage5.php', 'form4')">Nächste Seite</button>
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
</body>

</html>
