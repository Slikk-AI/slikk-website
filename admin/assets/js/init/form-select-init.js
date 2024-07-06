"use strict";
$(document).ready(function() {    

    /* -----  Form Select - Select2 ----- */

    $('.xp-select2-single').select2();
    $('.xp-select2-multi-select').select2({
        placeholder: 'Choose Region',
    });
	$('.xp-select2-related-reports-multi-select').select2({
        placeholder: 'Choose Related Reports',
		minimumInputLength: 3,
		maximumSelectionLength: 9,
    });
    
});