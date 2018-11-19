YAHOO.util.Event.onDOMReady(onReady);
function onReady() {
	
	
	$("#land_area, #land_price, #land_price_received").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
    }); 
	   $("#land_area,#land_price,#land_price_received").blur(function(){
       area  = $('#qty').val();
	   l_price = $('#land_price').val();
	   p_received  = $('#land_price_received').val();
	   $('#land_price_due').prop('readonly', true);
	   $('#land_price_due').val(l_price - p_received);
	});
 };