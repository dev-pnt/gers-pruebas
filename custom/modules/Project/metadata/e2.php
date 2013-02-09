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
            'customCode' => '<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="button" name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; if( confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\') )  this.form.submit(); {else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; if( confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\'))  this.form.submit(); {/if}"/>',
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
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; if (confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\')) this.form.submit();{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; if (confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\')) this.form.submit();{/if}',
              ),
            ),
          ),
          2 => 
          array (
            'customCode' => '<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" type="submit" name="Duplicate" id="duplicate_button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"onclick="{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'projecttemplateseditview\'; this.form.return_id.value=\'{$id}\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'; this.form.return_id.value=\'{$id}\';{/if}""/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_DUPLICATE_BUTTON_LABEL}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_DUPLICATE_BUTTON_TITLE}',
                'accessKey' => '{$APP.LBL_DUPLICATE_BUTTON_KEY}',
                'class' => 'button',
                'name' => 'Duplicate',
                'id' => 'duplicate_button',
                'onclick' => '{if $IS_TEMPLATE}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'projecttemplateseditview\'; this.form.return_id.value=\'{$id}\';{else}this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'; this.form.return_id.value=\'{$id}\';{/if}',
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
        'LBL_DETAILVIEW_PANEL15' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL16' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL17' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'valor',
            'label' => 'LBL_VALOR',
          ),
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'costo_total',
            'label' => 'LBL_COSTO_TOTAL',
          ),
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
          1 => 
          array (
            'name' => 'total_anticipos',
            'label' => 'LBL_TOTAL_ANTICIPOS',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel15' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'costo_categorias',
            'studio' => 'visible',
            'label' => 'LBL_COSTO_CATEGORIAS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'costo_gastos',
            'studio' => 'visible',
            'label' => 'LBL_COSTO_GASTOS',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel16' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'total_facturado',
            'label' => 'LBL_TOTAL_FACTURADO',
          ),
          1 => 
          array (
            'name' => 'horas_proyecto',
            'label' => 'LBL_HORAS_PROYECTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mano_obra_horas_cotizado',
            'label' => 'LBL_MANO_OBRA_HORAS_COTIZADO',
          ),
          1 => 
          array (
            'name' => 'mano_obra_valor_cotizado',
            'label' => 'LBL_MANO_OBRA_HORAS_COTIZADO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'costos_cotizados',
            'label' => 'LBL_COSTOS_COTIZADOS',
          ),
          1 => 
          array (
            'name' => 'gastos_externos_cotizados',
            'label' => 'LBL_GASTOS_EXTERNOS_COTIZADOS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'costos_reales',
            'label' => 'LBL_COSTOS_REALES',
          ),
          1 => 
          array (
            'name' => 'valor_mano_obra_real',
            'label' => 'LBL_VALOR_MANO_OBRA_REAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rentabilidad',
            'label' => 'LBL_RENTABILIDAD',
          ),
          1 => 
          array (
            'name' => 'calificacion',
            'label' => 'LBL_CALIFICACION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'anticipos',
            'label' => 'LBL_ANTICIPOS',
          ),
          1 => 
          array (
            'name' => 'diferencia',
            'label' => 'LBL_DIFERENCIA',
          ),
        ),
      ),
      'lbl_detailview_panel17' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'actividades',
            'label' => 'LBL_INFORME_ACTIVIDADES',
          ),
        ),
      ),
    ),
  ),
);
?>