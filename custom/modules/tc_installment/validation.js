YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
		

	
    $("#installment_amount_c").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
	 
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
 $("#contacts_name_c").prop("readonly", true);
	   
 };