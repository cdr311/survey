<?php

//Funktionen, die fuer das Session-Management benoetigt werden

function generateSessionID(){
  $_SESSION['id'] = rand(1000,1000000000);
  // checkIfIdAlreadyUsed();
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

  //Eigegeben auf Seite 3

  if(isset($_SESSION['nutzungszeitDesktop'])){
    echo "nutzungszeitDesktop: ".$_SESSION['nutzungszeitDesktop'];
  }

  if(isset($_SESSION['nutzungszeitLaptop'])){
    echo "nutzungszeitLaptop: ".$_SESSION['nutzungszeitLaptop'];
  }

  if(isset($_SESSION['nutzungszeitSmartphone'])){
    echo "nutzungszeitSmartphone: ".$_SESSION['nutzungszeitSmartphone'];
  }

  if(isset($_SESSION['nutzungszeitTablet'])){
    echo "nutzungszeitTablet: ".$_SESSION['nutzungszeitTablet'];
  }

  if(isset($_SESSION['nutzungszeitSmartTV'])){
    echo "nutzungszeitSmartTV: ".$_SESSION['nutzungszeitSmartTV'];
  }

  if(isset($_SESSION['nutzungszeitSmartwatch'])){
    echo "nutzungszeitSmartwatch: ".$_SESSION['nutzungszeitSmartwatch'];
  }

  if(isset($_SESSION['nutzungszeitSpielekonsole'])){
    echo "nutzungszeitSpielekonsole: ".$_SESSION['nutzungszeitSpielekonsole'];
  }

  //Eigegeben auf Seite 4

  if(isset($_SESSION['OSDesktop'])){
    echo "OSDesktop: ".$_SESSION['OSDesktop'];
  }

  if(isset($_SESSION['OSLaptop'])){
    echo "OSLaptop: ".$_SESSION['OSLaptop'];
  }

  if(isset($_SESSION['OSSmartphone'])){
    echo "OSSmartphone: ".$_SESSION['OSSmartphone'];
  }

  if(isset($_SESSION['OSTablet'])){
    echo "OSTablet: ".$_SESSION['OSTablet'];
  }

  if(isset($_SESSION['OSSmartTV'])){
    echo "OSSmartTV: ".$_SESSION['OSSmartTV'];
  }

  if(isset($_SESSION['OSSmartwatch'])){
    echo "OSSmartwatch: ".$_SESSION['OSSmartwatch'];
  }

  if(isset($_SESSION['Browser'])){
    echo "Browser: ".$_SESSION['Browser'];
  }

  //Eigegeben auf Seite 5

  if(isset($_SESSION['mailprogramm'])){
    printSessionArray($_SESSION['mailprogramm'], "mailprogramm");
  }

  if(isset($_SESSION['verschluesselungPrivat'])){
    echo "verschluesselungPrivat: ".$_SESSION['verschluesselungPrivat'];
  }

  if(isset($_SESSION['verschluesselungPrivatMethode'])){
    echo "verschluesselungPrivatMethode: ".$_SESSION['verschluesselungPrivatMethode'];
  }

  if(isset($_SESSION['verschluesselungDienstlich'])){
    echo "verschluesselungDienstlich: ".$_SESSION['verschluesselungDienstlich'];
  }

  if(isset($_SESSION['verschluesselungDienstlichMethode'])){
    echo "verschluesselungDienstlichMethode: ".$_SESSION['verschluesselungDienstlichMethode'];
  }

  //Eigegeben auf Seite 6

  if(isset($_SESSION['bewertung'])){
    echo "bewertung: ".$_SESSION['bewertung'];
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

function saveIntoSessionVariablesPage1(){
  saveFromPostIntoSessionFromPage2();
}

function saveIntoSessionVariablesPage2(){

  saveFromPostIntoSessionFromPage1();
  saveFromPostIntoSessionFromPage3();


}

function saveIntoSessionVariablesPage3(){

  saveFromPostIntoSessionFromPage2();
  saveFromPostIntoSessionFromPage4();

}

function saveIntoSessionVariablesPage4(){

  saveFromPostIntoSessionFromPage3();
  saveFromPostIntoSessionFromPage5();

}

function saveIntoSessionVariablesPage5(){

  saveFromPostIntoSessionFromPage4();
  saveFromPostIntoSessionFromPage6();

}

function saveIntoSessionVariablesPage6(){

  saveFromPostIntoSessionFromPage5();

}

function saveIntoSessionVariablesPage7(){

  saveFromPostIntoSessionFromPage6();

}

//-----------------------------------------

function saveFromPostIntoSessionFromPage1(){

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

function saveFromPostIntoSessionFromPage2(){

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

function saveFromPostIntoSessionFromPage3(){

  //Eigegeben auf Seite 3
  if(isset($_POST['nutzungszeitDesktop'])){
  $_SESSION['nutzungszeitDesktop'] = $_POST['nutzungszeitDesktop'];
  }
  if(isset($_POST['nutzungszeitLaptop'])){
  $_SESSION['nutzungszeitLaptop'] = $_POST['nutzungszeitLaptop'];
  }
  if(isset($_POST['nutzungszeitSmartphone'])){
  $_SESSION['nutzungszeitSmartphone'] = $_POST['nutzungszeitSmartphone'];
  }
  if(isset($_POST['nutzungszeitTablet'])){
  $_SESSION['nutzungszeitTablet'] = $_POST['nutzungszeitTablet'];
  }
  if(isset($_POST['nutzungszeitSmartTV'])){
  $_SESSION['nutzungszeitSmartTV'] = $_POST['nutzungszeitSmartTV'];
  }
  if(isset($_POST['nutzungszeitSmartwatch'])){
  $_SESSION['nutzungszeitSmartwatch'] = $_POST['nutzungszeitSmartwatch'];
  }
  if(isset($_POST['nutzungszeitSpielekonsole'])){
  $_SESSION['nutzungszeitSpielekonsole'] = $_POST['nutzungszeitSpielekonsole'];
  }

}

function saveFromPostIntoSessionFromPage4(){

  //Eigegeben auf Seite 4
  if(isset($_POST['OSDesktop'])){
  $_SESSION['OSDesktop'] = $_POST['OSDesktop'];
  }
  if(isset($_POST['OSLaptop'])){
  $_SESSION['OSLaptop'] = $_POST['OSLaptop'];
  }
  if(isset($_POST['OSSmartphone'])){
  $_SESSION['OSSmartphone'] = $_POST['OSSmartphone'];
  }
  if(isset($_POST['OSTablet'])){
  $_SESSION['OSTablet'] = $_POST['OSTablet'];
  }
  if(isset($_POST['OSSmartTV'])){
  $_SESSION['OSSmartTV'] = $_POST['OSSmartTV'];
  }
  if(isset($_POST['OSSmartwatch'])){
  $_SESSION['OSSmartwatch'] = $_POST['OSSmartwatch'];
  }
  if(isset($_POST['Browser'])){
  $_SESSION['Browser'] = $_POST['Browser'];
  }

}

function saveFromPostIntoSessionFromPage5(){

  //Eigegeben auf Seite 5
  if(isset($_POST['mailprogramm'])){
  $_SESSION['mailprogramm'] = $_POST['mailprogramm'];
  }
  if(isset($_POST['verschluesselungPrivat'])){
  $_SESSION['verschluesselungPrivat'] = $_POST['verschluesselungPrivat'];
  }
  if(isset($_POST['verschluesselungPrivatMethode'])){
  $_SESSION['verschluesselungPrivatMethode'] = $_POST['verschluesselungPrivatMethode'];
  }
  if(isset($_POST['verschluesselungDienstlich'])){
  $_SESSION['verschluesselungDienstlich'] = $_POST['verschluesselungDienstlich'];
  }
  if(isset($_POST['verschluesselungDienstlichMethode'])){
  $_SESSION['verschluesselungDienstlichMethode'] = $_POST['verschluesselungDienstlichMethode'];
  }

}

function saveFromPostIntoSessionFromPage6(){

  //Eigegeben auf Seite 6
  if(isset($_POST['bewertung'])){
  $_SESSION['bewertung'] = $_POST['bewertung'];
  }

}


 ?>
