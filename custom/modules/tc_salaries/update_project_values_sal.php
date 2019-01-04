<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class update_project_value_sal{
	public function update_method_sal($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		
		
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);		  
		if (!isset($bean->fetched_row['id'])) { //New record
			$GLOBALS['log']->fatal("usman");
			$GLOBALS['log']->fatal("added" . $bean->name);
			$projectBean->total_salaries_amount_c = $projectBean->total_salaries_amount_c + $bean->total_amount_c;
			$projectBean->total_salaries_amount_paid_c = $projectBean->total_salaries_amount_paid_c + $bean->amount_paid_c;
			$projectBean->total_salaries_amount_due_c = $projectBean->total_salaries_amount_due_c + $bean->amount_due_c;

			$projectBean->total_project_cost_c = $projectBean->total_project_cost_c + $bean->total_amount_c;
			$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c + $bean->amount_paid_c;
			$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c + $bean->amount_due_c;
			
			$projectBean->gross_revenue = $projectBean->gross_revenue - $bean->amount_paid_c;
			
			$projectBean->save();
		}
		else{ //Old Record Edited
		// $GLOBALS['log']->fatal("Old record Edited" . print_r($bean, true));
		$projectBean->total_salaries_amount_c = $projectBean->total_salaries_amount_c + $bean->total_amount_c - $bean->fetched_row['total_amount_c'];
		$projectBean->total_salaries_amount_paid_c = $projectBean->total_salaries_amount_paid_c + $bean->amount_paid_c - $bean->fetched_row['amount_paid_c'];
		$projectBean->total_salaries_amount_due_c = $projectBean->total_salaries_amount_due_c + $bean->amount_due_c - $bean->fetched_row['amount_due_c'];

		$projectBean->total_project_cost_c = $projectBean->total_project_cost_c + $bean->total_amount_c - $bean->fetched_row['total_amount_c'];
		$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c + $bean->amount_paid_c - $bean->fetched_row['amount_paid_c'];
		$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c + $bean->amount_due_c - $bean->fetched_row['amount_due_c'];
		
		$projectBean->gross_revenue = $projectBean->gross_revenue - $bean->amount_paid_c + $bean->fetched_row['amount_paid_c'];

		$projectBean->save();
		}
	}
	public function delete_method_sal($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Record Deleted" . print_r($bean, true));
		
		$GLOBALS['log']->fatal("deleted" . $bean->name);
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);
		$projectBean->total_salaries_amount_c = $projectBean->total_salaries_amount_c - $bean->total_amount_c;
		$projectBean->total_salaries_amount_paid_c = $projectBean->total_salaries_amount_paid_c - $bean->amount_paid_c;
		$projectBean->total_salaries_amount_due_c = $projectBean->total_salaries_amount_due_c - $bean->amount_due_c;

		$projectBean->total_project_cost_c = $projectBean->total_project_cost_c - $bean->total_amount_c;
		$projectBean->total_project_paid_cost_c = $projectBean->total_project_paid_cost_c - $bean->amount_paid_c;
		$projectBean->total_project_due_cost_c = $projectBean->total_project_due_cost_c - $bean->amount_due_c;
		
		$projectBean->gross_revenue = $projectBean->gross_revenue + $bean->amount_paid_c;
		
		$projectBean->save();
		
	}
}
?>