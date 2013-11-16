var JMT = {
  init: function() {
    //this.initNavLinks();
    this.initForm();
    $('.thank .thanks').hide();
  },

  initForm: function() {
    var showError;

    $(function() {
      $("#contact_form .btn").click(function(e) {
        e.preventDefault();

        var name  = $("#form_name").val(),
            email = $("#form_email").val(),
            text  = $("#msg_text").val(),
            dataString = 'name=' + name + '&email=' + email + '&text=' + text;

        $.ajax({
          type: "POST",
          url: "send_email.php",
          data: dataString,
          success: function(e) {
            $('#contact_form input').val('')
            $('#contact_form textarea').val('')
            $('.thank .thanks').fadeIn(500)
          }
        });
      });
    });
  }
};

JMT.init();