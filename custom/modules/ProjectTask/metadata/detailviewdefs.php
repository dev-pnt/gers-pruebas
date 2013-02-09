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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => true,
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
           // 'customCode' => '&nbsp;<input type="button" name="anticipos" value="Tabla de Anticipos" onclick="window.open(\'index.php?entryPoint=anticipos\',\'Anticipos\',\'width=400,height=400,scrollbars=1\');" />',
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
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'detalle_horas',
            'label' => 'LBL_DETALLE_HORAS',
            'customCode' => '{rep_horas id_tarea=$fields.id.value}',
          ),
          
        ),
      ),
    ),
  ),
);
?>
