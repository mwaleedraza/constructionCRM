<?php
$module_name = 'tc_installment';
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
          0 => 
          array (
            'name' => 'installment_amount_c',
            'comment' => '',
            'label' => 'LBL_INSTALLMENT_AMOUNT_C',
          ),
          1 => 
          array (
            'name' => 'installment_paid_c',
            'label' => 'LBL_INSTALLMENT_PAID_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'due_date_c',
            'comment' => '',
            'label' => 'LBL_DUE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'contacts_name_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTS_NAME_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tc_procurement_name_c',
            'studio' => 'visible',
            'label' => 'LBL_TC_PROCUREMENT_NAME_C',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
