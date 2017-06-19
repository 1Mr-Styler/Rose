<?php
/* Smarty version 3.1.31, created on 2017-06-19 18:49:08
  from "/var/www/html/gui/smarty/templates/display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5947ac24789020_41381565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813bf6980bf8e8639d61413802a0b727c4ae45c7' => 
    array (
      0 => '/var/www/html/gui/smarty/templates/display.tpl',
      1 => 1497869512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947ac24789020_41381565 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';
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
    <title>Rose v<?php echo number_format($_smarty_tpl->tpl_vars['rose']->value,1);?>
</title>
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
 | Last Updated <?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</div>
        <div class="panel-body">
            <!-- HISTORY CODE -->
            <ul class="treeview">
                <li class="first"><a href="#">History</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['verhist']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li class="second"><a href="#">Version <?php echo str_replace('_','.',$_smarty_tpl->tpl_vars['k']->value);?>
</a>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value, 'stuff_', false, 'date_');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date_']->value => $_smarty_tpl->tpl_vars['stuff_']->value) {
?>
                                        <li class="third"><a href="#">Date: <?php echo $_smarty_tpl->tpl_vars['date_']->value;?>
</a></li>
                                        <ul>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['stuff_']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['stuff_']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <li class="fourth"><a href="#"><?php echo $_smarty_tpl->tpl_vars['stuff_']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</a></li>
                                            <?php }
}
?>

                                        </ul>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
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
                <li class="first"><a href="#">Used In</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['used_in']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li class="second"><a href="#"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <a href="?loc=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><label class="third"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label></a></a>
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

            <!-- Language CODE -->
            <ul class="treeview">
                <li class="first"><a href="#"><?php if (count($_smarty_tpl->tpl_vars['lang']->value) < 2) {?>Language<?php } else { ?>Languages<?php }?></a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li class="second"><a href="#"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <label class="third"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label></a>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </li>
            </ul>
            <!-- Language CODE -->

            <!-- Tech used CODE -->
            <ul class="treeview">
                <li class="first"><a href="#"><?php if (count($_smarty_tpl->tpl_vars['uses']->value) < 2) {?>Technology<?php } else { ?>Technologies<?php }?> used</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uses']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li class="second"><a href="#"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 : <label class="third"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label></a>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </li>
            </ul>
            <!-- Tech used CODE -->
        </div>
    </div>
    <div>
        <h3>What does the future hold for <?php echo $_smarty_tpl->tpl_vars['app']->value;?>
?</h3>
        <div>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['future']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['future']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <div class="third"><?php echo $_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
</div>
                <p>
                    <b>Status: </b>
                    <?php if ($_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][1] == 'approved') {?>
                        <label style="color: green"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
</label>
                    <?php } elseif ($_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][1] == 'undecided') {?>
                        <label style="color: gray"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
</label>
                    <?php } else { ?>
                        <label style="color: red"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['future']->value[$_smarty_tpl->tpl_vars['i']->value][1]);?>
</label>
                    <?php }?>
                </p>
            <?php }
}
?>

        </div>
    </div>
</div>
</body>
<style type="text/css">
    .first {
        color: #5e5e5e;
    }

    .second {
        color: #2b669a;
    }

    .third {
        color: #0f0f0f;
    }

    .fourth {
        color: #2b542c
    }
</style>
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
