$(function() 
{
   
    $('input[name=tc_salaries_subpanel_save_button]').removeAttr('onClick');
    $('input[name=tc_salaries_subpanel_save_button]').attr('type','button');
    $('input[value="Save"]').click(function(){
        if($("input[name='name']").val().trim().length == 0)
        {
            alert("Please provide name");
            $("input[name='name']").focus();
            return;
        }
        else
        {
			
            //Values from 'Procurement QuickCreate'
            total_amount = $("input[name='total_amount_c']").val().trim();
            amount_paid = $("input[name='amount_paid_c']").val().trim();
            amount_due = $("input[name='amount_due_c']").val().trim();
			gross_rev1 = $("input[name='amount_paid_c']").val().trim();
            
            //Values from Detail View
            total_amount_project = Number(total_amount) + Number($('#total_project_cost_c').text());
            amount_paid_project = Number(amount_paid) + Number($('#total_project_paid_cost_c').text());
            amount_due_project = Number(amount_due) + Number($('#total_project_due_cost_c').text());

            $('#total_project_cost_c').text(total_amount_project);
            $("#total_project_paid_cost_c").text(amount_paid_project);                
            $("#total_project_due_cost_c").text(amount_due_project);

            total_amount_sal = Number(total_amount) + Number($('#total_salaries_amount_c').text());
            amount_paid_sal = Number(amount_paid) + Number($('#total_salaries_amount_paid_c').text());
            amount_due_sal = Number(amount_due) + Number($('#total_salaries_amount_due_c').text());
			gross_rev_sal =Number($('#gross_revenue').text()) - Number(gross_rev1)  ;
			

            $("#total_salaries_amount_c").text(total_amount_sal);
            $("#total_salaries_amount_paid_c").text(amount_paid_sal);
            $("#total_salaries_amount_due_c").text(amount_due_sal);
			 $("#gross_revenue").text(gross_rev_sal);
            orig_onclick();
        }
    });
    function orig_onclick()
    {
        $('input[name=tc_salaries_subpanel_save_button]').attr('onClick', "var _form = document.getElementById('form_SubpanelQuickCreate_tc_salaries'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_tc_salaries'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'tc_salaries_subpanel_save_button');return false;");
        $('input[name=tc_salaries_subpanel_save_button]').attr('type','submit'); 
        $( "input[name=tc_salaries_subpanel_save_button]").unbind( "click" );
        $('#tc_salaries_subpanel_save_button').trigger('click');
    }
});