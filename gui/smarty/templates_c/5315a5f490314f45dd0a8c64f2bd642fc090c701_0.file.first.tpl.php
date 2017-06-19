<?php
/* Smarty version 3.1.31, created on 2017-06-04 08:18:35
  from "/var/www/html/gui/smarty/templates/first.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5933c25b14ccb1_32119312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5315a5f490314f45dd0a8c64f2bd642fc090c701' => 
    array (
      0 => '/var/www/html/gui/smarty/templates/first.tpl',
      1 => 1496564308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5933c25b14ccb1_32119312 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['wrong']->value)) {?>
    <b style="color: red">File doesn't exist man. Are you drunk?</b>
<?php }?>
<form method="post">
    <input name="dir" placeholder="File location" <?php if (isset($_smarty_tpl->tpl_vars['loc']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['loc']->value;?>
"<?php }?>>
</form><?php }
}
