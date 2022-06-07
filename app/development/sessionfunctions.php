<?php

//Funktionen, die fuer das Session-Management benoetigt werden

function generateSessionID(){
  $_SESSION['id'] = rand(1000,1000000000);
  checkIfIdAlreadyUsed();
}

function checkIfIdAlreadyUsed(){
  $tmp = $_SESSION['id'];
  $results = executeQuery("SELECT TeilnehmerID FROM TeilnehmerDaten WHERE TeilnehmerID = $tmp");
  print_r($results);
  if ($results) {
    generateSessionID();
  }
}

 ?>
