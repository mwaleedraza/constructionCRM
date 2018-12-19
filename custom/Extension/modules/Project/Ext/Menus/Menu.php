<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
unset($module_menu);
global $mod_strings, $app_strings, $sugar_config;
      if (ACLController::checkAccess('Project', 'edit', true)) {
        $module_menu[] = array("index.php?module=Project&action=EditView&return_module=Project&return_action=index", $mod_strings['LNK_NEW_PROJECT'],"Create", 'Project');
    }
	
	  
	 
?>