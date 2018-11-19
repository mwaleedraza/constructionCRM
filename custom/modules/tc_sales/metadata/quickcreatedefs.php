<?php
$module_name = 'tc_sales';
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
          'file' => 'custom/modules/tc_sales/validation.js',
        ),
		 1 => 
        array (
		'file' => 'custom/modules/tc_sales/onsave.js',
    
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
            'name' => 'land_area',
            'comment' => '',
            'label' => 'LBL_LAND_AREA',
          ),
          1 => 
          array (
            'name' => 'area_unit',
            'comment' => 'Area Unit',
            'label' => 'LBL_AREA_UNIT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'land_type',
            'comment' => 'Land Type',
            'label' => 'LBL_LAND_TYPE',
          ),
          1 => 
          array (
            'name' => 'land_price',
            'comment' => '',
            'label' => 'LBL_LAND_PRICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'land_price_received',
            'comment' => '',
            'label' => 'LBL_LAND_PRICE_RECEIVED',
          ),
          1 => 
          array (
            'name' => 'land_price_due',
            'comment' => '',
            'label' => 'LBL_LAND_PRICE_DUE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
