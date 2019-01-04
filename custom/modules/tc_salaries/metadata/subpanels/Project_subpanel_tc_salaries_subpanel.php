<?php
// created: 2019-01-03 16:26:47
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'sal_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_SAL_TYPE',
    'width' => '10%',
    'default' => true,
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
    'width' => '4%',
    'vname' => 'LBL_EDIT_BUTTON',
    'default' => true,
    'widget_class' => 'SubPanelEditButton',
  ),
);