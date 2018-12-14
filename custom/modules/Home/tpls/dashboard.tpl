<link rel="stylesheet" type="text/css" href="custom/modules/Home/tpls/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="custom/modules/Home/tpls/css/style.css">
<div class="col-md-9">
          <h1>Companies</h1>
          <div>
          </div> 
          <div class="row tag-boxes">
            {php} $count = 0; {/php}
            {foreach from=$fetch_Accounts item=accounts}
            {php} $count++; {/php}
            <a href="index.php?module=Accounts&action=DetailView&record={$accounts.id}">
            <div class="col-md-6 col-lg-4">
              <div class="panel panel-red">
                <div class="panel-heading" style="height:80px;">
                  <div class="row">
                      <div class="huge" style="font-size:20px;">{$accounts.name}</div>
                      <!-- <div class="text-right">{$accounts.id}</div> -->
                  </div>
                </div>
                <!-- <a href="index.php?module=Accounts&action=DetailView&id={$accounts.id}"> -->
                  <!-- <div class="panel-footer"> -->
                    <!-- <span class="pull-left">View Detail</span> -->
                    <!-- <div class="clearfix"></div> -->
                  <!-- </div> -->
                <!-- </a> -->
              </div>
            </div>
            </a>
            {/foreach}
          </div>
          <hr>
          <div style="margin-top:-10px;">
            <a href="index.php?module=Accounts&action=index" class="btn btn-primary" style="background-color:#D9534F;">View All Companies</a>
          </div>
          <br><br><br><br>
        </div>