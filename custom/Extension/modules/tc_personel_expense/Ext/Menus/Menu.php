<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('tc_personel_expense', 'edit', true)) {
        $module_menu[] = array("index.php?module=tc_personel_expense&action=EditView&return_module=tc_personel_expense&return_action=index", 'Create personel Expense',"Create",'tc_personel_expense');
    }

?>