var JMT = {
  init: function() {
    this.initForm();
    $('.thank .thanks').hide();
  },

  initForm: function() {
    var showError;

    $(function() {
      var $form = $('#contact_form'),
          $contactBtn = $form.find('.btn'),
          $response = $form.find('.response_message');

      $contactBtn.click(function(e) {
        e.preventDefault();

        var formData = {
          name:  $('#form_name').val(),
          email: $('#form_email').val(),
          text:  $('#form_message').val()
        };

        if (!formData.email.length || !formData.text.length) {
          showMessage('Please enter your email and a message.');
          return false;
        }

        $.ajax({
          type: "POST",
          url: "send_email.php",
          data: formData,
          dataType: 'json',
          success: function(e) {
            if (e.status === 'error') {
              showMessage(e.message);
            } else {
              $form.find('input, textarea').val('');
              showMessage('Thank you for your message!');
            }
          },
          error: function(e) {
            showMessage(e.message);
          }
        });

        return false;
      });

      showMessage = function(msg) {
        $response
          .hide()
          .text(msg)
          .fadeIn(500);
      }
    });
  }
};

JMT.init();
