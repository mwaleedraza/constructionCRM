<?php

$layout_defs["Project"]["subpanel_setup"]['tc_dev_subpanel'] = array (   
  'order' => 100,   
  'module' => 'tc_dev',  //Source 
  'subpanel_name' => 'default',   
  'sort_order' => 'asc',   
  'sort_by' => 'id',   
  'title_key' => 'LBL_TC_DEV',   
  'get_subpanel_data' => 'tc_dev',   // link field
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