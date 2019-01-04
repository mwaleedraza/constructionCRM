<?php
 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('modules/Project/views/view.detail.php');
class CustomProjectViewDetail extends ProjectViewDetail{
    public function display(){
        parent::display();
    }
	 protected function _displaySubPanels(){
		if (isset($this->bean) && !empty($this->bean->id) && (file_exists('modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/Ext/Layoutdefs/layoutdefs.ext.php'))) {
		    require_once ('include/SubPanel/SubPanelTiles.php');
		    $subpanel = new SubPanelTiles($this->bean, $this->module);
			if($this->bean->project_type=="Mehrab States"){
		    unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['tc_dev_subpanel']);
			unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['activities']);
			}
			if($this->bean->project_type=="Mehrab Developers"){
			unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['activities']);
			}
			if($this->bean->project_type=="Mehrab Engineers"){
			unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['activities']);
			unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['tc_procurement_subpanel']);
			unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['tc_sales_subpanel']);
			}
		    echo $subpanel->display();
		}
   }
}

?>