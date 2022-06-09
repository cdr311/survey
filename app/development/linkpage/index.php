<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Matthias Seitz" />
  <meta name="keywords" content="Umfrage, Digitale Nutzung" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten" />

  <link rel="stylesheet" href="../stylesheets/link.css" />
  <link rel="icon" type="image/x-icon" href="../images/favicon.svg" />
  <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/). Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert. Es wurden keine Veränderungen am Material vorgenommen. -->

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

  <header class="base">
    <article>
      <section class="links">
        <section>
          <div><img src="../images/statistik.png" alt="Statistikbild" width="110px" height="50px" title="iStock" /></div>
        </section>
      </section>
      <section class="mitte">
        <div class="ueberschrift">Umfrage</div>
      </section>
      <section class="rechts">
        <table>
          <th><a href="../umfrage/umfrage1.php" title="Umfrage" class="unter"><span>Umfrage</span></a></th>
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


  <main>
    <h1><u>Links für genauere Details:</u></h1>
    <article class="genauer1">
      <h1>Um mehr über unsere Hochschule zu erfahren: </h1>
      <p>FH: <a href="https://www.hof-university.de/">Hochschule für Angewandte Wissenschaften Hof</a></p>
      <p>HföD: <a href="https://www.aiv.hfoed.de/de/startseite.html">Hochschule für den öffentlichen Dienst</a></p>
    </article>
    <article class="genauer2">
      <h1>Für genauer Details zu unserem Studium:</h1>
      <p>Duales Studium: <a href="https://www.verwaltungsinformatiker.de/de/startseite.html">Diplom-Verwaltungsinformatiker</a></p>
    </article>
  </main>

  <footer class="mittig">
    <p>Die Gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a>verwendet.</p>
    <p>copyright@2022</p>
  </footer>

  <script type="text/javascript" src="../scripte/link.js">
  </script>

</body>

</html>
