<?php

//----- grundlegende Datenbank-Funktionen
  function connectToDatabase(){
    $db = new PDO('mysql:dbname=survey;host=mysql', 'webdev', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    return $db;
  }

  function closeDatabaseConnection($db){
    $db.close();
  }

  function executeQuery($inputQuery){
    $db = connectToDatabase();

    $query = $db->query($inputQuery);

    $results = $query->fetchAll();
    return $results;

    closeDatabaseConnection($db);
  }

?>
