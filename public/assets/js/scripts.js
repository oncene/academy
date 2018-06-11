(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

// Toggle aside panels
	// $("#nav-menu-visible").on('click', function () {
		// var mobileWidthApp = $('.main-menu-hidecard').outerWidth();
		// // alert(' '+mobileWidthApp);
		// if(mobileWidthApp < 61) {
		// 	// alert('hurra'+mobileWidthApp);
		// 	$('#card-panel-hide-left').toggleClass('panel-hide-left');
		// }else{
		// 	$('#card-panel-hide-left').removeClass('panel-hide-left');
		// }
		// return false
    // } );
// 


 	var mainMenu = new Clay('#main-menu-navigation');
      
	mainMenu.on('resize', function(size) {
		if(size.width < 120){

			$('#card-panel-hide-left').addClass('panel-hide-left');
			$('#card-panel-hide-left-show').removeClass('panel-show-left-show');
		}else{
			$('#card-panel-hide-left').removeClass('panel-hide-left');
			$('#card-panel-hide-left-show').addClass('panel-show-left-show');
		}
	});



})(window);