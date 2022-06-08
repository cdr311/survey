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

  //Eigegeben auf Seite 1

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

  //Eigegeben auf Seite 2

  if(isset($_SESSION['benutzteGeraete'])){
    printSessionArray($_SESSION['benutzteGeraete'], "benutzteGeraete");
  }

  if(isset($_SESSION['taetigkeitenDesktop'])){
    printSessionArray($_SESSION['taetigkeitenDesktop'], "taetigkeitenDesktop");
  }

  if(isset($_SESSION['taetigkeitenLaptop'])){
    printSessionArray($_SESSION['taetigkeitenLaptop'], "taetigkeitenLaptop");
  }

  if(isset($_SESSION['taetigkeitenSmartphone'])){
    printSessionArray($_SESSION['taetigkeitenSmartphone'], "taetigkeitenSmartphone");
  }

  if(isset($_SESSION['taetigkeitenTablet'])){
    printSessionArray($_SESSION['taetigkeitenTablet'], "taetigkeitenTablet");
  }

  if(isset($_SESSION['taetigkeitenSmartTV'])){
    printSessionArray($_SESSION['taetigkeitenSmartTV'], "taetigkeitenSmartTV");
  }

  if(isset($_SESSION['taetigkeitenSmartwatch'])){
    printSessionArray($_SESSION['taetigkeitenSmartwatch'], "taetigkeitenSmartwatch");
  }

  if(isset($_SESSION['taetigkeitenSpielekonsole'])){
    printSessionArray($_SESSION['taetigkeitenSpielekonsole'], "taetigkeitenSpielekonsole");
  }



}

//-----------------------------------------

  function printSessionArray($sessionArray, $identifier){
    echo $identifier." : {";
    foreach($sessionArray as $val) {
      echo $val.", ";
    }
    echo "}";
  }

//-----------------------------------------

function saveIntoSessionVariablesPage2(){

  //Eigegeben auf Seite 1
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

function saveIntoSessionVariablesPage3(){

  //Eigegeben auf Seite 2
  if(isset($_POST['benutzteGeraete'])){
    $_SESSION['benutzteGeraete'] = $_POST['benutzteGeraete'];
  }
  if(isset($_POST['taetigkeitenDesktop'])){
  $_SESSION['taetigkeitenDesktop'] = $_POST['taetigkeitenDesktop'];
  }
  if(isset($_POST['taetigkeitenLaptop'])){
  $_SESSION['taetigkeitenLaptop'] = $_POST['taetigkeitenLaptop'];
  }
  if(isset($_POST['taetigkeitenSmartphone'])){
  $_SESSION['taetigkeitenSmartphone'] = $_POST['taetigkeitenSmartphone'];
  }
  if(isset($_POST['taetigkeitenTablet'])){
  $_SESSION['taetigkeitenTablet'] = $_POST['taetigkeitenTablet'];
  }
  if(isset($_POST['taetigkeitenSmartTV'])){
  $_SESSION['taetigkeitenSmartTV'] = $_POST['taetigkeitenSmartTV'];
  }
  if(isset($_POST['taetigkeitenSmartwatch'])){
  $_SESSION['taetigkeitenSmartwatch'] = $_POST['taetigkeitenSmartwatch'];
  }
  if(isset($_POST['taetigkeitenSpielekonsole'])){
  $_SESSION['taetigkeitenSpielekonsole'] = $_POST['taetigkeitenSpielekonsole'];
  }
}

 ?>
