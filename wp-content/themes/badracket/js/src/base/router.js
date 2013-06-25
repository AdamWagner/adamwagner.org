/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
   Router
\* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */


$.subscribe('/view/change', updateView('/view/change'));   // triggered by djaxLoad() + load()

function updateView (name) {
  return function(_, url) {
    br_state.viewSet(url);
  };
}


var br_state = function() {

  var viewState = 'unknown';

  var rx = {
    home : s.domain + '',
    projectDetail : 'project/[a-zA-Z0-9-]*/$',
  };

   function urlMatcher(rx, url) {
      return new RegExp(rx).test(url);
  }

  function viewSet( url ) {
    console.log('view set ran and url is ' + url);

    if ( typeof url === 'undefined' ) { url = window.location.toString(); }

    if ( urlMatcher( rx.projectDetail, url ) ) {
      viewState = 'project-detail';
      setupProjectDetail();
    } else if ( ( rx.home===url ) ) {
      viewState = 'home';
      setupHome();
    } else {
      viewState = 'unknown';
    }

    applyViewState(viewState);

    return viewState;

  }


  /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  *\
     Route handlers
  \* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  */

  function viewGet() {
    return viewState;
  }

  function applyViewState(viewState) {
    console.log('apply view state ran. State is ' + viewState);
    $('body').attr('data-view', viewState);
  }


  function setupProjectDetail(){
    console.log('setup project detail ran');
    aw.color.unbindWaypoints();
    aw.color.setBgColor();
  }


  function setupHome(){
    aw.color.bindHomepageWaypoints();
  }

  return {
    viewSet : viewSet,
    viewGet : viewGet,
    urls : rx,
  };

}();