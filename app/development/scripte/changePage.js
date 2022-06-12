function submitForm(action, formId, leavingPage) {

    if(validate(leavingPage)){
      var form = document.getElementById(formId);
      form.action = action;
      form.submit();
    }


  }

function validate(leavingPage){
  //alert(leavingPage);
  switch (leavingPage) {
    case 1: return validateLeavingPage1(); break;
    case 2: return validateLeavingPage2(); break;
    case 3: return validateLeavingPage3(); break;
    case 4: return validateLeavingPage4(); break;
    case 5: return validateLeavingPage5(); break;
    case 6: return validateLeavingPage6(); break;


    default: alert("switch error");

  }


}

function validateLeavingPage1(){
  var geschlechtRadios = document.getElementsByName("geschlecht");
  var geschlechtSelected = false;

  for (var i = 0; i < geschlechtRadios.length; i++) {
    if (geschlechtRadios[i].checked) {
      geschlechtSelected = true;
    }
  };

  var alterRadios = document.getElementsByName("alter");
  var alterSelected = false;

  for (var i = 0; i < alterRadios.length; i++) {
    if (alterRadios[i].checked) {
      alterSelected = true;
    }
  };

  var arbeitRadios = document.getElementsByName("arbeit");
  var arbeitSelected = false;

  for (var i = 0; i < arbeitRadios.length; i++) {
    if (arbeitRadios[i].checked) {
      arbeitSelected = true;
    }
  };

  var familieRadios = document.getElementsByName("familie");
  var familieSelected = false;

  for (var i = 0; i < familieRadios.length; i++) {
    if (familieRadios[i].checked) {
      familieSelected = true;
    }
  };


  if(!geschlechtSelected){
    alert("Geschlecht fehlt");
    return false;
  }

  if(!alterSelected){
    alert("Altersbereich fehlt");
    return false;
  }

  if(!arbeitSelected){
    alert("Berufsbereich fehlt");
    return false;
  }

  if(!familieSelected){
    alert("Familiäre Situation fehlt");
    return false;
  }

  return true;
}

function validateLeavingPage2(){
  return true;
}

function validateLeavingPage3(){
  return true;
}

function validateLeavingPage4(){
  var browserRadios = document.getElementsByName("Browser");
  var browserSelected = false;

  for (var i = 0; i < browserRadios.length; i++) {
    if (browserRadios[i].checked) {
      browserSelected = true;
    }
  };

  if(!browserSelected){
    alert("Browser fehlt");
    return false;
  }

  return true;
}

function validateLeavingPage5(){
  var mailprogrammCheckboxes = document.getElementsByName("mailprogramm[]");
  var mailprogrammSelected = false;

  for (var i = 0; i < mailprogrammCheckboxes.length; i++) {
    if (mailprogrammCheckboxes[i].checked) {
      mailprogrammSelected = true;
    }
  };

  var verschluesselungPrivatRadios = document.getElementsByName("verschluesselungPrivat");
  var verschluesselungPrivatSelected = false;

  for (var i = 0; i < verschluesselungPrivatRadios.length; i++) {
    if (verschluesselungPrivatRadios[i].checked) {
      verschluesselungPrivatSelected = true;
    }
  };

  var verschluesselungDienstlichRadios = document.getElementsByName("verschluesselungDienstlich");
  var verschluesselungDienstlichSelected = false;

  for (var i = 0; i < verschluesselungDienstlichRadios.length; i++) {
    if (verschluesselungDienstlichRadios[i].checked) {
      verschluesselungDienstlichSelected = true;
    }
  };

  if(!mailprogrammSelected){
    alert("mindestens 1 Mailprogramm auswählen");
    return false;
  }

  if(!verschluesselungPrivatSelected){
    alert("Verschlüsselung (Privat) fehlt");
    return false;
  }

  if(!verschluesselungDienstlichSelected){
    alert("Verschlüsselung (Dienstlich) fehlt");
    return false;
  }

  return true;
}

function validateLeavingPage6(){
  var bewertungRadios = document.getElementsByName("bewertung");
  var bewertungSelected = false;

  for (var i = 0; i < bewertungRadios.length; i++) {
    if (bewertungRadios[i].checked) {
      bewertungSelected = true;
    }
  };

  if(!bewertungSelected){
    alert("Bewertung fehlt");
    return false;
  }

  return true;
}
