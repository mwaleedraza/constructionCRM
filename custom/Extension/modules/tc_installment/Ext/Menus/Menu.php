<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('tc_installment', 'edit', true)) {
        $module_menu[] = array("index.php?module=tc_installment&action=EditView&return_module=tc_installment&return_action=index", 'Create Installment',"Create",'tc_installment');
    }
	    
?>