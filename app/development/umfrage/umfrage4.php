<?php

require_once '../phpfunctions/sessionfunctions.php';

session_start();
saveIntoSessionVariablesPage4();
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

  <link rel="stylesheet" href="../stylesheets/umfrage4.css" />
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
          <th><a href="../index.php" title="Home" class="unter"><span>Home</span></a></th>
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
          <input type="radio" name="OSDesktop" id="win" value="0" <?php if(isset($_SESSION['OSDesktop']) && $_SESSION['OSDesktop'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="bs">Windows</label><br />
          <input type="radio" name="OSDesktop" id="mac" value="1" <?php if(isset($_SESSION['OSDesktop']) && $_SESSION['OSDesktop'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="mac">macOS</label><br />
          <input type="radio" name="OSDesktop" id="linux" value="2" <?php if(isset($_SESSION['OSDesktop']) && $_SESSION['OSDesktop'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="linux">Linux -></label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSDesktopLinuxDistroText" id="distri" <?php if(isset($_SESSION['OSDesktopLinuxDistroText']) ){echo 'value="'.$_SESSION['OSDesktopLinuxDistroText'].'"';} ?> /> <br />
          <input type="radio" name="OSDesktop" id="bsd" value="3" <?php if(isset($_SESSION['OSDesktop']) && $_SESSION['OSDesktop'] == "3"){echo "checked=\"checked\" ";} ?> />
          <label for="bsd">BSD-Variante -></label>
          <label for="varia">Variante: </label>
          <input type="text" name="OSDesktopBSDVariante" id="varia" <?php if(isset($_SESSION['OSDesktopBSDVariante']) ){echo 'value="'.$_SESSION['OSDesktopBSDVariante'].'"';} ?> /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSDesktopSonstiges" id="sonst" <?php if(isset($_SESSION['OSDesktopSonstiges']) ){echo 'value="'.$_SESSION['OSDesktopSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl2">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Laptop?</h2>
        <section>
          <input type="radio" name="OSLaptop" id="win" value="0" <?php if(isset($_SESSION['OSLaptop']) && $_SESSION['OSLaptop'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="bs">Windows</label><br />
          <input type="radio" name="OSLaptop" id="mac" value="1" <?php if(isset($_SESSION['OSLaptop']) && $_SESSION['OSLaptop'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="mac">macOS</label><br />
          <input type="radio" name="OSLaptop" id="linux" value="2" <?php if(isset($_SESSION['OSLaptop']) && $_SESSION['OSLaptop'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="linux">Linux -></label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSLaptopLinuxDistroText" id="distri" <?php if(isset($_SESSION['OSLaptopLinuxDistroText']) ){echo 'value="'.$_SESSION['OSLaptopLinuxDistroText'].'"';} ?> /> <br />
          <input type="radio" name="OSLaptop" id="bsd" value="3" <?php if(isset($_SESSION['OSLaptop']) && $_SESSION['OSLaptop'] == "3"){echo "checked=\"checked\" ";} ?> />
          <label for="bsd">BSD-Variante -></label>
          <label for="varia">Variante: </label>
          <input type="text" name="OSLaptopBSDVariante" id="varia" <?php if(isset($_SESSION['OSLaptopBSDVariante']) ){echo 'value="'.$_SESSION['OSLaptopBSDVariante'].'"';} ?> /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSLaptopSonstiges" id="sonst" <?php if(isset($_SESSION['OSLaptopSonstiges']) ){echo 'value="'.$_SESSION['OSLaptopSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl3">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Smartphone?</h2>
        <section>
          <input type="radio" name="OSSmartphone" id="and" value="6" <?php if(isset($_SESSION['OSSmartphone']) && $_SESSION['OSSmartphone'] == "6"){echo "checked=\"checked\" ";} ?> />
          <label for="and">Android</label><br />
          <input type="radio" name="OSSmartphone" id="iOS" value="4" <?php if(isset($_SESSION['OSSmartphone']) && $_SESSION['OSSmartphone'] == "4"){echo "checked=\"checked\" ";} ?> />
          <label for="iOS">iOS</label><br />
          <input type="radio" name="OSSmartphone" id="win" value="8" <?php if(isset($_SESSION['OSSmartphone']) && $_SESSION['OSSmartphone'] == "8"){echo "checked=\"checked\" ";} ?> />
          <label for="win">Windows Phone</label><br />
          <input type="radio" name="OSSmartphone" id="linux" value="2" <?php if(isset($_SESSION['OSSmartphone']) && $_SESSION['OSSmartphone'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="linux">Linux</label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSSmartphoneLinuxDistroText" id="distri" <?php if(isset($_SESSION['OSSmartphoneLinuxDistroText']) ){echo 'value="'.$_SESSION['OSSmartphoneLinuxDistroText'].'"';} ?> /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSSmartphoneSonstiges" id="sonst" <?php if(isset($_SESSION['OSSmartphoneSonstiges']) ){echo 'value="'.$_SESSION['OSSmartphoneSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl4">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem Tablet?</h2>
        <section>
          <input type="radio" name="OSTablet" id="and" value="6" <?php if(isset($_SESSION['OSTablet']) && $_SESSION['OSTablet'] == "6"){echo "checked=\"checked\" ";} ?> />
          <label for="and">Android</label><br />
          <input type="radio" name="OSTablet" id="iOS" value="5" <?php if(isset($_SESSION['OSTablet']) && $_SESSION['OSTablet'] == "5"){echo "checked=\"checked\" ";} ?> />
          <label for="iOS">iPadOS</label><br />
          <input type="radio" name="OSTablet" id="linux" value="2" <?php if(isset($_SESSION['OSTablet']) && $_SESSION['OSTablet'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="linux">Linux</label>
          <label for="distri">Distribution: </label>
          <input type="text" name="OSTabletLinuxDistroText" id="distri" <?php if(isset($_SESSION['OSTabletLinuxDistroText']) ){echo 'value="'.$_SESSION['OSTabletLinuxDistroText'].'"';} ?> /> <br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSTabletSonstiges" id="sonst" <?php if(isset($_SESSION['OSTabletSonstiges']) ){echo 'value="'.$_SESSION['OSTabletSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl5">
        <h2>Welches Betriebssystem benutzen Sie auf ihrem SmartTV?</h2>
        <section>
          <input type="radio" name="OSSmartTV" id="tiz" value="9" <?php if(isset($_SESSION['OSSmartTV']) && $_SESSION['OSSmartTV'] == "9"){echo "checked=\"checked\" ";} ?> />
          <label for="tiz">Tizen OS</label><br />
          <input type="radio" name="OSSmartTV" id="andr" value="6" <?php if(isset($_SESSION['OSSmartTV']) && $_SESSION['OSSmartTV'] == "6"){echo "checked=\"checked\" ";} ?> />
          <label for="andr">Android TV</label><br />
          <input type="radio" name="OSSmartTV" id="fire" value="7" <?php if(isset($_SESSION['OSSmartTV']) && $_SESSION['OSSmartTV'] == "7"){echo "checked=\"checked\" ";} ?> />
          <label for="fire">Firefox OS</label><br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="OSSmartTVSonstiges" id="sonst" <?php if(isset($_SESSION['OSSmartTVSonstiges']) ){echo 'value="'.$_SESSION['OSSmartTVSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl6">
        <h2>Welchen Browser benutzen Sie?</h2>
        <section>
          <input type="radio" name="Browser" id="edge" value="3" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "3"){echo "checked=\"checked\" ";} ?> />
          <label for="edge">Microsoft Edge</label><br />
          <input type="radio" name="Browser" id="chrome" value="1" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="chrome">Google Chrome</label><br />
          <input type="radio" name="Browser" id="fire" value="5" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "5"){echo "checked=\"checked\" ";} ?> />
          <label for="fire">Firefox</label><br />
          <input type="radio" name="Browser" id="chromium" value="2" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="chromium">Chromium</label><br />
          <input type="radio" name="Browser" id="brave" value="0" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="brave">Brave</label><br />
          <input type="radio" name="Browser" id="safari" value="9" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "9"){echo "checked=\"checked\" ";} ?> />
          <label for="safari">Safari</label><br />
          <input type="radio" name="Browser" id="tor" value="10" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "10"){echo "checked=\"checked\" ";} ?> />
          <label for="tor">Tor</label><br />
          <input type="radio" name="Browser" id="opera" value="8" <?php if(isset($_SESSION['Browser']) && $_SESSION['Browser'] == "8"){echo "checked=\"checked\" ";} ?> />
          <label for="opera">Opera</label><br />
          <label for="sonst">Sonstige: </label>
          <input type="text" name="BrowserSonstiges" id="sonst" <?php if(isset($_SESSION['BrowserSonstiges']) ){echo 'value="'.$_SESSION['BrowserSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="vorher">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage3.php', 'form4')">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage5.php', 'form4')">Nächste Seite</button>
      </div>
    </div>
    </form>
  </main>

  <footer class="mittig">
    <p>Die gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a> verwendet.</p>
    <p>Copyright ©2022</p>
  </footer>
  <script type="text/javascript" src="../scripte/umfrage.js">
  </script>
</body>

</html>
