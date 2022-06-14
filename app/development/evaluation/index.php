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
      <h1>Auswertung</h1>
      <p>Auf dieser Seite finden Sie einige interessante Statistiken zur Umfrage.</p>
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
$num_geschlecht_0 = 0;
$num_geschlecht_1 = 0;
$num_geschlecht_2 = 0;
$num_altersbereich_0 = 0;
$num_altersbereich_1 = 0;
$num_altersbereich_2 = 0;
$num_altersbereich_3 = 0;
$num_altersbereich_4 = 0;
$num_altersbereich_5 = 0;
$num_altersbereich_6 = 0;
$num_berufsfeld_0 = 0;
$num_berufsfeld_1 = 0;
$num_berufsfeld_2 = 0;
$num_berufsfeld_3 = 0;
$num_berufsfeld_4 = 0;
$num_berufsfeld_5 = 0;
$num_familienstand_0 = 0;
$num_familienstand_1 = 0;
$num_familienstand_2 = 0;
$num_familienstand_3 = 0;
$num_familienstand_4 = 0;
$num_bildungsstand_0 = 0;
$num_bildungsstand_1 = 0;
$num_bildungsstand_2 = 0;
$num_bildungsstand_3 = 0;
$num_bildungsstand_4 = 0;
$num_bildungsstand_5 = 0;
$num_bildungsstand_6 = 0;
$num_bildungsstand_7 = 0;
$num_bildungsstand_8 = 0;
$num_bildungsstand_9 = 0;
$num_bildungsstand_10 = 0;
$num_geraeteart_0 = 0;
$num_geraeteart_1 = 0;
$num_geraeteart_2 = 0;
$num_geraeteart_3 = 0;
$num_geraeteart_4 = 0;
$num_geraeteart_5 = 0;
$num_geraeteart_6 = 0;
$num_nutzungsgebiet_0 = 0;
$num_nutzungsgebiet_1 = 0;
$num_nutzungsgebiet_2 = 0;
$num_nutzungsgebiet_3 = 0;
$num_nutzungsgebiet_4 = 0;
$num_nutzungsgebiet_5 = 0;
$num_nutzungsdauer_0 = 0;
$num_nutzungsdauer_1 = 0;
$num_nutzungsdauer_2 = 0;
$num_nutzungsdauer_3 = 0;
$num_nutzungsdauer_4 = 0;
$num_nutzungsdauer_5 = 0;
$num_betriebssystem_0 = 0;
$num_betriebssystem_1 = 0;
$num_betriebssystem_2 = 0;
$num_betriebssystem_3 = 0;
$num_betriebssystem_4 = 0;
$num_betriebssystem_5 = 0;
$num_betriebssystem_6 = 0;
$num_betriebssystem_7 = 0;
$num_betriebssystem_8 = 0;
$num_betriebssystem_9 = 0;
$num_betriebssystem_10 = 0;
$num_browser_0 = 0;
$num_browser_1 = 0;
$num_browser_2 = 0;
$num_browser_3 = 0;
$num_browser_4 = 0;
$num_browser_5 = 0;
$num_browser_6 = 0;
$num_browser_7 = 0;
$num_browser_8 = 0;
$num_browser_9 = 0;
$num_browser_10 = 0;
$num_browser_11 = 0;
$num_browser_12 = 0;
$num_mailclient_0 = 0;
$num_mailclient_1 = 0;
$num_mailclient_2 = 0;
$num_mailclient_3 = 0;
$num_mailclient_4 = 0;
$num_mailclient_5 = 0;
$num_mailclient_6 = 0;
$num_mailclient_7 = 0;
$num_mailclient_8 = 0;
$num_mailclient_9 = 0;
$num_mailclient_10 = 0;
$num_mailclient_11 = 0;
$num_mailclient_12 = 0;
$num_verschluesselungprivat = 0;
$num_verschluesselungdienstlich = 0;
$num_verschluesselungsartprivat_0 = 0;
$num_verschluesselungsartprivat_1 = 0;
$num_verschluesselungsartprivat_2 = 0;
$num_verschluesselungsartprivat_3 = 0;
$num_verschluesselungsartdienstlich_0 = 0;
$num_verschluesselungsartdienstlich_1 = 0;
$num_verschluesselungsartdienstlich_2 = 0;
$num_verschluesselungsartdienstlich_3 = 0;
$num_bewertung_0 = 0;
$num_bewertung_1 = 0;
$num_bewertung_2 = 0;
$num_bewertung_3 = 0;
$num_bewertung_4 = 0;

$num_participants = 0;
$num_devices = 0;
$num_verschluesselungsart_0 = 0;
$num_verschluesselungsart_1 = 0;
$num_verschluesselungsart_2 = 0;
$num_verschluesselungsart_3 = 0;
?>
<?php
// Anzahlen ermitteln
$query = $dbh->query("SELECT COUNT(DISTINCT TeilnehmerID) FROM TeilnehmerDaten;");
foreach ($query as $row) {
  $num_participants = $row[0];
}

