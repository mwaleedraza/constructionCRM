<?php
$module_name = 'tc_dev';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/tc_dev/validation.js',
        ),
        1 => 
        array (
          'file' => 'custom/modules/tc_dev/onsave.js',
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
            'name' => 'qty',
            'comment' => '',
            'label' => 'LBL_QTY',
          ),
          1 => 
          array (
            'name' => 'unit_price',
            'comment' => '',
            'label' => 'LBL_UNIT_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dev_type',
            'comment' => 'Dev Type',
            'label' => 'LBL_DEV_TYPE',
          ),
          1 => 
          array (
            'name' => 'supplier',
            'comment' => '',
            'label' => 'LBL_SUPPLIER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_price',
            'comment' => '',
            'label' => 'LBL_TOTAL_PRICE',
          ),
          1 => 
          array (
            'name' => 'total_amount',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount_paid',
            'comment' => '',
            'label' => 'LBL_AMOUNT_PAID',
          ),
          1 => 
          array (
            'name' => 'total_amount_payble',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_PAYBLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c3',
            'label' => 'LBL_CONTACTS_NAME_C3',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
