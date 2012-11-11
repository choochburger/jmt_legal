var JMT = {
  init: function() {
    this.initNavLinks();
    this.initForm();
  },

  initNavLinks: function() {
    $(window).on('hashchange', this.setCurrentSection);
    this.setCurrentSection();
  },

  setCurrentSection: function() {
    var section    = window.location.hash,
        $sectionEl = $(section);

    // default route
    if (!$sectionEl.length) {
      section = 'home';
      $sectionEl = $('#'+section);
    }

    $('.section').hide();
    $sectionEl.fadeIn();

    $('.navbar .active').removeClass('active');
    $('a[href="'+section+'"]').closest('li')
                              .addClass('active');

    // scroll to top for mobile
    $(document).scrollTop(0);
  },

  initForm: function() {
    $(function() {
      $("#contact .button").click(function() {
        var name  = $("#form_name").val(),
            email = $("#form_email").val(),
            text  = $("#msg_text").val(),
            dataString = 'name=' + name + '&email=' + email + '&text=' + text;

        if (!name.length || !email.length || !text.length) {
          alert('Please fill out all fields');
          return false;
        }

        $.ajax({
          type: "POST",
          url: "send_email.php",
          data: dataString,
          success: function() {
            $('form.success').fadeIn(1000);
          },
          error: function() {
            console.log(arguments);
          }
        });

        return false;
      });
    });
  }
};

JMT.init();
