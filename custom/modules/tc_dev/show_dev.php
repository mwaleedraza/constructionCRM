<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class show_dev{
	public function show_method($bean, $event, $arguments){
	global $db,$timedate;
	$currentDateTimeDB =  $timedate->asDbType($timedate->getNow());
	$duedate=date('Y-m-d h:i:s', strtotime($currentDateTimeDB) - date('Z'));
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		if (!isset($bean->fetched_row['id'])) {
		  $devBean = BeanFactory::getBean('tc_dev');
		  $devList = $devBean->get_full_list("", "tc_dev.project_id_c='$bean->project_id_c' && tc_dev.contacts_name_c3='$bean->contacts_name_c3'");
	      if(empty($devList)){
			$bean->is_parent=true;
			$id = create_guid();
			$query = "INSERT INTO tc_dev VALUES ('$id','$bean->name','$currentDateTimeDB','$bean->date_modified','$bean->modified_user_id','$bean->created_by','$bean->description','$bean->deleted','$bean->assigned_user_id','$bean->total_amount','$bean->total_amount_payble','$bean->amount_paid','$bean->dev_type','$bean->vendor',
			'$bean->qty','$bean->unit_price','$bean->total_price','$bean->supplier','$bean->project_id_c','$bean->project_name_c','$bean->conatcts_id_c1','$bean->contacts_name_c1','$bean->contacts_id_c2','$bean->contacts_name_c2','$bean->contacts_id_c3','$bean->contacts_name_c3','$bean->filename1','$bean->file_mime_type1',
		    '$bean->filename2','$bean->file_mime_type2','$bean->filename3','$bean->file_mime_type3','$bean->filename4','$bean->file_mime_type4','$bean->filename','$bean->file_mime_type','$bean->contacts_id_c4','$bean->contacts_name_c4','$bean->amount_c1','$bean->amount_c2','$bean->amount_c3',0,'$bean->id'
		)";
			$result = $db->query($query);
		}
		else{
			foreach($devList as $inddevBean){
			   if($inddevBean->is_parent==true){
				   $GLOBALS['log']->fatal("Before".$inddevBean->name);
				   $inddevBean->qty=$inddevBean->qty + $bean->qty;
				   $inddevBean->total_price=$inddevBean->total_price + $bean->total_price;
				   $inddevBean->total_amount=$inddevBean->total_amount + $bean->total_amount;
	               $inddevBean->amount_paid=$inddevBean->amount_paid + $bean->amount_paid;
				    $inddevBean->total_amount_payble=$inddevBean->total_amount_payble + $bean->total_amount_payble;
				  // $inddevBean->save();
				   $query = "UPDATE tc_dev SET qty = ' $inddevBean->qty', total_price = ' $inddevBean->total_price', total_amount = '$inddevBean->total_amount', amount_paid =  '$inddevBean->amount_paid',total_amount_payble =  '$inddevBean->total_amount_payble' WHERE id = '$inddevBean->id'";
				   $result = $db->query($query);
					}
				}
			
			} 
		}
	}
}
?>