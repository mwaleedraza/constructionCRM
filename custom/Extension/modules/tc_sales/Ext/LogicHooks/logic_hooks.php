<?php 
	$hook_array['before_save'][] = array(
		1,
		"Update Total sales Values Before Save", //Description
		"custom/modules/tc_sales/update_sales_values_sale.php", //exact path and file name where custom code resides
		"update_project_values_sale", //Name of the class of custom code. It must be same as file name
		"update_method_sale", // name of the method inside custom class that will be fired when the hook fires.
	);
	  $hook_array['before_save'][] = array(
		2,
		"Show sales with same contacts as one record", //Description
		"custom/modules/tc_sales/show_sales.php", //exact path and file name where custom code resides
		"show_sales", //Name of the class of custom code. It must be same as file name
		"show_method", // name of the method inside custom class that will be fired when the hook fires.
	);  
	$hook_array['before_delete'][] = array(
		3,
		"Update Total Project Values Before Delete", //Description
		"custom/modules/tc_sales/update_sales_values_sale.php", //exact path and file name where custom code resides
		"update_project_values_sale", //Name of the class of custom code. It must be same as file name
		"delete_method_sale", // name of the method inside custom class that will be fired when the hook fires.
	);
?>