<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
class show_sales{

	public function show_method($bean, $event, $arguments){
	
	global $db,$timedate;
	$currentDateTimeDB =  $timedate->asDbType($timedate->getNow());
	$duedate=date('Y-m-d h:i:s', strtotime($currentDateTimeDB) - date('Z'));
		// $GLOBALS['log']->fatal("Before Save logic hook :".$bean->name);
		if (!isset($bean->fetched_row['id'])) {
					 $GLOBALS['log']->fatal("Before");
		  $salesBean = BeanFactory::getBean('tc_sales');
		  $salesList = $salesBean->get_full_list("", "tc_sales.project_id_c='$bean->project_id_c' && tc_sales.contacts_name_c4='$bean->contacts_name_c4'");
	      if(empty($salesList)){
			$bean->is_parent=true;
			$id = create_guid();
			$query = "INSERT INTO tc_sales VALUES ('$id','$bean->name','$currentDateTimeDB','$bean->date_modified','$bean->modified_user_id','$bean->created_by','$bean->description','$bean->deleted','$bean->assigned_user_id','$bean->land_area','$bean->area_unit','$bean->land_type','$bean->land_price','$bean->land_price_received',
			'$bean->land_price_due','$bean->project_id_c','$bean->project_name_c','$bean->contacts_id_c1','$bean->contacts_name_c1','$bean->contacts_id_c2','$bean->conatcts_name_c2','$bean->filename1','$bean->file_mime_type1','$bean->filename2','$bean->file_mime_type2','$bean->filename3','$bean->file_mime_type3','$bean->filename4','$bean->file_mime_type4','$bean->filename','$bean->file_mime_type','$bean->contacts_id_c3','$bean->contacts_name_c3','$bean->commission_fee','$bean->amount_c1','$bean->amount_c2','$bean->amount_c3','$bean->contacts_id_c4','$bean->contacts_name_c4',0,'$bean->id'
		)";
			$result = $db->query($query);
		}
		else{
			foreach($salesList as $indsalesBean){
			   if($indsalesBean->is_parent==true){
				   $GLOBALS['log']->fatal("Before".$indsalesBean->name);
				   $indsalesBean->land_area=$indsalesBean->land_area + $bean->land_area;
				   $indsalesBean->land_price=$indsalesBean->land_price + $bean->land_price;
				   $indsalesBean->land_price_received=$indsalesBean->land_price_received + $bean->land_price_received;
	               $indsalesBean->land_price_due=$indsalesBean->land_price_due + $bean->land_price_due;
				   //$indsalesBean->save();
				    $query = "UPDATE tc_sales SET land_area = '$indsalesBean->land_area', land_price = '$indsalesBean->land_price', land_price_received = ' $indsalesBean->land_price_received', land_price_due =  '$indsalesBean->land_price_due' WHERE id = '$indsalesBean->id'";
				   $result = $db->query($query);
					}
				}
			
			} 
		}
	}
}
?>