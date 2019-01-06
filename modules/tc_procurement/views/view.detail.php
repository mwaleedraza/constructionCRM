<?php

if (!defined('sugarEntry') || !sugarEntry)  die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class tc_procurementViewDetail extends ViewDetail{
    public function display(){
        global $db;
        $ledgerArr = array();
        if($this->bean->is_parent==1 && empty($this->bean->parent_id)){
            /*
                Hide other details and buttons
            */
            TemplateHandler::clearCache($this->module,'DetailView.tpl');
            unset($this->dv->defs['panels']);
            unset($this->dv->defs['templateMeta']['form']['buttons'][0]);
            unset($this->dv->defs['templateMeta']['form']['buttons'][2]);
            echo "<script> $(document).ready(function(){
                    $('#tab-actions').hide();
                    $('.tab-content').hide();
            }); </script>";

            $query='SELECT * FROM tc_procurement WHERE deleted=0 AND parent_id="'.$this->bean->id.'" order by date_entered asc';
			/* die($query); */
            $result=$db->query($query);
            while($row = $db->fetchByAssoc($result)){
                $ledgerArr[] = $row;
            }

            $this->ss->assign("LEDGER",$ledgerArr);
            $this->ss->assign("NAME",$this->bean->name);
        }
        parent::display();
    }
    protected function _displaySubPanels(){
        if (isset($this->bean) && !empty($this->bean->id) && (file_exists('modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/metadata/subpaneldefs.php') || file_exists('custom/modules/' . $this->module . '/Ext/Layoutdefs/layoutdefs.ext.php'))) {
            require_once ('include/SubPanel/SubPanelTiles.php');
            $subpanel = new SubPanelTiles($this->bean, $this->module);
            if($this->bean->is_parent==1 && empty($this->bean->parent_id)){
                unset($subpanel->subpanel_definitions->layout_defs['subpanel_setup']['tc_installment_subpanel']);
            }
            echo $subpanel->display();
        }
    }
}
?>