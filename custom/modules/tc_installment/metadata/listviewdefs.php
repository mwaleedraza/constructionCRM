<?php
$module_name = 'tc_installment';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INSTALLMENT_AMOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_INSTALLMENT_AMOUNT_C',
    'width' => '10%',
  ),
  'INSTALLMENT_PAID_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_INSTALLMENT_PAID_C',
    'width' => '10%',
  ),
  'DUE_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_DUE_DATE_C',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
