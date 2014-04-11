var kkeys = [],
	konamiA = "50,48,52,56"
	konamiB = "98,96,100,104";
jQuery(document).keydown(function(e) {
	kkeys.push( e.keyCode );
	if ( kkeys.toString().indexOf( konamiA ) >= 0 ||
		 kkeys.toString().indexOf( konamiB ) >= 0 ) {
		jQuery(document).unbind('keydown',arguments.callee);
		jQuery('.game-container-wrapper').show();
		new GameManager(4, KeyboardInputManager, HTMLActuator, LocalScoreManager);
	}
});
