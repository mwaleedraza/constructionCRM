<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class update_project_values_dev{
	public function update_method_dev($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);		  
		if (!isset($bean->fetched_row['id'])) { //New record
			$projectBean->total_dev_cost_c = $projectBean->total_dev_cost_c + $bean->total_amount;
			$projectBean->total_dev_paid_c = $projectBean->total_dev_paid_c + $bean->amount_paid;
			$projectBean->total_dev_due_c = $projectBean->total_dev_due_c + $bean->total_amount_payble;

			$projectBean->total_project_cost_c = $projectBean->total_project_cost_c + $bean->total_amount;
			$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c + $bean->amount_paid;
			$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c + $bean->total_amount_payble;
			
			$projectBean->gross_revenue = $projectBean->gross_revenue - $bean->amount_paid;
			$bean->name=$bean->contacts_name_c4;
			$projectBean->save();
		}
		else{ //Old Record Edited
		// $GLOBALS['log']->fatal("Old record Edited" . print_r($bean, true));
		$projectBean->total_dev_cost_c = $projectBean->total_dev_cost_c + $bean->total_amount- $bean->fetched_row['total_amount'];
		$projectBean->total_dev_paid_c = $projectBean->total_dev_paid_c + $bean->amount_paid - $bean->fetched_row['amount_paid'];
		$projectBean->total_dev_due_c = $projectBean->total_dev_due_c + $bean->total_amount_payble - $bean->fetched_row['total_amount_payble'];

		$projectBean->total_project_cost_c = $projectBean->total_project_cost_c + $bean->total_amount - $bean->fetched_row['total_amount'];
		$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c + $bean->amount_paid - $bean->fetched_row['amount_paid'];
		$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c + $bean->total_amount_payble - $bean->fetched_row['total_amount_payble'];
		
		$projectBean->gross_revenue = $projectBean->gross_revenue - $bean->amount_paid + $bean->fetched_row['amount_paid'];
		
		$projectBean->save();
		}
	}
	public function delete_method_dev($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Record Deleted" . print_r($bean, true));
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);
		if($bean->is_parent==1){
		
		$projectBean->total_dev_cost_c = $projectBean->total_dev_cost_c - $bean->total_amount;
		$projectBean->total_dev_paid_c = $projectBean->total_dev_paid_c - $bean->amount_paid;
		$projectBean->total_dev_due_c = $projectBean->total_dev_due_c - $bean->total_amount_payble;

		$projectBean->total_project_cost_c = $projectBean->total_project_cost_c - $bean->total_amount;
		$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c - $bean->amount_paid;
		$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c - $bean->total_amount_payble;
		
		$projectBean->gross_revenue = $projectBean->gross_revenue + $bean->amount_paid;
		
		$projectBean->save();
		}
		
	}
}
?>