var JMT = {
  init: function() {
    this.initNavLinks();
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
  }
};

JMT.init();
