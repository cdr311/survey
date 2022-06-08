<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta name="author" content="cdr311" charset="utf-8">

    <title>survey — Auswertung</title>

    <link rel="icon" type="image/x-icon" href="../images/favicon.svg"/>
    <!-- Die Emoji-Grafik (https://github.com/twitter/twemoji/blob/master/assets/svg/1f4cb.svg) stammt vom Projekt Twemoji (https://twemoji.twitter.com/). Sie ist Copyright von Twitter und anderen Mitwirkenden und unter der CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/) lizensiert. Es wurden keine Veränderungen am Material vorgenommen. -->
    <link rel="stylesheet" type="text/css" href="../stylesheets/evaluation.css"/>
  </head>
  <body>
    <h1>Auswertung</h1>
<?php
try {
  $dbh = new PDO('mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);

  /* foreach ($dbh->query('SELECT * FROM LinuxDistributionKey') as $row) {
    print_r($row);
  } */

  //$dbh = null;
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>

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
echo "    <h3>Anzahl Teilnehmer:</h3>\n";
$query = $dbh->query("SELECT COUNT(TeilnehmerID) FROM TeilnehmerDaten;");
//print_r($query);
foreach($query as $row) {
  //print_r($row);
  $num_participants = $row[0];
}
echo "    <p>$num_participants</p>\n";
?>

<?php
// Anzahl aller genutzten Geräte ermitteln
$num_devices = 0;
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart;");
foreach ($query as $row) {
  $num_devices = $row[0];
}
echo "    <p>Gesamtanzahl aller genutzten Geräte: $num_devices";

// Anzahl der genutzten Smartphone anzeigen und ermitteln
$num_smartphone_users = 0;
echo "    <h3>Anzahl Smartphone-Benutzer:</h3>\n";
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart WHERE Geraeteart = 2;");
foreach($query as $row) {
  $num_smartphone_users = $row[0];
}
echo "    <p>$num_smartphone_users</p>\n";

// Prozentsatz der Smartphones anteilsmäßig von allen Geräten
$perc_smartphone = ($num_smartphone_users / $num_devices) * 100;
echo "    <p>$perc_smartphone% der Teilnehmer benutzen ein Smartphone."
?>

<?php
// Gesamtanzahl benutzter Geräte
echo "    <h3>So viele Geräte werden von allen Teilnehmern insgesamt benutzt:</h3>\n";
$query = $dbh->query("SELECT COUNT(Geraeteart) FROM Geraeteart;");
foreach($query as $row) {
  echo "    <p>$row[0]</p>\n";
}
?>

<?php
$dbh = null;
?>
  </body>
</html>