var JMT = {
  init: function() {
    this.initNavLinks();
    this.initSmoothScroll();
    this.addHomeButtons();
  },

  initNavLinks: function() {
    var $links = $('.nav li');

    $links.click(function() {
      $('.navbar .active').removeClass('active');
      $(this).addClass('active');
    });
  },

  smoothScrollProps: {
    offset: -50
  },

  initSmoothScroll: function() {
    $('.nav a, a.btn').smoothScroll(this.smoothScrollProps);
  },

  addHomeButtons: function() {
    // Adds "Return to Top" buttons to each section, to avoid repetition in html
    var button = '<a href="#home" class="btn home clearfix btn-secondary"><i class="icon-home"></i></a>';

    $('.section').each($.proxy(function(num, el) {
      // Don't add button to first section
      if (num === 0) return;

      $(button).appendTo(el)
               .smoothScroll(this.smoothScrollProps);
    }, this));
  }
};

JMT.init();
