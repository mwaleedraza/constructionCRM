<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
 if (ACLController::checkAccess('AOR_Reports', 'edit', true)) {
 $module_menu[]=array("index.php?module=AOR_Reports&action=EditView&return_module=AOR_Reports&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Create", 'AOR_Reports');}
	if (ACLController::checkAccess('AOR_Reports', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=AOR_Reports&return_module=AOR_Reports&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'AOR_Reports');
}
?>