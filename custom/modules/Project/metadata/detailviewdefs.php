<?php
$viewdefs ['Project'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Project/Project.js',
        ),
        1 => 
        array (
          'file' => 'modules/Project/js/custom_project.js',
        ),
        2 => 
        array (
          'file' => 'custom/modules/Project/hide.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => ' {$APP.LBL_EDIT_BUTTON_LABEL} ',
              'htmlOptions' => 
              array (
                'id' => 'edit_button',
                'class' => 'button',
                'accessKey' => '{$APP.LBL_EDIT_BUTTON_KEY}',
                'name' => 'Edit',
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'; {/if}',
              ),
            ),
          ),
          1 => 
          array (
            'customCode' => '<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="button" name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}" onclick="project_delete(this);"/>',
            'sugar_html' => 
            array (
              'type' => 'button',
              'id' => 'delete_button',
              'value' => '{$APP.LBL_DELETE_BUTTON_LABEL}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_DELETE_BUTTON_TITLE}',
                'accessKey' => '{$APP.LBL_DELETE_BUTTON_KEY}',
                'id' => 'delete_button',
                'class' => 'button',
                'onclick' => 'project_delete(this);',
              ),
            ),
          ),
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_PROJECT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL5' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'project_type',
            'comment' => 'project type',
            'label' => 'LBL_PROJECT_TYPE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estimated_start_date',
            'label' => 'LBL_DATE_START',
          ),
          1 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estimated_end_date',
            'label' => 'LBL_DATE_END',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'am_projecttemplates_project_1_name',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_procurement_cost_c',
            'label' => 'LBL_TOTAL_PROCUREMENT_COST_C',
          ),
          1 => 
          array (
            'name' => 'total_procurement_paid_c',
            'label' => 'LBL_TOTAL_PROCUREMENT_PAID_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_procurement_due_c',
            'label' => 'LBL_TOTAL_PROCUREMENT_DUE_C',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_dev_cost_c',
            'label' => 'LBL_TOTAL_DEV_COST_C',
          ),
          1 => 
          array (
            'name' => 'total_dev_paid_c',
            'label' => 'LBL_TOTAL_DEV_PAID_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_dev_due_c',
            'label' => 'LBL_TOTAL_DEV_DUE_C',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_sales_c',
            'label' => 'LBL_TOTAL_SALES_C',
          ),
          1 => 
          array (
            'name' => 'total_sales_amount_received_c',
            'label' => 'LBL_TOTAL_SALES_AMOUNT_RECEIVED_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_sales_amount_due_c',
            'label' => 'LBL_TOTAL_SALES_AMOUNT_DUE_C',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_salaries_amount_c',
            'label' => 'LBL_TOTAL_SALARIES_AMOUNT_C',
          ),
          1 => 
          array (
            'name' => 'total_salaries_amount_paid_c',
            'label' => 'LBL_TOTAL_SALARIES_AMOUNT_PAID_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_salaries_amount_due_c',
            'label' => 'LBL_TOTAL_SALARIES_AMOUNT_DUE_C',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_project_cost_c',
            'label' => 'LBL_TOTAL_PROJECT_COST_C',
          ),
          1 => 
          array (
            'name' => 'total_project_paid_cost_c',
            'label' => 'LBL_TOTAL_PROJECT_PAID_COST_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_project_due_cost_c',
            'label' => 'LBL_TOTAL_PROJECT_DUE_COST_C',
          ),
          1 => 
          array (
            'name' => 'gross_revenue',
            'label' => 'LBL_GROSS_REVENUE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
