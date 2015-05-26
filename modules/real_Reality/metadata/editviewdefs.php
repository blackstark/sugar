<?php
$module_name = 'real_Reality';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'stage',
            'label' => 'LBL_STAGE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'repair',
            'label' => 'LBL_REPAIR',
          ),
          1 => 
          array (
            'name' => 'footage',
            'label' => 'LBL_FOOTAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rooms',
            'studio' => 'visible',
            'label' => 'LBL_ROOMS',
          ),
          1 => 
          array (
            'name' => 'dis_from_subway',
            'label' => 'LBL_DIS_FROM_SUBWAY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
