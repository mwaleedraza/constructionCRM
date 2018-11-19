<?php
$module_name = 'tc_procurement';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' =>
      array ('includes' => array (
        0 => array (
          'file' => 'custom/modules/tc_procurement/tc_procurement_validations.js',
        ),
        1 => array (
          'file' => 'custom/modules/tc_procurement/onsave.js',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_area_c',
            'comment' => '',
            'label' => 'LBL_TOTAL_AREA_C',
          ),
          1 => 
          array (
            'name' => 'area_unit_c',
            'comment' => 'Area Unit',
            'label' => 'LBL_AREA_UNIT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'price_per_unit_c',
            'comment' => '',
            'label' => 'LBL_PRICE_PER_UNIT_C',
          ),
          1 => 
          array (
            'name' => 'total_amount_c',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount_paid_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_PAID_C',
          ),
          1 => 
          array (
            'name' => 'payment_method_c',
            'comment' => 'Area Unit',
            'label' => 'LBL_PAYMENT_METHOD_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount_due_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_DUE_C',
          ),
          1 => 
          array (
            'name' => 'vendor_c',
            'comment' => '',
            'label' => 'LBL_VENDOR_C',
          ),
        ),
      ),
    ),
  ),
);
;
?>
