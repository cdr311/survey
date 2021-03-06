function submitForm(action, formId, leavingPage) {

    if(validate(leavingPage)){
      var form = document.getElementById(formId);
      form.action = action;
      form.submit();
    }

  }

function validate(leavingPage){

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
    alert("Bitte geben Sie ein Geschlecht an.");
    return false;
  }

  if(!alterSelected){
    alert("Bitte geben Sie einen Altersbereich an.");
    return false;
  }

  if(!arbeitSelected){
    alert("Bitte geben Sie einen Berufsbereich an.");
    return false;
  }

  if(!familieSelected){
    alert("Bitte wählen Sie eine Familiäre Situation aus.");
    return false;
  }

  return true;
}

function validateLeavingPage2(){
  const pcChecks = document.getElementsByName("taetigkeitenDesktop[]");
  const laptopChecks = document.getElementsByName("taetigkeitenLaptop[]");
  const smartpChecks = document.getElementsByName("taetigkeitenSmartphone[]");
  const tabChecks = document.getElementsByName("taetigkeitenTablet[]");
  const smarttChecks = document.getElementsByName("taetigkeitenSmartTV[]");
  const smartwChecks = document.getElementsByName("taetigkeitenSmartwatch[]");
  const spielChecks = document.getElementsByName("taetigkeitenSpielekonsole[]");
  let pcSelected = false;
  let laptopSelected = false;
  let smartpSelected = false;
  let tabSelected = false;
  let smarttSelected = false;
  let smartwSelected = false;
  let spielSelected = false;

  for (let i = 0; i < pcChecks.length; i++) {
    if (pcChecks[i].checked) {
      pcSelected = true;
      break;
    }
  }

  for (let i = 0; i < laptopChecks.length; i++) {
    if (laptopChecks[i].checked) {
      laptopSelected = true;
      break;
    }
  }

  for (let i = 0; i < smartpChecks.length; i++) {
    if (smartpChecks[i].checked) {
      smartpSelected = true;
      break;
    }
  }

  for (let i = 0; i < tabChecks.length; i++) {
    if (tabChecks[i].checked) {
      tabSelected = true;
      break;
    }
  }

  for (let i = 0; i < smarttChecks.length; i++) {
    if (smarttChecks[i].checked) {
      smarttSelected = true;
      break;
    }
  }

  for (let i = 0; i < smartwChecks.length; i++) {
    if (smartwChecks[i].checked) {
      smartwSelected = true;
      break;
    }
  }

  for (let i = 0; i < spielChecks.length; i++) {
    if (spielChecks[i].checked) {
      spielSelected = true;
      break;
    }
  }

  if (sessionStorage.getItem("pc")) {
    if (!pcSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihren Desktop PC an.");
      return false;
    }
  }

  if (sessionStorage.getItem("laptop")) {
    if (!laptopSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihren Laptop an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartp")) {
    if (!smartpSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihr Smartphone an.");
      return false;
    }
  }

  if (sessionStorage.getItem("tab")) {
    if (!tabSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihr Tablet an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartt")) {
    if (!smarttSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihr Smart TV an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartw")) {
    if (!smartwSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihre Smartwatch an.");
      return false;
    }
  }

  if (sessionStorage.getItem("spiel")) {
    if (!spielSelected) {
      alert("Bitte geben Sie mindestens ein Nutzungsgebiet für Ihre Spielekonsole an.");
      return false;
    }
  }

  if (!pcSelected && !laptopSelected && !smartpSelected && !tabSelected && !smarttSelected && !smartwSelected && !spielSelected) {
    alert("Bitte wählen Sie mindestens ein Gerät.");
    return false;
  }

  return true;
}

function validateLeavingPage3(){
  const pcRadios = document.getElementsByName("nutzungszeitDesktop");
  const laptopRadios = document.getElementsByName("nutzungszeitLaptop");
  const smartpRadios = document.getElementsByName("nutzungszeitSmartphone");
  const tabRadios = document.getElementsByName("nutzungszeitTablet");
  const smarttRadios = document.getElementsByName("nutzungszeitSmartTV");
  const smartwRadios = document.getElementsByName("nutzungszeitSmartwatch");
  const spielRadios = document.getElementsByName("nutzungszeitSpielekonsole");
  let pcSelected = false;
  let laptopSelected = false;
  let smartpSelected = false;
  let tabSelected = false;
  let smarttSelected = false;
  let smartwSelected = false;
  let spielSelected = false;

  for (let i = 0; i < pcRadios.length; i++) {
    if (pcRadios[i].checked) {
      pcSelected = true;
      break;
    }
  }

  for (let i = 0; i < laptopRadios.length; i++) {
    if (laptopRadios[i].checked) {
      laptopSelected = true;
      break;
    }
  }

  for (let i = 0; i < smartpRadios.length; i++) {
    if (smartpRadios[i].checked) {
      smartpSelected = true;
      break;
    }
  }

  for (let i = 0; i < tabRadios.length; i++) {
    if (tabRadios[i].checked) {
      tabSelected = true;
      break;
    }
  }

  for (let i = 0; i < smarttRadios.length; i++) {
    if (smarttRadios[i].checked) {
      smarttSelected = true;
      break;
    }
  }

  for (let i = 0; i < smartwRadios.length; i++) {
    if (smartwRadios[i].checked) {
      smartwSelected = true;
      break;
    }
  }

  for (let i = 0; i < spielRadios.length; i++) {
    if (spielRadios[i].checked) {
      spielSelected = true;
      break;
    }
  }

  if (sessionStorage.getItem("pc")) {
    if (!pcSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihren Desktop PC an.");
      return false;
    }
  }

  if (sessionStorage.getItem("laptop")) {
    if (!laptopSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihren Laptop an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartp")) {
    if (!smartpSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihr Smartphone an.");
      return false;
    }
  }

  if (sessionStorage.getItem("tab")) {
    if (!tabSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihr Tablet an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartt")) {
    if (!smarttSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihr Smart TV an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartw")) {
    if (!smartwSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihre Smartwatch an.");
      return false;
    }
  }

  if (sessionStorage.getItem("spiel")) {
    if (!spielSelected) {
      alert("Bitte geben Sie die Nutzungsdauer für Ihre Spielekonsole an.");
      return false;
    }
  }

  return true;
}

function validateLeavingPage4(){
  const pcRadios = document.getElementsByName("OSDesktop");
  const laptopRadios = document.getElementsByName("OSLaptop");
  const smartpRadios = document.getElementsByName("OSSmartphone");
  const tabRadios = document.getElementsByName("OSTablet");
  const smarttRadios = document.getElementsByName("OSSmartTV");
  let pcSelected = false;
  let laptopSelected = false;
  let smartpSelected = false;
  let tabSelected = false;
  let smarttSelected = false;

  for (let i = 0; i < pcRadios.length; i++) {
    if (pcRadios[i].checked) {
      pcSelected = true;
      break;
    }
  }

  for (let i = 0; i < laptopRadios.length; i++) {
    if (laptopRadios[i].checked) {
      laptopSelected = true;
      break;
    }
  }

  for (let i = 0; i < smartpRadios.length; i++) {
    if (smartpRadios[i].checked) {
      smartpSelected = true;
      break;
    }
  }

  for (let i = 0; i < tabRadios.length; i++) {
    if (tabRadios[i].checked) {
      tabSelected = true;
      break;
    }
  }

  for (let i = 0; i < smarttRadios.length; i++) {
    if (smarttRadios[i].checked) {
      smarttSelected = true;
      break;
    }
  }

  if (sessionStorage.getItem("pc")) {
    if (!pcSelected) {
      alert("Bitte geben Sie ein Betriebssystem für Ihren Desktop PC an.");
      return false;
    }
  }

  if (sessionStorage.getItem("laptop")) {
    if (!laptopSelected) {
      alert("Bitte geben Sie ein Betriebssystem für Ihren Laptop an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartp")) {
    if (!smartpSelected) {
      alert("Bitte geben Sie ein Betriebssystem für Ihr Smartphone an.");
      return false;
    }
  }

  if (sessionStorage.getItem("tab")) {
    if (!tabSelected) {
      alert("Bitte geben Sie ein Betriebssystem für Ihr Tablet an.");
      return false;
    }
  }

  if (sessionStorage.getItem("smartt")) {
    if (!smarttSelected) {
      alert("Bitte geben Sie ein Betriebssystem für Ihr Smart TV an.");
      return false;
    }
  }

  var browserRadios = document.getElementsByName("Browser");
  var browserSelected = false;

  for (var i = 0; i < browserRadios.length; i++) {
    if (browserRadios[i].checked) {
      browserSelected = true;
    }
  };

  if(!browserSelected){
    alert("Bitte geben Sie einen Browser an.");
    return false;
  }

  return true;
}

function validateLeavingPage5(){
  const verschluesselungPrivatYes = document.getElementById("privatja");
  const verschluesselungDienstlichYes = document.getElementById("dienstja");
  const verschluesselungPrivatMethodeRadios = document.getElementsByName("verschluesselungPrivatMethode");
  const verschluesselungDienstlichMethodeRadios = document.getElementsByName("verschluesselungDienstlichMethode");
  var mailprogrammCheckboxes = document.getElementsByName("mailprogramm[]");
  var mailprogrammSelected = false;
  let verschluesselungPrivatMethodeSelected = false;
  let verschluesselungDienstlichMethodeSelected = false;

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

  for (let i = 0; i < verschluesselungPrivatMethodeRadios.length; i++) {
    if (verschluesselungPrivatMethodeRadios[i].checked) {
      verschluesselungPrivatMethodeSelected = true;
      break;
    }
  }

  var verschluesselungDienstlichRadios = document.getElementsByName("verschluesselungDienstlich");
  var verschluesselungDienstlichSelected = false;

  for (var i = 0; i < verschluesselungDienstlichRadios.length; i++) {
    if (verschluesselungDienstlichRadios[i].checked) {
      verschluesselungDienstlichSelected = true;
    }
  };

  for (let i = 0; i < verschluesselungDienstlichMethodeRadios.length; i++) {
    if (verschluesselungDienstlichMethodeRadios[i].checked) {
      verschluesselungDienstlichMethodeSelected = true;
      break;
    }
  }

  if(!mailprogrammSelected){
    alert("Bitte wählen Sie mindestens 1 Mailprogramm aus.");
    return false;
  }

  if(!verschluesselungPrivatSelected){
    alert("Bitte geben Sie an, ob Sie private E-Mails verschlüsseln.");
    return false;
  }

  if (verschluesselungPrivatYes.checked && !verschluesselungPrivatMethodeSelected) {
    alert("Bitte geben Sie die Verschlüsselungsart Ihrer privaten E-Mails an.");
    return false;
  }

  if(!verschluesselungDienstlichSelected){
    alert("Bitte geben Sie an, ob Sie dienstliche E-Mails verschlüsseln.");
    return false;
  }

  if (verschluesselungDienstlichYes.checked && !verschluesselungDienstlichMethodeSelected) {
    alert("Bitte geben Sie die Verschlüsselungsart Ihrer dienstlichen E-Mails an.");
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
    alert("Bitte geben Sie eine Bewertung ab.");
    return false;
  }

  return true;
}

function writeToSessionStorage(obj, name, bool, target) {
  if (obj.checked) {
    sessionStorage.setItem(name, bool);
    document.getElementById(target).style.display = "block";
  } else {
    sessionStorage.removeItem(name);
    document.getElementById(target).style.display = "none";
  }
}
