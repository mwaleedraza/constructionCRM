<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class update_project_values_sale{
	public function update_method_sale($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);		  
		if (!isset($bean->fetched_row['id'])) { //New record
			$projectBean->total_sales_c = $projectBean->total_sales_c + $bean->land_price;
			$projectBean->total_sales_amount_received_c = $projectBean->total_sales_amount_received_c + $bean->land_price_received;
			$projectBean->total_sales_amount_due_c = $projectBean->total_sales_amount_due_c + $bean->land_price_due;
			
			$projectBean->gross_revenue = $projectBean->gross_revenue + $bean->land_price_received;

				$bean->name=$bean->contacts_name_c3;
			$projectBean->save();
		}
		else{ //Old Record Edited
		// $GLOBALS['log']->fatal("Old record Edited" . print_r($bean, true));
		$projectBean->total_sales_c = $projectBean->total_sales_c + $bean->land_price- $bean->fetched_row['land_price'];
		$projectBean->total_sales_amount_received_c = $projectBean->total_sales_amount_received_c + $bean->land_price_received - $bean->fetched_row['land_price_received'];
		$projectBean->total_sales_amount_due_c = $projectBean->total_sales_amount_due_c + $bean->land_price_due - $bean->fetched_row['land_price_due'];
		
		$projectBean->gross_revenue = $projectBean->gross_revenue + $bean->land_price_received- $bean->fetched_row['land_price_received'];
		
	   // $projectBean->gross_revenue = $projectBean->gross_revenue + $projectBean->total_sales_c- $projectBean->fetched_row['total_sales_c'];
		//$projectBean->save();
		}
	}
	public function delete_method_sale($bean, $event, $arguments){
		// $GLOBALS['log']->fatal("Record Deleted" . print_r($bean, true));
		$project_id = $bean->project_id_c;
		$projectBean = BeanFactory::getBean('Project', $project_id);
		if($bean->is_parent==1){
		
		$projectBean->total_sales_c = $projectBean->total_sales_c - $bean->land_price;
		$projectBean->total_sales_amount_received_c = $projectBean->total_sales_amount_received_c - $bean->land_price_received;
		$projectBean->total_sales_amount_due_c = $projectBean->total_sales_amount_due_c - $bean->land_price_due;
		
		//$projectBean->gross_revenue = $projectBean->gross_revenue + $projectBean->total_sales_c;

		$projectBean->gross_revenue = $projectBean->gross_revenue + $bean->land_price_received;
		 
		$projectBean->save();
		}
	
	}
}
?>