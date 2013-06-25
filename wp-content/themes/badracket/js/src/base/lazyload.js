/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
   Lazyload
\* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

var aw = window.aw || {};

aw.lazy = {

  all: function(){
    $('.lazyload').each(function() {
        var lazy = $(this);
        var dataSrc = lazy.attr('data-src');
        aw.lazy.load(lazy, dataSrc);
     });
  },

  carousel: function(){
    $('.lazyload').each(function() {
        var lazy = $(this);
        var dataSrc = lazy.attr('data-src');
        if (lazy.parent().parent().hasClass('active')) { aw.lazy.load(lazy, dataSrc); }
     });
  },

  load: function( target, dataSrc ) {
    $('<img>').attr( 'src', dataSrc ).load(function(){
        target
          .attr('src', dataSrc)
          .addClass('loaded')
          .parent().addClass('loaded');
    });
  },

  target: function( el ){
    var lazy = $(el);
    var dataSrc = lazy.attr('data-src');
    aw.lazy.load(lazy, dataSrc);
  }
};



