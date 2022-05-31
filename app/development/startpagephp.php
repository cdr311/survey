<!DOCTYPE html>
<html lang="de" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Matthias Seitz" />
  <meta name="keywords" content="Umfrage, Digitale Nutzung" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten" />

  <link rel="stylesheet" href="startpagestyle.css" />
  <link rel="icon" type="image/x-icon" href="https://media.istockphoto.com/vectors/question-mark-icon-flat-vector-illustration-design-vector-id1162198273" />

  <title>Umfrage zur Nutzung digitaler Geräte</title>

</head>

<body>
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
    <section class="links">
      <div>
        <div><img src="https://media.istockphoto.com/photos/stock-market-investment-graph-with-indicator-and-volume-data-picture-id1221293664" alt="Statistikbild" width="110px" height="50px" title="iStock" /></div>
    </section>
    <section class="mitte">
      <div class="ueberschrift">Umfrage</div>

    </section>
    <section class="rechts">
      <table>
        <th><a href="" title="Umfrage" class="unter"><span>Umfrage</span></a></th>
        <th><a href="infospage.html" title="Über Uns" class="unter"><span>Infos</span></a></th>
        <th><a href="linkpage.html" title="Links" class="unter"><span>Links</span></a></th>
        <th><a href="startpage.html" title="Home" class="unter"><span>Home</span></a></th>
        <th><a href="" title="Moduswechsel" class="unter">
            <svg width="30" height="30">
              <circle cx="15" cy="15" r="11" fill="black" />
              Sorry, your browser does not support inline SVG.
            </svg> </a>
        </th>
      </table>

    </section>

  </header>

  <!--der linke Seitenkasten-->
  <nav>

  </nav>

  <div>

  </div>

  <main>

  </main>

  <aside class="">

  </aside>

  <footer class="mittig">
    <p>Die Gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
    <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a>verwendet.</p>
    <p>copyright@2022</p>

  </footer>

    <script type="text/javascript" src="startpagescript.js"></script>

</body>

</html>
