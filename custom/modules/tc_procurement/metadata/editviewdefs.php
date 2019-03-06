<?php
$module_name = 'tc_procurement';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
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
      'syncDetailEditViews' => false,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/tc_procurement/tc_procurement_validations.js',
        ),
        1 => 
        array (
          'file' => 'custom/modules/tc_procurement/autocomplete.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'project_name_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_NAME_C',
          ),
          1 => 
          array (
            'name' => 'total_area_c',
            'label' => 'LBL_TOTAL_AREA_C',
            'comment' => '',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c5',
            'label' => 'LBL_CONTACTS_NAME_C5',
          ),
          1 => 
          array (
            'name' => 'due_date_c',
            'comment' => '',
            'label' => 'LBL_DUE_DATE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'area_unit_c',
            'comment' => 'Area Unit',
            'label' => 'LBL_AREA_UNIT_C',
          ),
          1 => 
          array (
            'name' => 'price_per_unit_c',
            'comment' => '',
            'label' => 'LBL_PRICE_PER_UNIT_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'commissionp_fee_c',
            'comment' => '',
            'label' => 'LBL_COMMISSIONP_FEE_C',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_c',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_C',
          ),
          1 => 
          array (
            'name' => 'amount_paid_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_PAID_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'payment_method_c',
            'comment' => 'Area Unit',
            'label' => 'LBL_PAYMENT_METHOD_C',
          ),
          1 => 
          array (
            'name' => 'amount_due_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_DUE_C',
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
            'name' => 'amount_c3',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C3',
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
            'name' => 'amount_c1',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C1',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c3',
            'label' => 'LBL_CONTACTS_NAME_C3',
          ),
          1 => 
          array (
            'name' => 'amount_c2',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C2',
          ),
        ),
        10 => 
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
        11 => 
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
        12 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'comment' => 'File name associated with the note (attachment)',
            'label' => 'LBL_FILENAME_5',
          ),
        ),
      ),
    ),
  ),
);
;
?>
