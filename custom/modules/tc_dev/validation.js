YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
	
	
	$(" #amount_paid,#total_amount").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
	   $("#amount_paid,#total_amount").blur(function(){
       
	   t_amount = $('#total_amount').val();
	   a_paid  = $('#amount_paid').val();
	  /*  $('#total_price').prop('readonly', true);
	   $('#total_amount').prop('readonly', true);
	   $('#total_amount_payble').prop('readonly', true);
	   $('#total_price').val(quantity * u_price);
	   $('#total_amount').val(quantity * u_price); */
	   $('#total_amount_payble').val(t_amount - a_paid);
	     
		
	  });
 };