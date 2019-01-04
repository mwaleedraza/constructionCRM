<?php
$module_name = 'tc_salaries';
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
          'file' => 'custom/modules/tc_salaries/validation.js',
        ),
		1 => 
        array (
          'file' => 'custom/modules/tc_salaries/onsave.js',
        ),
		2 => 
        array (
          'file' => 'custom/modules/tc_salaries/autocomplete.js',
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sal_type',
            'comment' => 'Salary Type',
            'label' => 'LBL_SAL_TYPE',
          ),
          1 => 
          array (
            'name' => 'total_amount_c',
            'comment' => '',
            'label' => 'LBL_TOTAL_AMOUNT_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount_paid_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_PAID_C',
          ),
          1 => 
          array (
            'name' => 'amount_due_c',
            'comment' => '',
            'label' => 'LBL_AMOUNT_DUE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'project_name_c',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_NAME_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
