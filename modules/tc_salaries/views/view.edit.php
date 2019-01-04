<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class tc_salariesViewEdit extends ViewEdit{
 	public function __construct(){
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 		$this->useModuleQuickCreateTemplate = true;
 	}
	function display() {
		if(isset($_REQUEST['return_module']) && $_REQUEST['return_module']=='Project'  && isset($_REQUEST['action']) && $_REQUEST['action']=='SubpanelCreates'){
			$this->ev->focus->project_id_c=$_REQUEST['parent_id'];
			$this->ev->focus->project_name_c=$_REQUEST['parent_name'];
	
		}
		
        parent::display();
 	}
}