<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class tc_installmentViewEdit extends ViewEdit{
 	public function __construct(){
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 		$this->useModuleQuickCreateTemplate = true;
 	}

	function display() {
		if(isset($_REQUEST['return_module']) && $_REQUEST['return_module']=='tc_procurement'  && isset($_REQUEST['action']) && $_REQUEST['action']=='SubpanelCreates'){
	    $tc_pro = BeanFactory::getBean('tc_procurement', $_REQUEST['parent_id']);
			$this->ev->focus->contacts_id_c=$tc_pro->contacts_id_c5;
			$this->ev->focus->contacts_name_c=$tc_pro->contacts_name_c5;
		}
		if(isset($_REQUEST['return_module']) && $_REQUEST['return_module']=='tc_dev'  && isset($_REQUEST['action']) && $_REQUEST['action']=='SubpanelCreates'){
	    $tc_dv = BeanFactory::getBean('tc_dev', $_REQUEST['parent_id']);
			$this->ev->focus->contacts_id_c=$tc_dv->contacts_id_c4;
			$this->ev->focus->contacts_name_c=$tc_dv->contacts_name_c4;
		}
        parent::display();
 	}
}