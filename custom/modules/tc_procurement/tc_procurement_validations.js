
// Shorthand for $( document ).ready()
$(function()
{
    //Allows only 0-9 and one '.'
    $("#total_area_c, #price_per_unit_c, #amount_paid_c, #amount_due_c").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
    });
    var total_area = 0, unit_price = 0;
    $("#total_amount_c").prop("readonly", true); //make total amount field read-only
    $('#total_area_c, #price_per_unit_c').blur(function()
    {
        total_area = $('#total_area_c').val();
        unit_price = $('#price_per_unit_c').val();
    if($('#total_area_c').val() && $('#price_per_unit_c').val())
    {
        $('#total_amount_c').val(total_area * unit_price);
        if($('#amount_paid_c').val())
        {
            amount_paid = $('#amount_paid_c').val();
            total_amount = $('#total_amount_c').val();
            $('#amount_due_c').val(total_amount - amount_paid);
        }
    }
    else
    {
        $('#total_amount_c').val("");
        $('#amount_due_c').val("");
    }
    });
    $('#amount_paid_c').blur(function(){
        amount_paid = $('#amount_paid_c').val();
        amount_due = $('#amount_due_c').val();
        if($('#amount_paid_c').val())
        {
            total_amount = $('#total_amount_c').val();
            $('#amount_due_c').val(total_amount - amount_paid);
        }
    });
    $('#amount_due_c').blur(function(){
        amount_paid = $('#amount_paid_c').val();
        amount_due = $('#amount_due_c').val();
        if($('#amount_due_c').val())
        {
            total_amount = $('#total_amount_c').val();
            $('#amount_paid_c').val(total_amount - amount_due);
        }
    });
});