<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('tc_dev', 'edit', true)) {
        $module_menu[] = array("index.php?module=tc_dev&action=EditView&return_module=tc_dev&return_action=index", 'Create Development',"Create",'tc_dev');
    }
