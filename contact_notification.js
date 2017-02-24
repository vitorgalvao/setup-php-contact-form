document.addEventListener('DOMContentLoaded', function() {

  function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    var vars_total = vars.length;
    for (var i=0; i<vars_total; i++) {
      var pair = vars[i].split("=");
      if(pair[0] == variable){return pair[1];}
    }
    return(false);
  }

  if (getQueryVariable('outcome') == 'success') {
    swal('Sent successfully', 'Thank you for your contact', 'success');
  }
  else if (getQueryVariable('outcome') == 'failure') {
    swal('Failed to send', 'Please try again later', 'error');
  }

})
