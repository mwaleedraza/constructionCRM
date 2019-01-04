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
        2 => 
        array (
          'file' => 'custom/modules/tc_sales/autocomplete.js',
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
          0 => 
          array (
            'name' => 'project_name_c',
            'label' => 'LBL_PROJECT_NAME_C',
          ),
          1 => '',
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c3',
            'label' => 'LBL_CONTACTS_NAME_C3',
          ),
          1 => 
          array (
            'name' => 'commission_fee',
            'comment' => '',
            'label' => 'LBL_COMMISSION_FEE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c1',
            'label' => 'LBL_CONTACTS_NAME_C1',
          ),
          1 => 
          array (
            'name' => 'amount_c2',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c2',
            'label' => 'LBL_CONTACTS_NAME_C2',
          ),
          1 => 
          array (
            'name' => 'amount_c1',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C1',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c4',
            'label' => 'LBL_CONTACTS_NAME_C4',
          ),
          1 => 
          array (
            'name' => 'amount_c3',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C3',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'filename1',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_1',
          ),
          1 => 
          array (
            'name' => 'filename2',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_2',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'filename3',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_3',
          ),
          1 => 
          array (
            'name' => 'filename4',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_4',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_5',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
