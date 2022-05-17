<?php
/* Smarty version 3.1.39, created on 2022-04-05 11:52:22
  from 'D:\Projects\Current\Deti_luchiki\Layout\release\manager\templates\default\element\tv\renders\input\date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_624c0346ec7b49_39475287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05fcd2c79d9acb3cd82ffc31c42a6554de77675c' => 
    array (
      0 => 'D:\\Projects\\Current\\Deti_luchiki\\Layout\\release\\manager\\templates\\default\\element\\tv\\renders\\input\\date.tpl',
      1 => 1622181878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624c0346ec7b49_39475287 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="hidden" class="datefield"
    value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    onblur="MODx.fireResourceFormChange();"/>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'xdatetime'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,dateFormat: MODx.config.manager_date_format
        ,timeFormat: MODx.config.manager_time_format
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['disabledDays'])===null||$tmp==='' ? '' : $tmp)) {?>,disabledDays: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['disabledDays'])===null||$tmp==='' ? '' : $tmp);
}?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['minDateValue'])===null||$tmp==='' ? '' : $tmp)) {?>,minDateValue: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['minDateValue'])===null||$tmp==='' ? '' : $tmp);?>
'<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxDateValue'])===null||$tmp==='' ? '' : $tmp)) {?>,maxDateValue: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxDateValue'])===null||$tmp==='' ? '' : $tmp);?>
'<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['startDay'])===null||$tmp==='' ? '' : $tmp)) {?>,startDay: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['startDay'])===null||$tmp==='' ? '' : $tmp);
}?>

        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['minTimeValue'])===null||$tmp==='' ? '' : $tmp)) {?>,minTimeValue: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['minTimeValue'])===null||$tmp==='' ? '' : $tmp);?>
'<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxTimeValue'])===null||$tmp==='' ? '' : $tmp)) {?>,maxTimeValue: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxTimeValue'])===null||$tmp==='' ? '' : $tmp);?>
'<?php }?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['timeIncrement'])===null||$tmp==='' ? '' : $tmp)) {?>,timeIncrement: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['timeIncrement'])===null||$tmp==='' ? '' : $tmp);
}?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['hideTime'])===null||$tmp==='' ? '' : $tmp)) {?>,hideTime: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['hideTime'])===null||$tmp==='' ? '' : $tmp);
}?>

        ,dateWidth: 198
        ,timeWidth: 198
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        ,msgTarget: 'under'
    
        ,listeners: { 'change': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
