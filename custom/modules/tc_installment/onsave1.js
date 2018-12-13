$(function() 
{
    $('input[name=tc_installment_subpanel_save_button]').removeAttr('onClick');
    $('input[name=tc_installment_subpanel_save_button]').attr('type','button');
    $('input[value="Save"]').click(function(){
        if($("input[name='name']").val().trim().length == 0)
        {
            alert("Please provide name");
            $("input[name='name']").focus();
            return;
        }
        else
        {     
            total_amount = $("input[name='installment_amount_c']").val().trim();
            amount_paid_dev = Number(total_amount) + Number($('#amount_paid').text());
            amount_due_dev = Number($('#total_amount_payble').text())-Number(total_amount);
            $("#amount_paid").text(amount_paid_dev);                
            $("#total_amount_payble").text(amount_due_dev);
            orig_onclick();
		}
    });
    function orig_onclick()
    {
        $('input[name=tc_installment_subpanel_save_button]').attr('onClick', "var _form = document.getElementById('form_SubpanelQuickCreate_tc_installment'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_tc_installment'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'tc_installment_subpanel_save_button');return false;");
        $('input[name=tc_installment_subpanel_save_button]').attr('type','submit'); 
        $( "input[name=tc_installment_subpanel_save_button]").unbind( "click" );
        $('#tc_installment_subpanel_save_button').trigger('click');
    }
});