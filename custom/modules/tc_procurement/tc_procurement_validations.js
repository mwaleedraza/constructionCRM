YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
	
	
	$("#total_area_c, #price_per_unit_c, #amount_paid_c").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
	   $("#total_area_c,#price_per_unit_c,#amount_paid_c").blur(function(){
       quantity  = $('#total_area_c').val();
	   u_price = $('#price_per_unit_c').val();
	   a_paid  = $('#amount_paid_c').val();
	   $('#total_amount_c').prop('readonly', true);
	 //  $('#total_amount').prop('readonly', true);
	   $('#amount_due_c').prop('readonly', true);
	   $('#total_amount_c').val(quantity * u_price);
	 //  $('#total_amount').val(quantity * u_price);
	   $('#amount_due_c').val(quantity * u_price - a_paid);
	     
		
	  });
 };