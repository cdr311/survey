function submitForm(action, formId) {
    var form = document.getElementById(formId);
    form.action = action;
    form.submit();
  }
