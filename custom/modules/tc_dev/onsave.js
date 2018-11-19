$(function() 
{
   
    $('input[name=tc_dev_subpanel_save_button]').removeAttr('onClick');
    $('input[name=tc_dev_subpanel_save_button]').attr('type','button');
    $('input[value="Save"]').click(function(){
        if($("input[name='name']").val().trim().length == 0)
        {
            alert("Please provide name");
            $("input[name='name']").focus();
            return;
        }
        else
        {
            total_amount = $("input[name='total_amount']").val().trim();
            amount_paid = $("input[name='amount_paid']").val().trim();
            amount_due = $("input[name='total_amount_payble']").val().trim();
            
            total_amount_project = Number(total_amount) + Number($('#total_project_cost_c').text());
            amount_paid_project = Number(amount_paid) + Number($('#total_project_paid_cost_c').text());
            amount_due_project = Number(amount_due) + Number($('#total_project_due_cost_c').text());

            $('#total_project_cost_c').text(total_amount_project);
            $("#total_project_paid_cost_c").text(amount_paid_project);                
            $("#total_project_due_cost_c").text(amount_due_project);

            total_amount_dev = Number(total_amount) + Number($('#total_dev_cost_c').text());
            amount_paid_dev = Number(amount_paid) + Number($('#total_dev_paid_c').text());
            amount_due_dev = Number(amount_due) + Number($('#total_dev_due_c').text());

            $("#total_dev_cost_c").text(total_amount_dev);
            $("#total_dev_paid_c").text(amount_paid_dev);
            $("#total_dev_due_c").text(amount_due_dev);
            orig_onclick();
        }
    });
    function orig_onclick()
    {
        $('input[name=tc_dev_subpanel_save_button]').attr('onClick', "var _form = document.getElementById('form_SubpanelQuickCreate_tc_dev'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_tc_dev'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'tc_dev_subpanel_save_button');return false;");
        $('input[name=tc_dev_subpanel_save_button]').attr('type','submit'); 
        $( "input[name=tc_dev_subpanel_save_button]").unbind( "click" );
        $('#tc_dev_subpanel_save_button').trigger('click');
    }
});