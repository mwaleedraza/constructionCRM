<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('tc_procurement', 'edit', true)) {
        $module_menu[] = array("index.php?module=tc_procurement&action=EditView&return_module=tc_procurement&return_action=index", 'Create Procurement',"Create",'tc_procurement');
    }
	  
?>