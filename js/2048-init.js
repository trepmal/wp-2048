var kkeys = [], konami = "50,48,52,56";
jQuery(document).keydown(function(e) {
	kkeys.push( e.keyCode );
	if ( kkeys.toString().indexOf( konami ) >= 0 ) {
		jQuery(document).unbind('keydown',arguments.callee);
		jQuery('.game-container-wrapper').show();
		new GameManager(4, KeyboardInputManager, HTMLActuator, LocalScoreManager);
	}
});
