<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class show_procurement{
	public function show_method($bean, $event, $arguments){
	global $db,$timedate;
	$currentDateTimeDB =  $timedate->asDbType($timedate->getNow());
	$duedate=date('Y-m-d h:i:s', strtotime($currentDateTimeDB) - date('Z'));
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		if (!isset($bean->fetched_row['id'])) {
		  $procBean = BeanFactory::getBean('tc_procurement');
		  $procList = $procBean->get_full_list("", "tc_procurement.project_id_c='$bean->project_id_c' && tc_procurement.contacts_name_c5='$bean->contacts_name_c5'");
	      if(empty($procList)){
			$bean->is_parent=true;
			$id = create_guid();
			$query = "INSERT INTO tc_procurement VALUES ('$id','$bean->name','$currentDateTimeDB','$bean->date_modified','$bean->modified_user_id','$bean->created_by','$bean->description','$bean->deleted','$bean->assigned_user_id','$bean->total_area_c','$bean->price_per_unit_c','$bean->area_unit_c','$bean->total_amount_c','$bean->amount_paid_c','$bean->amount_due_c','$bean->payment_method_c','$bean->vendor_c','$bean->contacts_id_c','$duedate','$bean->filename','$bean->file_mime_type',
			'$bean->filename1','$bean->file_mime_type1','$bean->filename2','$bean->file_mime_type2','$bean->filename3','$bean->file_mime_type3','$bean->filename4','$bean->file_mime_type4','$bean->amount_c1','$bean->amount_c2','$bean->amount_c3','$bean->contacts_id_c1','$bean->contacts_id_c2','$bean->contacts_id_c3','$bean->project_id_c',
		    '$bean->contacts_name_c1','$bean->contacts_name_c2','$bean->contacts_name_c3','$bean->contacts_id_c4','$bean->contacts_name_c4',0,'$bean->id','$bean->contacts_id_c5','$bean->contacts_name_c5','$bean->name_c','$bean->commissionp_fee_c'
		)";
			$result = $db->query($query);
		}
		else{
			foreach($procList as $indprocBean){
			   if($indprocBean->is_parent==true){
				   $GLOBALS['log']->fatal("Before".$indprocBean->name);
				   $bean->parent_id=$indprocBean->id;
				   $indprocBean->total_area_c=$indprocBean->total_area_c + $bean->total_area_c;
				   $indprocBean->total_amount_c=$indprocBean->total_amount_c + $bean->total_amount_c;
				   $indprocBean->amount_paid_c=$indprocBean->amount_paid_c + $bean->amount_paid_c;
	               $indprocBean->amount_due_c=$indprocBean->amount_due_c + $bean->amount_due_c;
				   //$indprocBean->save();
				   $query = "UPDATE tc_procurement SET total_area_c = '$indprocBean->total_area_c', total_amount_c = '$indprocBean->total_amount_c', amount_paid_c = '$indprocBean->amount_paid_c', amount_due_c =  '$indprocBean->amount_due_c' WHERE id = '$indprocBean->id'";
				   $result = $db->query($query);
					}
				}
			
			} 
		}
	}
}
?>