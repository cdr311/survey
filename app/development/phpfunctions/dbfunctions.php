<?php

//----- grundlegende Datenbank-Funktionen
  function connectToDatabase(){
    try {
      $db = new PDO('mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
      return $db;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
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

//Convenience Funktionen

  function printTable($tableName){
    $results = executeQuery("SELECT * FROM $tableName;");

    echo $tableName;
    echo "<pre>";
    print_r($results);
    echo "<post>";
  }

  function insertTaetigkeitenSessionArrayIntoNutzungsgebiet($arrayName, $valueGeraeteart){
    if(in_array($valueGeraeteart, $_SESSION['benutzteGeraete'])){ //Taetigkeiten ausgefuellt aber danach Geraet entfernt -> ignoriert Taetigkeiten
      if(isset($_SESSION[$arrayName])){
        foreach($_SESSION[$arrayName] as $val){
          executeQuery("INSERT INTO Nutzungsgebiet VALUES ('{$_SESSION['id']}', '$val', '$valueGeraeteart');");
        }
      }
    }
  }

  function insertNutzungszeitSessionValueIntoNutzungsdauer($sessionVariableName, $valueGeraeteart){
    if(in_array($valueGeraeteart, $_SESSION['benutzteGeraete'])){ //Nutzungszeit ausgefuellt aber danach Geraet entfernt -> ignoriert Nutzungszeit
      if(isset($_SESSION[$sessionVariableName])){
        executeQuery("INSERT INTO Nutzungsdauer VALUES ('{$_SESSION['id']}', '{$_SESSION[$sessionVariableName]}', '$valueGeraeteart');");
      }
    }
  }

  function insertBetriebssystemSessionValueIntoBetriebssystem($sessionVariableName, $valueGeraeteart){
    if(in_array($valueGeraeteart, $_SESSION['benutzteGeraete'])){ //Betriebssystem ausgefuellt aber danach Geraet entfernt -> ignoriert Betriebssystem
      if(isset($_SESSION[$sessionVariableName])){
        executeQuery("INSERT INTO Betriebssystem VALUES ('{$_SESSION['id']}', '{$_SESSION[$sessionVariableName]}', '$valueGeraeteart');");
      }
    }
  }

  function saveSessionVariablesIntoDB(){
    fillTeilnehmerDaten();
    fillGeraeteart();
    fillNutzungsgebiet();
    fillNutzungsdauer();
    fillBetriebssystem();
    fillBrowser();
    fillMailclient();
    fillVerschluesselungPrivat();
    fillVerschluesselungDienstlich();
    fillBewertung();
  }


//----- Fuellmethoden fuer einzelne Tabellen

  function fillTeilnehmerDaten(){
    executeQuery("INSERT INTO TeilnehmerDaten VALUES ('{$_SESSION['id']}', '{$_SESSION['geschlecht']}', '{$_SESSION['alter']}', '{$_SESSION['arbeit']}', '{$_SESSION['familie']}', '{$_SESSION['bildung']}');");
  }

  function fillGeraeteart(){
    foreach($_SESSION['benutzteGeraete'] as $val){
      executeQuery("INSERT INTO Geraeteart VALUES ('{$_SESSION['id']}', '$val');");
    }
  }

  function fillNutzungsgebiet(){
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenDesktop', '0');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenLaptop', '1');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenSmartphone', '2');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenTablet', '3');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenSmartTV', '4');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenSmartwatch', '5');
    insertTaetigkeitenSessionArrayIntoNutzungsgebiet('taetigkeitenSpielekonsole', '6');
  }

  function fillNutzungsdauer(){
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitDesktop', '0');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitLaptop', '1');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitSmartphone', '2');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitTablet', '3');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitSmartTV', '4');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitSmartwatch', '5');
    insertNutzungszeitSessionValueIntoNutzungsdauer('nutzungszeitSpielekonsole', '6');
  }

  function fillBetriebssystem(){
    insertBetriebssystemSessionValueIntoBetriebssystem('OSDesktop', 0);
    insertBetriebssystemSessionValueIntoBetriebssystem('OSLaptop', 1);
    insertBetriebssystemSessionValueIntoBetriebssystem('OSSmartphone', 2);
    insertBetriebssystemSessionValueIntoBetriebssystem('OSTablet', 3);
    insertBetriebssystemSessionValueIntoBetriebssystem('OSSmartTV', 4);
  }

  function fillBrowser(){
    executeQuery("INSERT INTO Browser VALUES ('{$_SESSION['id']}', '{$_SESSION['Browser']}');");
  }

  function fillMailclient(){
    foreach($_SESSION['mailprogramm'] as $val){
      executeQuery("INSERT INTO Mailclient VALUES ('{$_SESSION['id']}', '$val');");
    }
  }

  function fillVerschluesselungPrivat(){
    if($_SESSION['verschluesselungPrivat'] == 1){
      executeQuery("INSERT INTO VerschluesselungPrivat VALUES ('{$_SESSION['id']}', '{$_SESSION['verschluesselungPrivat']}', '{$_SESSION['verschluesselungPrivatMethode']}');");
    }else{
      executeQuery("INSERT INTO VerschluesselungPrivat VALUES ('{$_SESSION['id']}', '{$_SESSION['verschluesselungPrivat']}', NULL);");
    }
  }

  function fillVerschluesselungDienstlich(){
    if($_SESSION['verschluesselungDienstlich'] == 1){
      executeQuery("INSERT INTO VerschluesselungDienstlich VALUES ('{$_SESSION['id']}', '{$_SESSION['verschluesselungDienstlich']}', '{$_SESSION['verschluesselungDienstlichMethode']}');");
    }else{
      executeQuery("INSERT INTO VerschluesselungDienstlich VALUES ('{$_SESSION['id']}', '{$_SESSION['verschluesselungDienstlich']}', NULL);");
    }
  }

  function fillBewertung(){
    executeQuery("INSERT INTO Bewertung VALUES ('{$_SESSION['id']}', '{$_SESSION['bewertung']}');");
  }

?>
