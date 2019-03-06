<?php
// created: 2019-03-06 15:01:41
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'contacts_name_c5' => 
  array (
    'type' => 'relate',
    'vname' => 'LBL_CONTACTS_NAME_C5',
    'id' => 'CONTACTS_ID_C5',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_id_c5',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'tc_procurement',
    'width' => '5%',
    'default' => true,
  ),
  'total_area_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TOTAL_AREA_C',
    'width' => '10%',
  ),
  'commissionp_fee_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_COMMISSIONP_FEE_C',
    'width' => '10%',
  ),
  'total_amount_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TOTAL_AMOUNT_C',
    'width' => '10%',
  ),
  'amount_paid_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNT_PAID_C',
    'width' => '10%',
  ),
  'amount_due_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNT_DUE_C',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'tc_procurement',
    'width' => '4%',
    'default' => true,
  ),
);