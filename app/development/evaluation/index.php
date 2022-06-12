<?php
// Datenbankverbindung öffnen
try {
  $dbh = new PDO('mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta name="author" content="cdr311" charset="utf-8"/>
    <meta name="keywords" content="Umfrage, Digitale Nutzung"/>
    <meta name="description" content="Online Umfrage zur Nutzung und Verwendung von digitalen Geräten"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>survey — Auswertung</title>

    <link rel="icon" type="image/x-icon" href="../images/favicon.svg"/>
    <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/). Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert. Es wurden keine Veränderungen am Material vorgenommen. -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/evaluation.css"/>
  </head>
  <body>
    <header>
      <article>
        <section class="links">
          <div><img src="../images/statistik.png" alt="Statistikbild" width="110px" height="50px" title="iStock" /></div>
        </section>
        <section class="mitte">
          <div class="ueberschrift">Umfrage</div>
        </section>
        <section class="rechts">
          <table>
            <th><a href="../umfrage/umfrage1.php" title="Umfrage" class="unter"><span>Umfrage</span></a></th>
            <th><a href="../infopage/index.php" title="Über Uns" class="unter"><span>Infos</span></a></th>
            <th><a href="../linkpage/index.php" title="Links" class="unter"><span>Links</span></a></th>
            <th><a href="../index.php" title="Home" class="unter"><span>Home</span></a></th>
            <th><button onclick="circleklick()" title="Moduswechsel">M</button></th>
          </table>
        </section>
      </article>
    </header>
    <main>
<?php
// Persistente Verbindung, welche auch nach Ende des Skripts nicht geschlossen wird
// Wenn die Verbindung öfter benötigt wird, resultiert dies in einer schnelleren Anwendung
/* try {
  $dbh = new PDO('mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], array(
    PDO::ATTR_PERSISTENT => true
  ));
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
} */

// Prepared Statement
/* $stmt = $dbh->prepare("SELECT * FROM BSDVarianteKey WHERE BSDVarianteName = ?");
$stmt->execute(['OpenBSD']);
//print_r($_GET);
foreach ($stmt as $row) {
  print_r($row);
} */

// Prepared Statement mit Platzhalter
/* $stmt = $dbh->prepare("SELECT * FROM BetriebssystemKey WHERE BetriebssystemName LIKE ?");
$stmt->execute(["%acO%"]);
//print_r($_GET);
foreach ($stmt as $row) {
  print_r($row);
} */
?>
<?php
// Alle Tabellen in der Datenbank survey anzeigen
/* $query = $dbh->query("SHOW TABLES;");
print_r($query);
foreach ($query as $row) {
  print_r($row);
} */

// Struktur der Tabelle TeilnehmerDaten anzeigen
/* $query = $dbh->query("DESCRIBE TeilnehmerDaten;");
print_r($query);
foreach ($query as $row) {
  print_r($row);
} */

// Spalten der Tabelle Mailclient anzeigen
/* $query = $dbh->query("SHOW COLUMNS FROM Mailclient;");
print_r($query);
foreach ($query as $row) {
  print_r($row);
} */

// Alle Daten aus der Tabelle Mailclient ausgeben
/* $query = $dbh->query("SELECT * FROM Mailclient;");
print_r($query);
foreach ($query as $row) {
  print_r($row);
} */
?>
<?php
// Anzahl der Teilnehmer ermitteln und anzeigen
$num_participants = 0;

echo "  <h3>Anzahl Teilnehmer:</h3>\n";
$query = $dbh->query("SELECT COUNT(TeilnehmerID) FROM TeilnehmerDaten;");
//print_r($query);
foreach($query as $row) {
  //print_r($row);
  $num_participants = $row[0];
}
echo "      <p>$num_participants</p>\n";
?>
<?php
// Anzahl aller genutzten Geräte ermitteln
$num_devices = 0;

$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart;");
foreach ($query as $row) {
  $num_devices = $row[0];
}
echo "      <p>Gesamtanzahl aller genutzten Geräte: $num_devices\n";

// Anzahl der genutzten Smartphones anzeigen und ermitteln
$num_smartphone = 0;

echo "      <h3>Anzahl Smartphone-Benutzer:</h3>\n";
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 2;");
foreach($query as $row) {
  $num_smartphone = $row[0];
}
echo "      <p>$num_smartphone</p>\n";

// Prozentsatz der Smartphones anteilsmäßig von allen Geräten
if ($num_devices > 0) {
  $perc_smartphone = round(($num_smartphone / $num_devices) * 100, 2);

  echo "      <p>$perc_smartphone% der Teilnehmer benutzen ein Smartphone.\n";
} else {
  echo "      <p class='error'>Bisher hat niemand an dieser Umfrage teilgenommen, der ein digitales Gerät benutzt.</p>\n";
}
?>
<?php
// Gesamtanzahl benutzter Geräte
/* echo "    <h3>So viele Geräte werden von allen Teilnehmern insgesamt benutzt:</h3>\n";
echo "    <p>$num_devices</p>";
?>
    <label for="device-names">So viele des folgenden Gerätetyps werden genutzt:</label>
    <form method="post" id="device-names">
      <select name="device-names">
        <option value="0">Desktop PC</option>
        <option value="1">Laptop</option>
        <option value="2">Smartphone</option>
        <option value="3">Tablet</option>
        <option value="4">Smart TV</option>
        <option value="5">Smartwatch</option>
        <option value="6">Spielekonsole</option>
      </select>
      <input type="submit"/>
    </form>
<?php
$device = 2;

$stmt = $dbh->prepare("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = ?");
$stmt->execute(["$device"]);
foreach ($stmt as $row) {
  print_r($row[0]);
} */
?>
<?php
// Anzahl und Anteil der Benutzer von Linux-Distributionen und BSD-Varianten ermitteln und anzeigen
$num_linux = 0;
$num_bsd = 0;
$perc_linux = 0;
$perc_bsd = 0;

$query = $dbh->query("SELECT COUNT(DISTINCT TeilnehmerID) FROM LinuxDistribution WHERE LinuxDistribution IS NOT NULL;");
foreach ($query as $row) {
  $num_linux = $row[0];
}
$query = $dbh->query("SELECT COUNT(DISTINCT TeilnehmerID) FROM BSDVariante WHERE BSDVariante IS NOT NULL;");
foreach ($query as $row) {
  $num_bsd = $row[0];
}

if ($num_devices > 0) {
  $perc_linux = round(($num_linux / $num_devices) * 100, 2);
  $perc_bsd = round(($num_bsd / $num_devices) * 100, 2);

  echo "      <p>Linux-Benutzer: $num_linux / $perc_linux%</p>";
  echo "      <p>BSD-Benutzer: $num_bsd / $perc_bsd%</p>";
} else {
  echo "      <p class='error'>Bisher hat niemand an dieser Umfrage teilgenommen, der ein digitales Gerät benutzt.</p>\n";
}
?>
    </main>
    <footer class="mittig" id="footing">
      <p>Die gesamte Umfrage wurde von Alexander Eigler, Jonas Kraus und Matthias Seitz entworfen.</p>
      <p>Images werden von <a class="quelle" href="https://www.istockphoto.com/de" title="iStock">iStock</a> verwendet.</p>
      <p>Copyright ©2022</p>
    </footer>
<?php
// Datenbankverbindung schließen
$dbh = null;
?>
    <script type="text/javascript" src="../scripte/start.js"></script>
  </body>
</html>