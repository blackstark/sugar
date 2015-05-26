<?php
 // created: 2015-05-26 17:28:25
$layout_defs["K1_House"]["subpanel_setup"]['k1_office_k1_house'] = array (
  'order' => 100,
  'module' => 'K1_office',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_K1_OFFICE_K1_HOUSE_FROM_K1_OFFICE_TITLE',
  'get_subpanel_data' => 'k1_office_k1_house',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
