<?php

if (!defined('sugarEntry') || !sugarEntry)  die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class tc_devViewDetail extends ViewDetail{
    public function display(){
        global $db;
        $ledgerArr = array();
        if($this->bean->is_parent==1 && empty($this->bean->parent_id)){
            $query='SELECT * FROM tc_dev WHERE deleted=0 AND parent_id="'.$this->bean->id.'" order by date_entered asc';
			/* die($query); */
            $result=$db->query($query);
            while($row = $db->fetchByAssoc($result)){
                $ledgerArr[] = $row;
            }
            $this->ss->assign("LEDGER",$ledgerArr);
        }
        parent::display();
    }
}
?>