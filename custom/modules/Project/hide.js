
$(function()
{

	var value=$('#project_type').val();
	if(value=="Mehrab States"){
		
		$('a#tab2').hide();
	}
	if(value=="Mehrab Engineers"){
		$('a#tab1').hide();
		$('a#tab3').hide();
		
	}
});
