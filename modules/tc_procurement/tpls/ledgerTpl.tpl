<link href="custom/include/thirparty/CSS/ForCRM.css" rel="stylesheet" />
<link href="custom/include/thirparty/CSS/style.css" rel="stylesheet" />
<div class="col-sm-12">
    <div class="col-sm-2"></div>
    <div class="col-sm-9"><h2 style="color:coral;">Complete history of Procurement for Seller <span style="color:purple;">{$NAME}</span></h2></div>
    <div class="col-sm-1"></div>
</div>
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
                        <th>Total Area</th>
                        <th>Price per unit</th>
                        <th>Area unit</th>
						<th>Commission Fee</th>
                        <th>Total amount</th>
                        <th>Amount paid</th>
                        <th>Amount due</th>
                        <th>Amount method</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$LEDGER key=index item=line_item}
                        <tr>
                            <td>{$line_item.name}</td>
                            <td>{$line_item.total_area_c}</td>
                            <td>{$line_item.price_per_unit_c}</td>
                            <td>{$line_item.area_unit_c}</td>
							<td>{$line_item.commissionp_fee_c}</td>
                            <td>{$line_item.total_amount_c}</td>
                            <td>{$line_item.amount_paid_c}</td>
                            <td>{$line_item.amount_due_c}</td>
                            <td>{$line_item.payment_method_c}</td>
                            <td><a href='index.php?module=tc_procurement&action=DetailView&record={$line_item.id}'><span class="badge badge-light">Details</span></a></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>