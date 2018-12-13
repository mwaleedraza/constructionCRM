<?php 
 	$hook_array['before_save'][] = array(
		1,
		"Update Total Procurement Values Before Save", //Description
		"custom/modules/tc_installment/update_tc_procurement_values.php", //exact path and file name where custom code resides
		"update_tc_procurement_values", //Name of the class of custom code. It must be same as file name
		"update_method", // name of the method inside custom class that will be fired when the hook fires.
	);

	$hook_array['before_delete'][] = array(
		2,
		"Update Total procurement Values Before Delete", //Description
		"custom/modules/tc_installment/update_tc_procurement_values.php", //exact path and file name where custom code resides
		"update_tc_procurement_values", //Name of the class of custom code. It must be same as file name
		"delete_method", // name of the method inside custom class that will be fired when the hook fires.
	); 

	
?>