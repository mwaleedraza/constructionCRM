YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
	
	
	$("#amount_paid_c, #total_amount_c").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
	   $("#total_amount_c,#amount_paid_c").blur(function(){
       total_amount  = $('#total_amount_c').val();
	   amount_paid = $('#amount_paid_c').val();
	   $('#amount_due_c').prop('readonly', true);
       $('#amount_due_c').val(total_amount - amount_paid);
	});
 };