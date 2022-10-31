( function( window, document ) {
  function adventure_travelling_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const adventure_travelling_nav = document.querySelector( '.sidenav' );
      if ( ! adventure_travelling_nav || ! adventure_travelling_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...adventure_travelling_nav.querySelectorAll( 'input, a, button' )],
        adventure_travelling_lastEl = elements[ elements.length - 1 ],
        adventure_travelling_firstEl = elements[0],
        adventure_travelling_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && adventure_travelling_lastEl === adventure_travelling_activeEl ) {
        e.preventDefault();
        adventure_travelling_firstEl.focus();
      }
      if ( shiftKey && tabKey && adventure_travelling_firstEl === adventure_travelling_activeEl ) {
        e.preventDefault();
        adventure_travelling_lastEl.focus();
      }
    } );
  }
  adventure_travelling_keepFocusInMenu();
} )( window, document );