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
                        <th>Land Area</th>
                      
                        <th>Land Type</th>
                        <th>Land Total price</th>
                        <th>Land Price received</th>
                        <th>Land Price due</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$LEDGER key=index item=line_item}
                        <tr>
                            <td>{$line_item.name}</td>
                            <td>{$line_item.land_area}</td>
                            <td>{$line_item.land_type}</td>
                            <td>{$line_item.land_price}</td>
                     
                            <td>{$line_item.land_price_received}</td>
                            <td>{$line_item.land_price_due}</td>
                           
                            <td><a href='index.php?module=tc_sales&action=DetailView&record={$line_item.id}'><span class="badge badge-light">Details</span></a></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>