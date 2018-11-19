YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
	
	
	$("#qty, #unit_price, #amount_paid").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
	   $("#qty,#unit_price,#amount_paid").blur(function(){
       quantity  = $('#qty').val();
	   u_price = $('#unit_price').val();
	   a_paid  = $('#amount_paid').val();
	   $('#total_price').prop('readonly', true);
	   $('#total_amount').prop('readonly', true);
	   $('#total_amount_payble').prop('readonly', true);
	   $('#total_price').val(quantity * u_price);
	   $('#total_amount').val(quantity * u_price);
	   $('#total_amount_payble').val(quantity * u_price - a_paid);
	     
		
	  });
 };