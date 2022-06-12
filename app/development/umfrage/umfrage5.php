<?php

require_once '../phpfunctions/sessionfunctions.php';

session_start();
saveIntoSessionVariablesPage5();
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

  <link rel="stylesheet" href="../stylesheets/umfrage5.css" />
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg" />
  <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/).
  Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert.
  Es wurden keine Veränderungen am Material vorgenommen. -->

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
    <form method="post" id="form5">
    <div class="main">
      <div class="auswahl1">
        <h2>Welche Mailprogramme benutzen Sie?</h2>
        <section>
          <input type="checkbox" name="mailprogramm[]" id="outl" value="8" <?php if(isset($_SESSION['mailprogramm']) && in_array("8", $_SESSION['mailprogramm'])){echo "checked=\"checked\" ";} ?> />
          <label for="outl">Microsoft Outlook</label><br />
          <input type="checkbox" name="mailprogramm[]" id="thun" value="10" <?php if(isset($_SESSION['mailprogramm']) && in_array("10", $_SESSION['mailprogramm'])){echo "checked=\"checked\" ";} ?> />
          <label for="thun">Mozilla Thunderbird</label><br />
          <input type="checkbox" name="mailprogramm[]" id="spark" value="9" <?php if(isset($_SESSION['mailprogramm']) && in_array("9", $_SESSION['mailprogramm'])){echo "checked=\"checked\" ";} ?> />
          <label for="spark">Spark</label><br />
          <input type="checkbox" name="mailprogramm[]" id="gmail" value="6" <?php if(isset($_SESSION['mailprogramm']) && in_array("6", $_SESSION['mailprogramm'])){echo "checked=\"checked\" ";} ?> />
          <label for="gmail">GoogleMail-App</label><br />
          <input type="checkbox" name="mailprogramm[]" id="brow" value="11" <?php if(isset($_SESSION['mailprogramm']) && in_array("11", $_SESSION['mailprogramm'])){echo "checked=\"checked\" ";} ?> />
          <label for="brow">Weboberfläche</label><br />
          <label for="sonst">Sonstige:</label>
          <input type="text" name="mailprogrammSonstiges" id="sonst" <?php if(isset($_SESSION['mailprogrammSonstiges']) ){echo 'value="'.$_SESSION['mailprogrammSonstiges'].'"';} ?> />
        </section>
      </div>
      <div class="auswahl2">
        <h2>Verschlüsseln Sie ihre <b>privaten</b> E-Mails?</h2>
        <section>
          <input type="radio" name="verschluesselungPrivat" id="ja" value="1" <?php if(isset($_SESSION['verschluesselungPrivat']) && $_SESSION['verschluesselungPrivat'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="ja">Ja</label><br />
          <input type="radio" name="verschluesselungPrivat" id="nein" value="0" <?php if(isset($_SESSION['verschluesselungPrivat']) && $_SESSION['verschluesselungPrivat'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="nein">Nein</label><br />
        </section>
      </div>
      <div class="auswahl4">
        <h2>Welche Verschlüsselungsmethode verwenden Sie dazu?</h2>
        <section>
          <input type="radio" name="verschluesselungPrivatMethode" id="pgp" value="0" <?php if(isset($_SESSION['verschluesselungPrivatMethode']) && $_SESSION['verschluesselungPrivatMethode'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="pgp">PGP</label><br />
          <input type="radio" name="verschluesselungPrivatMethode" id="smime" value="1" <?php if(isset($_SESSION['verschluesselungPrivatMethode']) && $_SESSION['verschluesselungPrivatMethode'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="smime">S/MIME</label><br />
          <input type="radio" name="verschluesselungPrivatMethode" id="prov" value="2" <?php if(isset($_SESSION['verschluesselungPrivatMethode']) && $_SESSION['verschluesselungPrivatMethode'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="prov">Spezialisierter E-Mail-Provider</label>
        </section>
      </div>
      <div class="auswahl3">
        <h2>Verschlüsseln Sie ihre <b>dienstlichen</b> E-Mails?</h2>
        <section>
          <input type="radio" name="verschluesselungDienstlich" id="ja" value="1" <?php if(isset($_SESSION['verschluesselungDienstlich']) && $_SESSION['verschluesselungDienstlich'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="ja">Ja</label><br />
          <input type="radio" name="verschluesselungDienstlich" id="nein" value="0" <?php if(isset($_SESSION['verschluesselungDienstlich']) && $_SESSION['verschluesselungDienstlich'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="nein">Nein</label><br />
        </section>
      </div>
      <div class="auswahl5">
        <h2>Welche Verschlüsselungsmethode verwenden Sie dazu?</h2>
        <section>
          <input type="radio" name="verschluesselungDienstlichMethode" id="pgp" value="0" <?php if(isset($_SESSION['verschluesselungDienstlichMethode']) && $_SESSION['verschluesselungDienstlichMethode'] == "0"){echo "checked=\"checked\" ";} ?> />
          <label for="pgp">PGP</label><br />
          <input type="radio" name="verschluesselungDienstlichMethode" id="smime" value="1" <?php if(isset($_SESSION['verschluesselungDienstlichMethode']) && $_SESSION['verschluesselungDienstlichMethode'] == "1"){echo "checked=\"checked\" ";} ?> />
          <label for="smime">S/MIME</label><br />
          <input type="radio" name="verschluesselungDienstlichMethode" id="prov" value="2" <?php if(isset($_SESSION['verschluesselungDienstlichMethode']) && $_SESSION['verschluesselungDienstlichMethode'] == "2"){echo "checked=\"checked\" ";} ?> />
          <label for="prov">Spezialisierter E-Mail-Provider</label>
        </section>
      </div>
      <div class="vorher">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage4.php', 'form5', 5)">Vorherige Seite</button>
      </div>
      <div class="naechste">
        <button type="button" name="umfrage" id="aendern" onclick="submitForm('umfrage6.php', 'form5', 5)">Nächste Seite</button>
      </div>
    </div>
  </form>
  </main>

  <footer class="mittig">
    <p>Die gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a> verwendet.</p>
    <p>Copyright ©2022</p>
  </footer>

  <script type="text/javascript" src="../scripte/umfrage.js"></script>

</body>
</html>
