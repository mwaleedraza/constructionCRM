<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('tc_sales', 'edit', true)) {
        $module_menu[] = array("index.php?module=tc_sales&action=EditView&return_module=tc_sales&return_action=index", 'Create Sales',"Create",'tc_sales');
    }
	   
?>