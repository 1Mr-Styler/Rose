<?php
/* Smarty version 3.1.31, created on 2017-06-19 17:23:16
  from "/var/www/html/gui/smarty/templates/displayvl1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59479804d85e46_57101666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a7af4f34edb2df4fe45c51957d83440bd654f1' => 
    array (
      0 => '/var/www/html/gui/smarty/templates/displayvl1.tpl',
      1 => 1497864223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59479804d85e46_57101666 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Rose v0.5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/display.css">

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/vendor/html5-3.6-respond-1.4.2.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['app']->value;?>
 | Version: <?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
</div>
        <div class="panel-body">
            <!-- HISTORY CODE -->
            <ul class="treeview">
                <li><a href="#">History</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['verhist']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li><a href="#">Version <?php echo str_replace('_','.',$_smarty_tpl->tpl_vars['k']->value);?>
</a>
                                <ul>
                                    <li><a href="#">Date: <?php echo $_smarty_tpl->tpl_vars['v']->value[0];?>
</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['v']->value)-1)+1 - (1) : 1-((count($_smarty_tpl->tpl_vars['v']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</a></li>
                                    <?php }
}
?>

                                </ul>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </li>
            </ul>
            <!-- HISTORY CODE -->

            <!-- USED_IN CODE -->
            <ul class="treeview">
                <li><a href="#">Used In</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['used_in']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <a href="?loc=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></a>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </li>
            </ul>
            <!-- USED_IN CODE -->
        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/vendor/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/display.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
