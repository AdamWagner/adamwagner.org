/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
   Lazyload
\* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

var aw = window.aw || {};

aw.color = {

  makeBgColor: function(hex){

    var orig = $.Color('#f5f1e9');
    var color = $.Color(hex);

    var newColor = orig.hsla({
      hue: color.hue(),
      saturation: orig.saturation() * 0.5,
      lightness: orig.lightness() * 1.04,
      alpha: 1
    });

    return newColor.toHslaString();
  },


  makeTextColor: function( hex1, hex2 ) {

    var test = $.Color(hex1);
    var color;

    if (test.lightness() > 0.70 ) {
      color = $.Color(hex2);
    } else {
      color = $.Color(hex1);
    }

    return color.toHslaString();

  },

  setBgColor: function( target ) {

    console.log('make bg color ran');

    var primary;
    var secondary;

    if ( !target ) {
      primary = $('.project').attr('data-color-primary');
      secondary = $('.project').attr('data-color-secondary');
    } else {
      primary = target.attr('data-color-primary');
      secondary = target.attr('data-color-secondary');
    }

    var textColor = aw.color.makeTextColor(primary, secondary);

    $('body').css('background-color', primary );
    $('.colorable').css('color', textColor );

  },

  bindHomepageWaypoints: function(){

    $('.project').waypoint(function(direction) 
      { if (direction === 'down') { aw.color.setBgColor( $(this) ); } },
      { offset: '50%' }
      );

    $('.project').waypoint(function(direction) 
      {if (direction === 'up') {aw.color.setBgColor( $(this) ); } },
      { offset: function() {return -$(this).height() / 1.5; } }
    );

    $('.project').waypoint(function(direction) 
      {if (direction === 'up') {aw.color.setBgColor( $(this) ); } },
      {   offset: '0%'  }
    );
  },

  unbindWaypoints: function(){
    console.log('unbind waypoints ran');
    $.waypoints('destroy');
  },


};

