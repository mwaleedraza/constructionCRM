<?php
$module_name = 'tc_dev';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'footerTpl' => 'modules/tc_dev/tpls/ledgerTpl.tpl',
        'buttons' => 
        array (
          0 => 'EDIT',
          2 => 'DELETE',
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name_c4',
            'label' => 'LBL_CONTACTS_NAME_C4',
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'total_amount_payble',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_PAYBLE',
          ),
          1 => '',
        ),
        4 => 
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
        5 => 
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
        6 => 
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
        7 => 
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
        8 => 
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
        9 => 
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
