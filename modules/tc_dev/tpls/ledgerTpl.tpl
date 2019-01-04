<link href="custom/include/thirparty/CSS/ForCRM.css" rel="stylesheet" />
<link href="custom/include/thirparty/CSS/style.css" rel="stylesheet" />
<div class="row coreui">
    <div class="col-sm-12">
        <div class="card" style="width:100%">
            <div class="card-header" style="background: #68a5c1; color:white;">
                <i class="fa fa-align-justify" style=""></i>Ledger
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-sm">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Qty</th>
                      
                        <th>Unit price</th>
                        <th>Total amount</th>
                        <th>Amount paid</th>
                        <th>Amount due</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$LEDGER key=index item=line_item}
                        <tr>
                            <td>{$line_item.name}</td>
                            <td>{$line_item.qty}</td>
                            <td>{$line_item.unit_price}</td>
                            <td>{$line_item.total_amount}</td>
                     
                            <td>{$line_item.amount_paid}</td>
                            <td>{$line_item.total_amount_payble}</td>
                           
                            <td><a href='index.php?module=tc_dev&action=DetailView&record={$line_item.id}'><span class="badge badge-light">Details</span></a></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>