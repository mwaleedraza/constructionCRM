<?php
$module_name = 'tc_dev';
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/tc_dev/validation.js',
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
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'supplier',
            'comment' => '',
            'label' => 'LBL_SUPPLIER',
          ),
          1 => 
          array (
            'name' => 'project_name_c',
            'label' => 'LBL_PROJECT_NAME_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c4',
            'label' => 'LBL_CONTACTS_NAME_C4',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c1',
            'label' => 'LBL_CONTACTS_NAME_C1',
          ),
          1 => 
          array (
            'name' => 'amount_c3',
            'comment' => '',
            'label' => 'LBL_AMOUNT_C3',
          ),
        ),
        4 => 
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
        5 => 
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
        6 => 
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
        7 => 
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
        8 => 
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
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'dev_type',
            'comment' => 'Dev Type',
            'label' => 'LBL_DEV_TYPE',
          ),
          1 => 
          array (
            'name' => 'vendor',
            'comment' => '',
            'label' => 'LBL_VENDOR',
          ),
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
            'name' => 'total_price',
            'comment' => '',
            'label' => 'LBL_TOTAL_PRICE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_amount',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'amount_paid',
            'comment' => '',
            'label' => 'LBL_AMOUNT_PAID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_payble',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_PAYBLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
