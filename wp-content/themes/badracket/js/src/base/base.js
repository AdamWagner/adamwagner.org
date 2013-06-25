/*
Consider using
https://github.com/jakiestfu/Snap.js
for nav menu exposure
*/

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
  aw APP
\* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

s = {
  win : $(window),
  doc : $(document),
  html : $('html'),
  body : $('body'),
  mainContent : $('.main-content'),
  video : $('.video'),
  domain : aw.utils.envCheck('http://localhost:8888/aw/', 'http://adamwagner.staging.wpengine.org/', 'http://adamwagner.org/'),
};

var a_w = window.aw || {};

aw = $.extend(a_w, {

  init: function() {
    this.docReady();
    this.load();
    this.djaxLoad();
  },

  enquire: function(){
    // enquire
      // .register( 'screen and (max-width : 1024px)', aw.setupMobile() )
      // .listen();
  },

  setupMobile: function(){
    return {
      setup: function() {
        aw.utils.loader.require(
          [ br_scripts.mobile ],
          function() { aw.bindMobileUI(); } 
        );
      },
      deferSetup: true,
      match : function() {},
      unmatch : function() {}
    };
  },

  setup: function(){
    aw.utils.loader.require(
      [
        br_scripts.postLoad,
        // br_scripts.player,
      ],
      function() { // Callback
          console.log('All Scripts Loaded');
          $.publish('/view/change', document.URL);
      });
  },

  affix: function(){

    var header = $('header.desktop');

    var offset = header.offset().top,
        fixed = false;

    s.win.bind('djaxLoad', function(e, data) {
      offset = header.offset().top;
    });

    s.win.resize(function(){
      if (!fixed) { offset = header.offset().top; }
    });

    s.doc.scroll(function() {
        if( !fixed  && $(this).scrollTop() >= offset && s.body.hasClass('home') ) {
          fixed = true;
          s.html.addClass('page-fixed');
        } else if ($(this).scrollTop() <= offset) {
          fixed = false;
          s.html.removeClass('page-fixed');
        }
    });

  },



  /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
    Document.ready()
  \* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

  docReady: function(){
    s.doc.ready(function(){
      s.body.djax('.updatable', [ '#myCarousel', '#next'  ]);
      aw.enquire();
      console.log('document ready fires');
    });
  },

  /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
    Window.load()
  \* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

  load: function(){
    s.win.load(function(){
      aw.setup();
      aw.lazy.all();
      
      $(window).on('carousel-update', function(_, to){ 
        console.log(to); 
        aw.lazy.target(to);
      });

    });
  },

  djaxLoad: function(){

    var mainContent = $('.main-content');

    // when djax element loads, remove loadin class & mimic doc ready stuff
    s.win.bind('djaxLoad', function(e, data) {
      s.win.scrollTop(0);

      aw.lazy.all();

      _gaq.push(["_trackPageview"]); 

      var html = data.response,
          search = '<body class="',
          start = html.indexOf(search) + search.length,
          end = html.indexOf('"', start),
          bodyClass = html.slice( start, end );

      s.body.attr('class', bodyClass);

      $.publish('/view/change', aw.utils.hasTrailngSlash(data.url) ? data.url : data.url + '/');

      mainContent.removeClass('loading');
    });

    // when djax link clicked, add loading class
    s.win.bind('djaxClick', function(e, data) {
      mainContent.addClass('loading');
    });
  },



}); // end aw {}


