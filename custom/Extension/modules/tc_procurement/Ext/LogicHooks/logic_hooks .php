<?php 
	$hook_array['before_save'][] = array(
		1,
		"Update Total Project Values Before Save", //Description
		"custom/modules/tc_procurement/update_project_values_pro.php", //exact path and file name where custom code resides
		"update_project_value_pro", //Name of the class of custom code. It must be same as file name
		"update_method_pro", // name of the method inside custom class that will be fired when the hook fires.
	);
	 $hook_array['before_save'][] = array(
		2,
		"Show procurement with same contacts as one record", //Description
		"custom/modules/tc_procurement/show_procurement.php", //exact path and file name where custom code resides
		"show_procurement", //Name of the class of custom code. It must be same as file name
		"show_method", // name of the method inside custom class that will be fired when the hook fires.
	); 
	$hook_array['before_delete'][] = array(
		3,
		"Update Total Project Values Before Delete", //Description
		"custom/modules/tc_procurement/update_project_values_pro.php", //exact path and file name where custom code resides
		"update_project_value_pro", //Name of the class of custom code. It must be same as file name
		"delete_method_pro", // name of the method inside custom class that will be fired when the hook fires.
	);
	
?>