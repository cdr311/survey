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
      geschlechtSelected = true; // checked
    }
  };

  var alterRadios = document.getElementsByName("alter");
  var alterSelected = false;

  for (var i = 0; i < alterRadios.length; i++) {
    if (alterRadios[i].checked) {
      alterSelected = true; // checked
    }
  };

  var arbeitRadios = document.getElementsByName("arbeit");
  var arbeitSelected = false;

  for (var i = 0; i < arbeitRadios.length; i++) {
    if (arbeitRadios[i].checked) {
      arbeitSelected = true; // checked
    }
  };

  var familieRadios = document.getElementsByName("familie");
  var familieSelected = false;

  for (var i = 0; i < familieRadios.length; i++) {
    if (familieRadios[i].checked) {
      familieSelected = true; // checked
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
  return true;
}

function validateLeavingPage5(){
  return true;
}

function validateLeavingPage6(){
  return true;
}
