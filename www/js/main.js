var JMT = {
  init: function() {
    this.initNavLinks();
  },

  initNavLinks: function() {
    var $links = $('.nav li');

    $links.click(function() {
      $('.navbar .active').removeClass('active');
      $(this).addClass('active');
    });
  }
};

JMT.init();
