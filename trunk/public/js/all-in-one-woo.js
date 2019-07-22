$ = jQuery.noConflict();
$(function ($) {	
	$('#tabs').tabs();
	$('#select-all').click(function(event) {   
	    if(this.checked) {
	        // Iterate each checkbox
	        $(':checkbox').each(function() {
	            this.checked = true;                        
	        });
	    } else {
	        $(':checkbox').each(function() {
	            this.checked = false;                       
	        });
	    }
	});
	
	// Tracking
	
	if($('input[name="allinonewoo-group[custom-tracking-option]"]').prop('checked')==true){
		$('.tracking-label').fadeIn();
	    $('textarea[name="allinonewoo-group[custom-tracking]"]').fadeIn();
	
	}else if($('input[name="allinonewoo-group[custom-tracking-option]"]').prop('checked')==false){
		$('.tracking-label').hide();
		$('textarea[name="allinonewoo-group[custom-tracking]"]').hide();
	}	
	//show it when the checkbox is clicked
    $('input[name="allinonewoo-group[custom-tracking-option]"]').on('click', function (){
        if ($(this).prop('checked')) {
            $('.tracking-label').fadeIn();
            $('textarea[name="allinonewoo-group[custom-tracking]"]').fadeIn();
        } else {
            $('.tracking-label').hide();
            $('textarea[name="allinonewoo-group[custom-tracking]"]').hide();
        }
    });
	// end Tracking
	
	
	if($('#yesCheck').prop('checked')==true){
		$('#ifYes').fadeIn();
	
	}else if($('#yesCheck').prop('checked')==false){
		$('#ifYes').hide();
	}	
});