// hide the alert message until it's needed
document.getElementById('form_alert').style.display = 'none';
function formVal() {
  // save the value of the form fields as variables
  var x = document.forms['login_form']['username'].value;
  var y = document.forms['login_form']['password'].value;
  // sanity check for empty form fields. return false stops the form from submitting
  if(x === '') {
    // reset the display to block if there is no username entered
    document.getElementById('form_alert').style.display = 'block';
    document.getElementById('alert_mess').innerHTML = 'Please enter your username';
    return false;
  } else if(y === '') {
    // reset the display to block if there is no password entered
    document.getElementById('form_alert').style.display = 'block';
    document.getElementById('alert_mess').innerHTML = 'Please enter a valid password';
    return false;
  }
}
