<?php
$viewdefs ['ProjectTask'] = 
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
          'file' => 'modules/ProjectTask/ProjectTask.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          4 => 
          array (
            'customCode' => '<input type="button" name="causar_horas" value="Causar Horas" onclick="window.open(\'index.php?entryPoint=setHours&id={$fields.id.value}\',\'Imprimir\',\'width=400,height=400,scrollbars=1\');" />',
          ),
        ),
        'hideAudit' => true,
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
          0 => 'date_start',
          1 => 'date_finish',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_USER_ID',
          ),
        ),
        3 => 
        array (
          0 => 'status',
          1 => 'priority',
        ),
        4 => 
        array (
          0 => 'percent_complete',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'milestone_flag',
            'label' => 'LBL_MILESTONE_FLAG',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'project_name',
            'customCode' => '<a href="index.php?module=Project&action=DetailView&record={$fields.project_id.value}">{$fields.project_name.value}&nbsp;</a>',
            'label' => 'LBL_PARENT_ID',
          ),
          1 => 
          array (
            'name' => 'anticipos',
            'label' => 'LBL_ANTICIPOS',
          ),
        ),
        7 => 
        array (
          0 => 'task_number',
          1 => 'order_number',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'escalafon',
            'label' => 'LBL_ESCALAFON',
          ),
          1 => 'utilization',
        ),
        9 => 
        array (
          0 => 'estimated_effort',
          1 => 
          array (
            'name' => 'actual_effort',
            'label' => 'LBL_ACTUAL_EFFORT',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'duration_unit',
            'label' => 'LBL_DURATION_UNIT',
          ),
        ),
      ),
    ),
  ),
);
?>