$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart;");
foreach ($query as $row) {
  $num_devices = $row[0];
}

$query = $dbh->query("SELECT COUNT(Geschlecht) FROM TeilnehmerDaten WHERE Geschlecht = 0");
foreach ($query as $row) {
  $num_geschlecht_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geschlecht) FROM TeilnehmerDaten WHERE Geschlecht = 1");
foreach ($query as $row) {
  $num_geschlecht_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geschlecht) FROM TeilnehmerDaten WHERE Geschlecht = 2");
foreach ($query as $row) {
  $num_geschlecht_2 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 0");
foreach ($query as $row) {
  $num_altersbereich_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 1");
foreach ($query as $row) {
  $num_altersbereich_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 2");
foreach ($query as $row) {
  $num_altersbereich_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 3");
foreach ($query as $row) {
  $num_altersbereich_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 4");
foreach ($query as $row) {
  $num_altersbereich_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 5");
foreach ($query as $row) {
  $num_altersbereich_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Altersbereich) FROM TeilnehmerDaten WHERE Altersbereich = 6");
foreach ($query as $row) {
  $num_altersbereich_6 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 0");
foreach ($query as $row) {
  $num_berufsfeld_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 1");
foreach ($query as $row) {
  $num_berufsfeld_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 2");
foreach ($query as $row) {
  $num_berufsfeld_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 3");
foreach ($query as $row) {
  $num_berufsfeld_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 4");
foreach ($query as $row) {
  $num_berufsfeld_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Berufsfeld) FROM TeilnehmerDaten WHERE Berufsfeld = 5");
foreach ($query as $row) {
  $num_berufsfeld_5 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Familienstand) FROM TeilnehmerDaten WHERE Familienstand = 0");
foreach ($query as $row) {
  $num_familienstand_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Familienstand) FROM TeilnehmerDaten WHERE Familienstand = 1");
foreach ($query as $row) {
  $num_familienstand_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Familienstand) FROM TeilnehmerDaten WHERE Familienstand = 2");
foreach ($query as $row) {
  $num_familienstand_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Familienstand) FROM TeilnehmerDaten WHERE Familienstand = 3");
foreach ($query as $row) {
  $num_familienstand_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Familienstand) FROM TeilnehmerDaten WHERE Familienstand = 4");
foreach ($query as $row) {
  $num_familienstand_4 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 0");
foreach ($query as $row) {
  $num_bildungsstand_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 1");
foreach ($query as $row) {
  $num_bildungsstand_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 2");
foreach ($query as $row) {
  $num_bildungsstand_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 3");
foreach ($query as $row) {
  $num_bildungsstand_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 4");
foreach ($query as $row) {
  $num_bildungsstand_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 5");
foreach ($query as $row) {
  $num_bildungsstand_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 6");
foreach ($query as $row) {
  $num_bildungsstand_6 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 7");
foreach ($query as $row) {
  $num_bildungsstand_7 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 8");
foreach ($query as $row) {
  $num_bildungsstand_8 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 9");
foreach ($query as $row) {
  $num_bildungsstand_9 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bildungsstand) FROM TeilnehmerDaten WHERE Bildungsstand = 10");
foreach ($query as $row) {
  $num_bildungsstand_10 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 0");
foreach ($query as $row) {
  $num_geraeteart_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 1");
foreach ($query as $row) {
  $num_geraeteart_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 2");
foreach ($query as $row) {
  $num_geraeteart_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 3");
foreach ($query as $row) {
  $num_geraeteart_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 4");
foreach ($query as $row) {
  $num_geraeteart_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 5");
foreach ($query as $row) {
  $num_geraeteart_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 6");
foreach ($query as $row) {
  $num_geraeteart_6 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 0");
foreach ($query as $row) {
  $num_nutzungsgebiet_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 1");
foreach ($query as $row) {
  $num_nutzungsgebiet_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 2");
foreach ($query as $row) {
  $num_nutzungsgebiet_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 3");
foreach ($query as $row) {
  $num_nutzungsgebiet_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 4");
foreach ($query as $row) {
  $num_nutzungsgebiet_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsgebiet) FROM Nutzungsgebiet WHERE Nutzungsgebiet = 5");
foreach ($query as $row) {
  $num_nutzungsgebiet_5 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 0");
foreach ($query as $row) {
  $num_nutzungsdauer_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 1");
foreach ($query as $row) {
  $num_nutzungsdauer_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 2");
foreach ($query as $row) {
  $num_nutzungsdauer_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 3");
foreach ($query as $row) {
  $num_nutzungsdauer_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 4");
foreach ($query as $row) {
  $num_nutzungsdauer_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Nutzungsdauer) FROM Nutzungsdauer WHERE Nutzungsdauer = 5");
foreach ($query as $row) {
  $num_nutzungsdauer_5 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 0");
foreach ($query as $row) {
  $num_betriebssystem_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 1");
foreach ($query as $row) {
  $num_betriebssystem_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 2");
foreach ($query as $row) {
  $num_betriebssystem_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 3");
foreach ($query as $row) {
  $num_betriebssystem_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 4");
foreach ($query as $row) {
  $num_betriebssystem_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 5");
foreach ($query as $row) {
  $num_betriebssystem_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 6");
foreach ($query as $row) {
  $num_betriebssystem_6 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 7");
foreach ($query as $row) {
  $num_betriebssystem_7 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 8");
foreach ($query as $row) {
  $num_betriebssystem_8 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 9");
foreach ($query as $row) {
  $num_betriebssystem_9 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Betriebssystem) FROM Betriebssystem WHERE Betriebssystem = 10");
foreach ($query as $row) {
  $num_betriebssystem_10 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 0");
foreach ($query as $row) {
  $num_browser_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 1");
foreach ($query as $row) {
  $num_browser_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 2");
foreach ($query as $row) {
  $num_browser_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 3");
foreach ($query as $row) {
  $num_browser_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 4");
foreach ($query as $row) {
  $num_browser_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 5");
foreach ($query as $row) {
  $num_browser_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 6");
foreach ($query as $row) {
  $num_browser_6 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 7");
foreach ($query as $row) {
  $num_browser_7 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 8");
foreach ($query as $row) {
  $num_browser_8 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 9");
foreach ($query as $row) {
  $num_browser_9 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 10");
foreach ($query as $row) {
  $num_browser_10 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 11");
foreach ($query as $row) {
  $num_browser_11 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Browser) FROM Browser WHERE Browser = 12");
foreach ($query as $row) {
  $num_browser_12 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 0");
foreach ($query as $row) {
  $num_mailclient_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 1");
foreach ($query as $row) {
  $num_mailclient_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 2");
foreach ($query as $row) {
  $num_mailclient_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 3");
foreach ($query as $row) {
  $num_mailclient_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 4");
foreach ($query as $row) {
  $num_mailclient_4 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 5");
foreach ($query as $row) {
  $num_mailclient_5 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 6");
foreach ($query as $row) {
  $num_mailclient_6 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 7");
foreach ($query as $row) {
  $num_mailclient_7 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 8");
foreach ($query as $row) {
  $num_mailclient_8 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 9");
foreach ($query as $row) {
  $num_mailclient_9 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 10");
foreach ($query as $row) {
  $num_mailclient_10 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 11");
foreach ($query as $row) {
  $num_mailclient_11 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Mailclient) FROM Mailclient WHERE Mailclient = 12");
foreach ($query as $row) {
  $num_mailclient_12 = $row[0];
}

$query = $dbh->query("SELECT COUNT(DISTINCT TeilnehmerID) FROM VerschluesselungPrivat WHERE VerschluesselungPrivat = 1");
foreach ($query as $row) {
  $num_verschluesselungprivat = $row[0];
}

$query = $dbh->query("SELECT COUNT(DISTINCT TeilnehmerID) FROM VerschluesselungDienstlich WHERE VerschluesselungDienstlich = 1");
foreach ($query as $row) {
  $num_verschluesselungdienstlich = $row[0];
}

$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungPrivat WHERE Art = 0");
foreach ($query as $row) {
  $num_verschluesselungsartprivat_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungPrivat WHERE Art = 1");
foreach ($query as $row) {
  $num_verschluesselungsartprivat_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungPrivat WHERE Art = 2");
foreach ($query as $row) {
  $num_verschluesselungsartprivat_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungPrivat WHERE Art = 3");
foreach ($query as $row) {
  $num_verschluesselungsartprivat_3 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungDienstlich WHERE Art = 0");
foreach ($query as $row) {
  $num_verschluesselungsartdienstlich_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungDienstlich WHERE Art = 1");
foreach ($query as $row) {
  $num_verschluesselungsartdienstlich_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungDienstlich WHERE Art = 2");
foreach ($query as $row) {
  $num_verschluesselungsartdienstlich_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Art) FROM VerschluesselungDienstlich WHERE Art = 3");
foreach ($query as $row) {
  $num_verschluesselungsartdienstlich_3 = $row[0];
}

$query = $dbh->query("SELECT COUNT(Bewertung) FROM Bewertung WHERE Bewertung = 0");
foreach ($query as $row) {
  $num_bewertung_0 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bewertung) FROM Bewertung WHERE Bewertung = 1");
foreach ($query as $row) {
  $num_bewertung_1 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bewertung) FROM Bewertung WHERE Bewertung = 2");
foreach ($query as $row) {
  $num_bewertung_2 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bewertung) FROM Bewertung WHERE Bewertung = 3");
foreach ($query as $row) {
  $num_bewertung_3 = $row[0];
}
$query = $dbh->query("SELECT COUNT(Bewertung) FROM Bewertung WHERE Bewertung = 4");
foreach ($query as $row) {
  $num_bewertung_4 = $row[0];
}

$num_verschluesselungsart_0 = $num_verschluesselungsartprivat_0 + $num_verschluesselungsartdienstlich_0;
$num_verschluesselungsart_1 = $num_verschluesselungsartprivat_1 + $num_verschluesselungsartdienstlich_1;
$num_verschluesselungsart_2 = $num_verschluesselungsartprivat_2 + $num_verschluesselungsartdienstlich_2;
$num_verschluesselungsart_3 = $num_verschluesselungsartprivat_3 + $num_verschluesselungsartdienstlich_3;
?>
<?php
$num_verschluesselungsartprivat = $num_verschluesselungsartprivat_0 + $num_verschluesselungsartprivat_1 + $num_verschluesselungsartprivat_2;
$num_verschluesselungsartdienstlich = $num_verschluesselungsartdienstlich_0 + $num_verschluesselungsartdienstlich_1 + $num_verschluesselungsartdienstlich_2;
$num_bewertung = $num_bewertung_0 + $num_bewertung_1 + $num_bewertung_2 + $num_bewertung_3 + $num_bewertung_4;
?>
<?php
// Anteile ermitteln
$perc_geschlecht_0 = round(($num_geschlecht_0 / $num_participants) * 100, 2);
$perc_geschlecht_1 = round(($num_geschlecht_1 / $num_participants) * 100, 2);
$perc_geschlecht_2 = round(($num_geschlecht_2 / $num_participants) * 100, 2);

$perc_altersbereich_0 = round(($num_altersbereich_0 / $num_participants) * 100, 2);
$perc_altersbereich_1 = round(($num_altersbereich_1 / $num_participants) * 100, 2);
$perc_altersbereich_2 = round(($num_altersbereich_2 / $num_participants) * 100, 2);
$perc_altersbereich_3 = round(($num_altersbereich_3 / $num_participants) * 100, 2);
$perc_altersbereich_4 = round(($num_altersbereich_4 / $num_participants) * 100, 2);
$perc_altersbereich_5 = round(($num_altersbereich_5 / $num_participants) * 100, 2);
$perc_altersbereich_6 = round(($num_altersbereich_6 / $num_participants) * 100, 2);

$perc_berufsfeld_0 = round(($num_berufsfeld_0 / $num_participants) * 100, 2);
$perc_berufsfeld_1 = round(($num_berufsfeld_1 / $num_participants) * 100, 2);
$perc_berufsfeld_2 = round(($num_berufsfeld_2 / $num_participants) * 100, 2);
$perc_berufsfeld_3 = round(($num_berufsfeld_3 / $num_participants) * 100, 2);
$perc_berufsfeld_4 = round(($num_berufsfeld_4 / $num_participants) * 100, 2);
$perc_berufsfeld_5 = round(($num_berufsfeld_5 / $num_participants) * 100, 2);

$perc_familienstand_0 = round(($num_familienstand_0 / $num_participants) * 100, 2);
$perc_familienstand_1 = round(($num_familienstand_1 / $num_participants) * 100, 2);
$perc_familienstand_2 = round(($num_familienstand_2 / $num_participants) * 100, 2);
$perc_familienstand_3 = round(($num_familienstand_3 / $num_participants) * 100, 2);
$perc_familienstand_4 = round(($num_familienstand_4 / $num_participants) * 100, 2);

$perc_bildungsstand_0 = round(($num_bildungsstand_0 / $num_participants) * 100, 2);
$perc_bildungsstand_1 = round(($num_bildungsstand_1 / $num_participants) * 100, 2);
$perc_bildungsstand_2 = round(($num_bildungsstand_2 / $num_participants) * 100, 2);
$perc_bildungsstand_3 = round(($num_bildungsstand_3 / $num_participants) * 100, 2);
$perc_bildungsstand_4 = round(($num_bildungsstand_4 / $num_participants) * 100, 2);
$perc_bildungsstand_5 = round(($num_bildungsstand_5 / $num_participants) * 100, 2);
$perc_bildungsstand_6 = round(($num_bildungsstand_6 / $num_participants) * 100, 2);
$perc_bildungsstand_7 = round(($num_bildungsstand_7 / $num_participants) * 100, 2);
$perc_bildungsstand_8 = round(($num_bildungsstand_8 / $num_participants) * 100, 2);
$perc_bildungsstand_9 = round(($num_bildungsstand_9 / $num_participants) * 100, 2);
$perc_bildungsstand_10 = round(($num_bildungsstand_10 / $num_participants) * 100, 2);

$perc_geraeteart_0 = round(($num_geraeteart_0 / $num_participants) * 100, 2);
$perc_geraeteart_1 = round(($num_geraeteart_1 / $num_participants) * 100, 2);
$perc_geraeteart_2 = round(($num_geraeteart_2 / $num_participants) * 100, 2);
$perc_geraeteart_3 = round(($num_geraeteart_3 / $num_participants) * 100, 2);
$perc_geraeteart_4 = round(($num_geraeteart_4 / $num_participants) * 100, 2);
$perc_geraeteart_5 = round(($num_geraeteart_5 / $num_participants) * 100, 2);
$perc_geraeteart_6 = round(($num_geraeteart_6 / $num_participants) * 100, 2);

$perc_nutzungsgebiet_0 = round(($num_nutzungsgebiet_0 / $num_participants) * 100, 2);
$perc_nutzungsgebiet_1 = round(($num_nutzungsgebiet_1 / $num_participants) * 100, 2);
$perc_nutzungsgebiet_2 = round(($num_nutzungsgebiet_2 / $num_participants) * 100, 2);
$perc_nutzungsgebiet_3 = round(($num_nutzungsgebiet_3 / $num_participants) * 100, 2);
$perc_nutzungsgebiet_4 = round(($num_nutzungsgebiet_4 / $num_participants) * 100, 2);
$perc_nutzungsgebiet_5 = round(($num_nutzungsgebiet_5 / $num_participants) * 100, 2);

$perc_nutzungsdauer_0 = round(($num_nutzungsdauer_0 / $num_participants) * 100, 2);
$perc_nutzungsdauer_1 = round(($num_nutzungsdauer_1 / $num_participants) * 100, 2);
$perc_nutzungsdauer_2 = round(($num_nutzungsdauer_2 / $num_participants) * 100, 2);
$perc_nutzungsdauer_3 = round(($num_nutzungsdauer_3 / $num_participants) * 100, 2);
$perc_nutzungsdauer_4 = round(($num_nutzungsdauer_4 / $num_participants) * 100, 2);
$perc_nutzungsdauer_5 = round(($num_nutzungsdauer_5 / $num_participants) * 100, 2);

$perc_betriebssystem_0 = round(($num_betriebssystem_0 / $num_participants) * 100, 2);
$perc_betriebssystem_1 = round(($num_betriebssystem_1 / $num_participants) * 100, 2);
$perc_betriebssystem_2 = round(($num_betriebssystem_2 / $num_participants) * 100, 2);
$perc_betriebssystem_3 = round(($num_betriebssystem_3 / $num_participants) * 100, 2);
$perc_betriebssystem_4 = round(($num_betriebssystem_4 / $num_participants) * 100, 2);
$perc_betriebssystem_5 = round(($num_betriebssystem_5 / $num_participants) * 100, 2);
$perc_betriebssystem_6 = round(($num_betriebssystem_6 / $num_participants) * 100, 2);
$perc_betriebssystem_7 = round(($num_betriebssystem_7 / $num_participants) * 100, 2);
$perc_betriebssystem_8 = round(($num_betriebssystem_8 / $num_participants) * 100, 2);
$perc_betriebssystem_9 = round(($num_betriebssystem_9 / $num_participants) * 100, 2);
$perc_betriebssystem_10 = round(($num_betriebssystem_10 / $num_participants) * 100, 2);

$perc_browser_0 = round(($num_browser_0 / $num_participants) * 100, 2);
$perc_browser_1 = round(($num_browser_1 / $num_participants) * 100, 2);
$perc_browser_2 = round(($num_browser_2 / $num_participants) * 100, 2);
$perc_browser_3 = round(($num_browser_3 / $num_participants) * 100, 2);
$perc_browser_4 = round(($num_browser_4 / $num_participants) * 100, 2);
$perc_browser_5 = round(($num_browser_5 / $num_participants) * 100, 2);
$perc_browser_6 = round(($num_browser_6 / $num_participants) * 100, 2);
$perc_browser_7 = round(($num_browser_7 / $num_participants) * 100, 2);
$perc_browser_8 = round(($num_browser_8 / $num_participants) * 100, 2);
$perc_browser_9 = round(($num_browser_9 / $num_participants) * 100, 2);
$perc_browser_10 = round(($num_browser_10 / $num_participants) * 100, 2);
$perc_browser_11 = round(($num_browser_11 / $num_participants) * 100, 2);
$perc_browser_12 = round(($num_browser_12 / $num_participants) * 100, 2);

$perc_mailclient_0 = round(($num_mailclient_0 / $num_participants) * 100, 2);
$perc_mailclient_1 = round(($num_mailclient_1 / $num_participants) * 100, 2);
$perc_mailclient_2 = round(($num_mailclient_2 / $num_participants) * 100, 2);
$perc_mailclient_3 = round(($num_mailclient_3 / $num_participants) * 100, 2);
$perc_mailclient_4 = round(($num_mailclient_4 / $num_participants) * 100, 2);
$perc_mailclient_5 = round(($num_mailclient_5 / $num_participants) * 100, 2);
$perc_mailclient_6 = round(($num_mailclient_6 / $num_participants) * 100, 2);
$perc_mailclient_7 = round(($num_mailclient_7 / $num_participants) * 100, 2);
$perc_mailclient_8 = round(($num_mailclient_8 / $num_participants) * 100, 2);
$perc_mailclient_9 = round(($num_mailclient_9 / $num_participants) * 100, 2);
$perc_mailclient_10 = round(($num_mailclient_10 / $num_participants) * 100, 2);
$perc_mailclient_11 = round(($num_mailclient_11 / $num_participants) * 100, 2);
$perc_mailclient_12 = round(($num_mailclient_12 / $num_participants) * 100, 2);

$perc_verschluesselungprivat = round(($num_verschluesselungprivat / $num_participants) * 100, 2);
$perc_verschluesselungdienstlich = round(($num_verschluesselungdienstlich / $num_participants) * 100, 2);

$perc_verschluesselungsartprivat_0 = round(($num_verschluesselungsartprivat_0 / $num_verschluesselungsartprivat) * 100, 2);
$perc_verschluesselungsartprivat_1 = round(($num_verschluesselungsartprivat_1 / $num_verschluesselungsartprivat) * 100, 2);
$perc_verschluesselungsartprivat_2 = round(($num_verschluesselungsartprivat_2 / $num_verschluesselungsartprivat) * 100, 2);
$perc_verschluesselungsartprivat_3 = round(($num_verschluesselungsartprivat_3 / $num_participants) * 100, 2);

$perc_verschluesselungsartdienstlich_0 = round(($num_verschluesselungsartdienstlich_0 / $num_verschluesselungsartdienstlich) * 100, 2);
$perc_verschluesselungsartdienstlich_1 = round(($num_verschluesselungsartdienstlich_1 / $num_verschluesselungsartdienstlich) * 100, 2);
$perc_verschluesselungsartdienstlich_2 = round(($num_verschluesselungsartdienstlich_2 / $num_verschluesselungsartdienstlich) * 100, 2);
$perc_verschluesselungsartdienstlich_3 = round(($num_verschluesselungsartdienstlich_3 / $num_participants) * 100, 2);

$perc_bewertung_0 = round(($num_bewertung_0 / $num_bewertung) * 100, 2);
$perc_bewertung_1 = round(($num_bewertung_1 / $num_bewertung) * 100, 2);
$perc_bewertung_2 = round(($num_bewertung_2 / $num_bewertung) * 100, 2);
$perc_bewertung_3 = round(($num_bewertung_3 / $num_bewertung) * 100, 2);
$perc_bewertung_4 = round(($num_bewertung_4 / $num_bewertung) * 100, 2);

$greatest_bewertung_int = max($num_bewertung_0, $num_bewertung_1, $num_bewertung_2, $num_bewertung_3, $num_bewertung_4);
$greatest_bewertung = "";
switch ($greatest_bewertung_int) {
  case $num_bewertung_0: $greatest_bewertung = "Sehr gut"; break;
  case $num_bewertung_1: $greatest_bewertung = "Gut"; break;
  case $num_bewertung_2: $greatest_bewertung = "Befriedigend"; break;
  case $num_bewertung_3: $greatest_bewertung = "Schlecht"; break;
  case $num_bewertung_4: $greatest_bewertung = "Unbrauchbar"; break;
  default: "Keine Bewertung vorhanden"; break;
}
?>
<?php
echo "      <p>
        Bisher haben insgesamt <em>$num_participants</em> Personen teilgenommen,
        mit einer Gesamtzahl von <em>$num_devices</em> Geräten.
        Die Umfrage wurde am öftesten mit <em>" . $greatest_bewertung . "</em> bewertet.
      </p>\n";

echo "      <details id='infos-teilnehmer' open>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Teilnehmern</summary>\n";
echo "        Männlich: $perc_geschlecht_0%<br />\n";
echo "        Weiblich: $perc_geschlecht_1%<br />\n";
echo "        Divers: $perc_geschlecht_2%\n";
echo "      </details>\n";

echo "      <details id='infos-altersbereiche'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Altersbereichen</summary>\n";
echo "        Minderjährig: $perc_altersbereich_0%<br />\n";
echo "        18 – 20 Jahre: $perc_altersbereich_1%<br />\n";
echo "        21 – 29 Jahre: $perc_altersbereich_2%<br />\n";
echo "        30 – 39 Jahre: $perc_altersbereich_3%<br />\n";
echo "        40 – 49 Jahre: $perc_altersbereich_4%<br />\n";
echo "        50 – 59 Jahre: $perc_altersbereich_5%<br />\n";
echo "        60 Jahre oder älter: $perc_altersbereich_6%\n";
echo "      </details>\n";

echo "      <details id='infos-berufsfelder'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Berufsfeldern</summary>\n";
echo "        Labor: $perc_berufsfeld_0%<br />\n";
echo "        Handwerk: $perc_berufsfeld_1%<br />\n";
echo "        IT & Elektronik: $perc_berufsfeld_2%<br />\n";
echo "        Kaufmännisch: $perc_berufsfeld_3%<br />\n";
echo "        Gesundheit & Pflege: $perc_berufsfeld_4%<br />\n";
echo "        Sonstiges: $perc_berufsfeld_5%\n";
echo "      </details>\n";

echo "      <details id='infos-familienstand'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zum Familienstand</summary>\n";
echo "        Ledig: $perc_familienstand_0%<br />\n";
echo "        Getrennt: $perc_familienstand_1%<br />\n";
echo "        Geschieden: $perc_familienstand_2%<br />\n";
echo "        Verwitwet: $perc_familienstand_3%<br />\n";
echo "        Verheiratet: $perc_familienstand_4%\n";
echo "      </details>\n";

echo "      <details id='infos-bildungsstand'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zum Bildungsstand</summary>\n";
echo "        Kein Abschluss: $perc_bildungsstand_0%<br />\n";
echo "        Qualifizierter Hauptschulabschluss: $perc_bildungsstand_1%<br />\n";
echo "        Mittlere Reife: $perc_bildungsstand_2%<br />\n";
echo "        Fachabitur: $perc_bildungsstand_3%<br />\n";
echo "        Allgemeines Abitur: $perc_bildungsstand_4%<br />\n";
echo "        Studium ohne Abschluss: $perc_bildungsstand_5%<br />\n";
echo "        Bachelor: $perc_bildungsstand_6%<br />\n";
echo "        Diplom: $perc_bildungsstand_7%<br />\n";
echo "        Master: $perc_bildungsstand_8%<br />\n";
echo "        Promotion: $perc_bildungsstand_9%<br />\n";
echo "        Professur: $perc_bildungsstand_10%\n";
echo "      </details>\n";

echo "      <details id='infos-geraetearten'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Gerätearten</summary>\n";
echo "        Desktop PC: $perc_geraeteart_0%<br />\n";
echo "        Laptop: $perc_geraeteart_1%<br />\n";
echo "        Smartphone: $perc_geraeteart_2%<br />\n";
echo "        Tablet: $perc_geraeteart_3%<br />\n";
echo "        Smart TV: $perc_geraeteart_4%<br />\n";
echo "        Smartwatch: $perc_geraeteart_5%<br />\n";
echo "        Spielekonsole: $perc_geraeteart_6%\n";
echo "      </details>\n";

echo "      <details id='infos-nutzungsgebiete'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Nutzungsgebieten der Geräte</summary>\n";
echo "        Arbeit: $perc_nutzungsgebiet_0%<br />\n";
echo "        Surfen im Internet: $perc_nutzungsgebiet_1%<br />\n";
echo "        Online-Shopping: $perc_nutzungsgebiet_2%<br />\n";
echo "        Videos/Filme/Serien schauen: $perc_nutzungsgebiet_3%<br />\n";
echo "        Spielen: $perc_nutzungsgebiet_4%<br />\n";
echo "        Gesundheitsmonitoring: $perc_nutzungsgebiet_5%\n";
echo "      </details>\n";

echo "      <details id='infos-nutzungsdauer'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zur Nutzungsdauer der Geräte</summary>\n";
echo "        Unter 1 Stunde: $perc_nutzungsdauer_0%<br />\n";
echo "        1-3 Stunden: $perc_nutzungsdauer_1%<br />\n";
echo "        3-5 Stunden: $perc_nutzungsdauer_2%<br />\n";
echo "        5-7 Stunden: $perc_nutzungsdauer_3%<br />\n";
echo "        7-8 Stunden: $perc_nutzungsdauer_4%<br />\n";
echo "        Über 8 Stunden: $perc_nutzungsdauer_5%\n";
echo "      </details>\n";

echo "      <details id='infos-betriebssysteme'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Betriebssystemen</summary>\n";
echo "        Windows: $perc_betriebssystem_0%<br />\n";
echo "        macOS: $perc_betriebssystem_1%<br />\n";
echo "        Linux: $perc_betriebssystem_2%<br />\n";
echo "        BSD: $perc_betriebssystem_3%<br />\n";
echo "        iOS: $perc_betriebssystem_4%<br />\n";
echo "        iPadOS: $perc_betriebssystem_5%<br />\n";
echo "        Android: $perc_betriebssystem_6%<br />\n";
echo "        Firefox OS: $perc_betriebssystem_7%<br />\n";
echo "        Windows Phone: $perc_betriebssystem_8%<br />\n";
echo "        Tizen OS: $perc_betriebssystem_9%\n";
echo "      </details>\n";

echo "      <details id='infos-browser'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Browsern</summary>\n";
echo "        Brave: $perc_browser_0%<br />\n";
echo "        Chrome: $perc_browser_1%<br />\n";
echo "        Chromium: $perc_browser_2%<br />\n";
echo "        Edge: $perc_browser_3%<br />\n";
echo "        Epiphany (GNOME Web): $perc_browser_4%<br />\n";
echo "        Firefox: $perc_browser_5%<br />\n";
echo "        Internet Explorer: $perc_browser_6%<br />\n";
echo "        Konqueror: $perc_browser_7%<br />\n";
echo "        Opera: $perc_browser_8%<br />\n";
echo "        Safari: $perc_browser_9%<br />\n";
echo "        Tor Browser: $perc_browser_10%<br />\n";
echo "        Vivaldi: $perc_browser_11%\n";
echo "      </details>\n";

echo "      <details id='infos-mailclients'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zu den Mailclients</summary>\n";
echo "        Apple Mail: $perc_mailclient_0%<br />\n";
echo "        Claws Mail: $perc_mailclient_1%<br />\n";
echo "        eM Client: $perc_mailclient_2%<br />\n";
echo "        Evolution: $perc_mailclient_3%<br />\n";
echo "        FairEmail: $perc_mailclient_4%<br />\n";
echo "        Geary: $perc_mailclient_5%<br />\n";
echo "        Google Mail-App: $perc_mailclient_6%<br />\n";
echo "        K-9 Mail: $perc_mailclient_7%<br />\n";
echo "        Outlook: $perc_mailclient_8%<br />\n";
echo "        Spark: $perc_mailclient_9%<br />\n";
echo "        Thunderbird: $perc_mailclient_10%<br />\n";
echo "        Weboberfläche: $perc_mailclient_11%\n";
echo "      </details>\n";

echo "      <details id='infos-mailverschluesselung'>\n";
echo "        <hr />\n";
echo "        <summary>Infos zur E-Mail-Verschlüsselung</summary>\n";
echo "        Keine Verschlüsselung: " . 100 - $perc_verschluesselungprivat - $perc_verschluesselungdienstlich . "%<br />\n";
echo "        Privat verschlüsselte Mails: $perc_verschluesselungprivat%<br />\n";
echo "        Dienstlich verschlüsselte Mails: $perc_verschluesselungdienstlich%<br />\n";
echo "      </details>\n";

echo "      <details id='infos-mailverschluesselung-privat'>\n";
echo "        <hr />\n";
echo "        <summary>Private Verschlüsselungstechnologien</summary>\n";
echo "        PGP: $perc_verschluesselungsartprivat_0%<br />\n";
echo "        S/MIME: $perc_verschluesselungsartprivat_1%<br />\n";
echo "        Spezialisierter E-Mail-Provider: $perc_verschluesselungsartprivat_2%<br />\n";
echo "      </details>\n";

echo "      <details id='infos-mailverschluesselung-dienstlich'>\n";
echo "        <hr />\n";
echo "        <summary>Dienstliche Verschlüsselungstechnologien</summary>\n";
echo "        PGP: $perc_verschluesselungsartdienstlich_0%<br />\n";
echo "        S/MIME: $perc_verschluesselungsartdienstlich_1%<br />\n";
echo "        Spezialisierter E-Mail-Provider: $perc_verschluesselungsartdienstlich_2%<br />\n";
echo "      </details>\n";
?>
<?php
// Anzahl der genutzten Smartphones anzeigen und ermitteln
echo "      <h3>Anzahl Smartphone-Benutzer:</h3>\n";
echo "      <p>$num_geraeteart_2</p>\n";

// Prozentsatz der Smartphones anteilsmäßig von allen Geräten
if ($num_devices > 0) {
  $perc_geraeteart_2 = round(($num_geraeteart_2 / $num_devices) * 100, 2);

  echo "      <p>$perc_geraeteart_2% der Teilnehmer benutzen ein Smartphone.\n";
} else {
  echo "      <p class='error'>Bisher hat niemand an dieser Umfrage teilgenommen, der ein digitales Gerät benutzt.</p>\n";
}
?>
<?php
// Anzahl und Anteil der Benutzer von Linux-Distributionen und BSD-Varianten ermitteln und anzeigen
$perc_linux = 0;
$perc_bsd = 0;

if ($num_devices > 0) {
  $perc_linux = round(($num_betriebssystem_2 / $num_devices) * 100, 2);
  $perc_bsd = round(($num_betriebssystem_3 / $num_devices) * 100, 2);

  echo "      <p>Linux-Benutzer: $num_betriebssystem_2 / $perc_linux%</p>\n";
  echo "      <p>BSD-Benutzer: $num_betriebssystem_3 / $perc_bsd%</p>\n";
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