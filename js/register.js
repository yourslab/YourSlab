$(document).ready(function() {
    $("button.cancel").click(function() {   
      window.location.replace("http://localhost/yourslab_ci");
      return false;
    });
    /*
    $(".registerbox").submit(function() {
          ccn = $.cookie('csrf_cookie_name'); 
          var userinfo = $(".registerbox").serialize();
           $.post(base_url + "register/step1_process", {
           'userinfo' : userinfo, 'csrf_token_name' : ccn
          },
        function(data) {
            alert(data);
        });
        return false;
    });
*/
});