$(function() 
{
    
    $('input[name=tc_sales_subpanel_save_button]').removeAttr('onClick');
    $('input[name=tc_sales_subpanel_save_button]').attr('type','button');
    $('input[value="Save"]').click(function(){
        if($("input[name='name']").val().trim().length == 0)
        {
            alert("Please provide name");
            $("input[name='name']").focus();
            return;
        }
        else
        {
            total_sales = $("input[name='land_price']").val().trim();
            sales_received = $("input[name='land_price_received']").val().trim();
            sales_due = $("input[name='land_price_due']").val().trim();
            


     

            total_sale_sales = Number(total_sales) + Number($('#total_sales_c').text());
            sale_received_sales = Number(sales_received) + Number($('#total_sales_amount_received_c').text());
            sale_due_sales = Number(sales_due) + Number($('#total_sales_amount_due_c').text());

            $("#total_sales_c").text(total_sale_sales);
            $("#total_sales_amount_received_c").text(sale_received_sales);
            $("#total_sales_amount_due_c").text(sale_due_sales);
            orig_onclick();
        }
    });
    function orig_onclick()
    {
        $('input[name=tc_sales_subpanel_save_button]').attr('onClick', "var _form = document.getElementById('form_SubpanelQuickCreate_tc_sales'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_tc_sales'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'tc_sales_subpanel_save_button');return false;");
        $('input[name=tc_sales_subpanel_save_button]').attr('type','submit'); 
        $( "input[name=tc_sales_subpanel_save_button]").unbind( "click" );
        $('#tc_sales_subpanel_save_button').trigger('click');
    }
});