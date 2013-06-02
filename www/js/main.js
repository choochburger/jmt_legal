var JMT = {
  init: function() {
    //this.initNavLinks();
    this.initForm();
  },

  initForm: function() {
    var showError;

    $(function() {
      $("#contact .button").click(function() {
        var name  = $("#form_name").val(),
            email = $("#form_email").val(),
            text  = $("#msg_text").val(),
            dataString = 'name=' + name + '&email=' + email + '&text=' + text;

        if (!name.length || !email.length || !text.length) {
          showError('Please fill out all fields.');
          return false;
        }

        $.ajax({
          type: "POST",
          url: "send_email.php",
          data: dataString,
          success: function(e) {
            var e = JSON.parse(e);
            if (e.status === 'error') {
              showError(e.message);
              return;
            }

            $('.email.error').hide();
            $('.email.success').fadeIn(1000);
            $('#contact .button').fadeOut();
          },
          error: function(e) {
            showError(e.message);
          }
        });

        return false;
      });

      showError = function(msg) {
          $('.email.error').text(msg)
                           .fadeIn(1000);
      };
    });
  }
};

JMT.init();