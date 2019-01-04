<?php
// created: 2019-01-04 14:46:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'installment_amount_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_INSTALLMENT_AMOUNT_C',
    'width' => '10%',
  ),
  'due_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DUE_DATE_C',
    'width' => '10%',
  ),
  'contacts_name_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_CONTACTS_NAME_C',
    'id' => 'CONTACTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_id_c',
  ),
  'installment_paid_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_INSTALLMENT_PAID_C',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'width' => '4%',
    'vname' => 'LBL_EDIT_BUTTON',
    'default' => true,
    'widget_class' => 'SubPanelEditButton',
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
);