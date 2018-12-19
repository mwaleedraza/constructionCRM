<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('Contacts', 'edit', true)) {
        $module_menu[] = array("index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=index", $mod_strings['LNK_NEW_CONTACT'],"Create", 'Contacts');
    }
	    if (ACLController::checkAccess('Contacts', 'import', true)) {
        $module_menu[] =array("index.php?module=Import&action=Step1&import_module=Contacts&return_module=Contacts&return_action=index", $mod_strings['LNK_IMPORT_CONTACTS'],"Import", 'Contacts');
		}
?>