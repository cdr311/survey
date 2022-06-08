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

  if(isset($_SESSION['familie'])){
    echo "familie: ".$_SESSION['familie'];
  }

  if(isset($_SESSION['bildung'])){
    echo "bildung: ".$_SESSION['bildung'];
  }

}

//-----------------------------------------

function saveIntoSessionVariablesPage2(){
  if(isset($_POST['geschlecht'])){
  $_SESSION['geschlecht'] = $_POST['geschlecht'];
  }
  if(isset($_POST['alter'])){
  $_SESSION['alter'] = $_POST['alter'];
  }
  if(isset($_POST['arbeit'])){
  $_SESSION['arbeit'] = $_POST['arbeit'];
  }
  if(isset($_POST['familie'])){
  $_SESSION['familie'] = $_POST['familie'];
  }
  if(isset($_POST['bildung'])){
  $_SESSION['bildung'] = $_POST['bildung'];
  }
}

 ?>
