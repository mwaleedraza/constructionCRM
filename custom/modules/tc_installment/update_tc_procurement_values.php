<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class update_tc_procurement_values{
	public function update_method($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		//$GLOBALS['log']->fatal("here");
		//$GLOBALS['log']->fatal("tc_procurement_id" . $tc_procurement_id);
		$tc_procurement_id = $bean->tc_procurement_id_c;
			
		$tc_dev_id = $bean->tc_dev_id_c;
		
		if(empty($tc_dev_id)){
		$tc_procurementBean = BeanFactory::getBean('tc_procurement', $tc_procurement_id);
		if (!isset($bean->fetched_row['id'])) { //New record
			$tc_procurementBean->amount_paid_c = $tc_procurementBean->amount_paid_c + $bean->installment_amount_c;
			$tc_procurementBean->amount_due_c = $tc_procurementBean->amount_due_c - $bean->installment_amount_c;
			$tc_procurementBean->save();
		}
		else{ //Old Record Edited
			//$GLOBALS['log']->fatal("here1");
		// $GLOBALS['log']->fatal("Old record Edited" . print_r($bean, true));
		/* $projectBean->total_procurement_cost_c = $projectBean->total_procurement_cost_c + $bean->total_amount_c - $bean->fetched_row['total_amount_c']; */
		$tc_procurementBean->amount_paid_c = $tc_procurementBean->amount_paid_c + $bean->installment_amount_c - $bean->fetched_row['installment_amount_c'];
		$tc_procurementBean->amount_due_c = $tc_procurementBean->amount_due_c - $bean->installment_amount_c - $bean->fetched_row['installment_amount_c'];
		$tc_procurementBean->save();
		}
	}
	else{
		$tc_devBean = BeanFactory::getBean('tc_dev', $tc_dev_id);	
		if (!isset($bean->fetched_row['id'])) { //New record
			$tc_devBean->amount_paid = $tc_devBean->amount_paid + $bean->installment_amount_c;
			$tc_devBean->total_amount_payble = $tc_devBean->total_amount_payble - $bean->installment_amount_c;
		    $tc_devBean->save();
		}
		else{ //Old Record Edited
			$GLOBALS['log']->fatal("here1 ");
		// $GLOBALS['log']->fatal("Old record Edited" . print_r($bean, true));
		/* $projectBean->total_procurement_cost_c = $projectBean->total_procurement_cost_c + $bean->total_amount_c - $bean->fetched_row['total_amount_c']; */
		$tc_devBean->amount_paid = $tc_devBean->amount_paid + $bean->installment_amount_c - $bean->fetched_row['installment_amount_c'];
		$tc_devBean->total_amount_payble = $tc_devBean->total_amount_payble - $bean->installment_amount_c - $bean->fetched_row['installment_amount_c'];
		$tc_devBean->save();
		}
	}
}
	public function delete_method($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Record Deleted" . print_r($bean, true));
		$tc_procurement_id = $bean->tc_procurement_id_c;
		$tc_dev_id = $bean->tc_dev_id_c;
		if(empty($tc_dev_id)){
		$tc_procurementBean = BeanFactory::getBean('tc_procurement', $tc_procurement_id);
		/* $projectBean->total_procurement_cost_c = $projectBean->total_procurement_cost_c - $bean->total_amount_c; */
		$tc_procurementBean->amount_paid_c = $tc_procurementBean->amount_paid_c - $bean->installment_amount_c;
		$tc_procurementBean->amount_due_c = $tc_procurementBean->amount_due_c + $bean->installment_amount_c;
	//$GLOBALS['log']->fatal("here2");
		$tc_procurementBean->save();
		}
		else{
		$tc_devBean = BeanFactory::getBean('tc_dev', $tc_dev_id);
		/* $projectBean->total_procurement_cost_c = $projectBean->total_procurement_cost_c - $bean->total_amount_c; */
		$tc_devBean->amount_paid = $tc_devBean->amount_paid - $bean->installment_amount_c;
		$tc_devBean->total_amount_payble = $tc_devBean->total_amount_payble + $bean->installment_amount_c;
		$GLOBALS['log']->fatal("here2");

		$tc_devBean->save();
		
		}
		
	}

}
?>