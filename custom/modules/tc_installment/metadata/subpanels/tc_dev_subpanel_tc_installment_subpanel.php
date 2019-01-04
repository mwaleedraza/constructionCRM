<?php
// created: 2019-01-04 14:45:56
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
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'tc_installment',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'tc_installment',
    'width' => '5%',
    'default' => true,
  ),
);