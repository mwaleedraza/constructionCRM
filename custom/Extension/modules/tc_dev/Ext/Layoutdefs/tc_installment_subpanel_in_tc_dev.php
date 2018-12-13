<?php

$layout_defs["tc_dev"]["subpanel_setup"]['tc_installment_subpanel'] = array (   
  'order' => 100,   
  'module' => 'tc_installment',  //Source 
  'subpanel_name' => 'default',   
  'sort_order' => 'asc',   
  'sort_by' => 'id',   
  'title_key' => 'LBL_TC_INSTALLMENT_SUBPANEL_C',   
  'get_subpanel_data' => 'tc_installment',   // link field
  'top_buttons' => array (     
    0 => array (       
    'widget_class' => 'SubPanelTopButtonQuickCreate',     
    ),     
    1 => array (       
    'widget_class' => 'SubPanelTopSelectButton',       
    'mode' => 'MultiSelect',     
    ),
  ),
);