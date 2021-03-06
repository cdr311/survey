<?php

  require_once './phpfunctions/sessionfunctions.php';

  //alle Eingaben zurueksetzen
  session_start();
  session_destroy();

 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Matthias Seitz" />
  <meta name="keywords" content="Umfrage, Digitale Nutzung" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten" />

  <link rel="stylesheet" href="./stylesheets/start.css" />
  <link rel="icon" type="image/x-icon" href="./images/favicon.svg"/>
  <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/).
  Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert.
  Es wurden keine Veränderungen am Material vorgenommen. -->

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
        <div><img src="./images/statistik.png" alt="Statistikbild" width="110px" height="50px" title="iStock" /></div>
      </section>
      <section>
        <div class="ueberschrift">Umfrage</div>
      </section>
      <section class="rechts">
        <table>
          <th><a href="./umfrage/umfrage1.php" title="Umfrage" class="unter" onclick="alert('Für die ordnungsgemäße Funktionalität der Umfrage dürfen nur die Knöpfe am Ende jeder Umfragenseite verwendet werden. Werden beispielsweise die Vor- und Zurück-Knöpfe des Browsers verwendet, können Daten verloren gehen.')"><span>Umfrage</span></a></th>
          <th><a href="./infopage/index.php" title="Über Uns" class="unter"><span>Infos</span></a></th>
          <th><a href="./linkpage/index.php" title="Links" class="unter"><span>Links</span></a></th>
          <th><a href="./index.php" title="Home" class="unter"><span>Home</span></a></th>
          <th>
            <button onclick="circleklick()" title="Moduswechsel">M</button>
          </th>
        </table>
      </section>
    </article>

  </header>

  <nav>
    <div class="bild-inhalt">
      <img class="meineSlides" src="./images/umfrage.png" alt="UmfrageBild1" />
      <img class="meineSlides" src="./images/fragen.png" alt="UmfrageBild2" />
      <img class="meineSlides" src="./images/smiley.png" alt="UmfrageBild3" />
      <img class="meineSlides" src="./images/holz.png" alt="UmfrageBild4" />
      <img class="meineSlides" src="./images/dunkel.png" alt="UmfrageBild5" />
      <h1 class="linksunten">Nutzung digitaler Geräte</h1>
    </div>
  </nav>

  <main>
    <button class="zugeordnet">Um was geht es?</button>
    <div class="panel">
      <p>In dieser Umfrage werden insgesamt - je nach Auswahl - circa 10 bis 30 Fragen zum Thema: <b>Nutzung und Verwendung von digitalen Geräten</b> auf Sie zukommen.</p>
      <p>Dabei geht es von den verschiedenen Geräten, die von Ihnen in Nutzung sind, über den Zweck, bis hin zur Nutzungszeit.</p>
      <p>Des Weiteren erwarten Sie Fragen zur Nutzung von ausgewählten Programmen/Softwaren.</p>
    </div>

    <button class="zugeordnet">Warum sollten Sie teilnehmen?</button>
    <div class="panel">
      <ul>
        <li>Sie sollten teilnehmen, da Sie selbst danach einen besseren Überblick haben, welche digitalen Geräten bei Ihnen im Einsatz sind.</li>
        <li>Sie helfen den Entwicklern der Umfrage, um eine bessere Auswertung erstellen zu können.</li>
        <li>Diese Umfrage hat eine geringe Bearbeitungsdauer.</li>
      </ul>
    </div>

    <button class="zugeordnet">Wer will das wissen?</button>
    <div class="panel">
      <p>Wenn Sie genauere Details über die Entwickler erfahren wollen, dann schauen Sie beim Info Tab vorbei oder klicken Sie <a href="./infopage/index.php" title="Über Uns" alt="Infopage">hier</a>.</p>
    </div>
    <button class="zugeordnet">Ist die Umfrage anonym?</button>
    <div class="panel">
      <p>Die Umfrage ist vollständig anonym. Es werden lediglich 5 allgemein persönliche Fragen zu Beginn auftauchen.</p>
      <p>Bitte füllen Sie auch hier die Felder aus. Dies wäre für die Auswertung hilfreich.</p>
    </div>
  </main>

  <aside>
    <a href="../umfrage/umfrage1.php" title="Umfrage starten" class="unter"><button type="button" name="umfrage" class="umfrage" onclick="alert('Für die ordnungsgemäße Funktionalität der Umfrage dürfen nur die Knöpfe am Ende jeder Umfragenseite verwendet werden. Werden beispielsweise die Vor- und Zurück-Knöpfe des Browsers verwendet, können Daten verloren gehen.')">Umfrage</button></a>
  </aside>

  <footer class="mittig" id="footing">
    <p>Die gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a> verwendet.</p>
    <p>Copyright ©2022</p>
  </footer>

  <script type="text/javascript" src="./scripte/start.js"></script>
  <script type="text/javascript">
    sessionStorage.clear();
  </script>
</body>
</html>
