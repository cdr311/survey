<?php

//Funktionen, die fuer das Session-Management benoetigt werden

function generateSessionID(){
  $_SESSION['id'] = rand(1000,1000000000);
  checkIfIdAlreadyUsed();
}

function checkIfIdAlreadyUsed(){
  $tmp = $_SESSION['id'];
  $results = executeQuery("SELECT TeilnehmerID FROM TeilnehmerDaten WHERE TeilnehmerID = $tmp");
  //print_r($results);
  if ($results) {
    generateSessionID();
  }
}

function printSessionVariables(){
  if(isset($_SESSION['id'])){
    echo "SESSION ID: ".$_SESSION['id'];
  }

  if(isset($_SESSION['geschlecht'])){
    echo "geschlecht: ".$_SESSION['geschlecht'];
  }

  if(isset($_SESSION['alter'])){
    echo "alter: ".$_SESSION['alter'];
  }

  if(isset($_SESSION['arbeit'])){
    echo "arbeit: ".$_SESSION['arbeit'];
  }

}

 ?>
