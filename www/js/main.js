var JMT = {
  init: function() {
    this.initNavLinks();
  },

  initNavLinks: function() {
    $('.nav li').click(this.onNavLinkClick);
    $(window).on('hashchange', this.setCurrentSection);
    this.setCurrentSection();
  },

  onNavLinkClick: function(e) {
    $('.navbar .active').removeClass('active');
    $(e.target).addClass('active');
  },

  setCurrentSection: function() {
    var section    = window.location.hash,
        $sectionEl = $(section);

    $('.section').hide();

    if ($sectionEl.length) {
      $sectionEl.fadeIn();
    } else {
      // default route
      $('#home').fadeIn();
      window.location.hash = '';
    }
  }
};

JMT.init();
