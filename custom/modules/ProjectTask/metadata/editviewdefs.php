<?php
$viewdefs ['ProjectTask'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/ProjectTask/ProjectTask.js',
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
          ),
          1 => 
          array (
            'name' => 'date_finish',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'customCode' => '<select name="{$fields.status.name}" id="{$fields.status.name}" title="" tabindex="s" onchange="update_percent_complete(this.value);">{if isset($fields.status.value) && $fields.status.value != ""}{html_options options=$fields.status.options selected=$fields.status.value}{else}{html_options options=$fields.status.options selected=$fields.status.default}{/if}</select>',
          ),
          1 => 'priority',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'percent_complete',
            'customCode' => '<input type="text" name="{$fields.percent_complete.name}" id="{$fields.percent_complete.name}" size="30" value="{$fields.percent_complete.value}" title="" tabindex="0" onChange="update_status(this.value);" /></tr>',
          ),
        ),
        5 => 
        array (
          0 => 'milestone_flag',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'project_name',
            'label' => 'LBL_PROJECT_NAME',
          ),
          1 => 
          array (
            'name' => 'anticipos',
            'label' => 'LBL_ANTICIPOS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'escalafon',
            'label' => 'LBL_ESCALAFON',
          ),
          1 => 'utilization',
        ),
        8 => 
        array (
          0 => 'estimated_effort',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'hideLabel' => true,
            'customCode' => '<input type="hidden" name="duration" id="projectTask_duration" value="0" />',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'duration_unit',
            'hideLabel' => true,
            'customCode' => '<input type="hidden" name="duration_unit" id="projectTask_durationUnit" value="Days" />',
          ),
        ),
      ),
    ),
  ),
);
?>