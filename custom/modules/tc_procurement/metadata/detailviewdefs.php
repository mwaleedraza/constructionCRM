<?php
$module_name = 'tc_procurement';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'project_name_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_NAME_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_area_c',
            'label' => 'LBL_TOTAL_AREA_C',
            'comment' => '',
          ),
          1 => 
          array (
            'name' => 'area_unit_c',
            'comment' => 'Area Unit',
            'label' => 'LBL_AREA_UNIT_C',
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'amount_due_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_DUE_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTS_NAME_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'due_date_c',
            'comment' => '',
            'label' => 'LBL_DUE_DATE_C',
          ),
          1 => '',
        ),
        8 => 
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
        9 => 
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
        10 => 
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
