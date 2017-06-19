<?php
/**
 * Created by PhpStorm.
 * User: Styl3R
 * Date: 6/4/17
 * Time: 2:39 PM
 */

include __DIR__ . "/../vendor/autoload.php";

$smarty = new Smarty();
//$smarty->debugging = true;
$smarty->caching = false;

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/config');

if (isset($_GET['loc']))
    $smarty->assign('loc', $_GET['loc']);

if (!isset($_POST['dir'])) {
    $smarty->display("first.tpl");
    exit();
}

try {
    $lizzy = new \Girls\Lizzy($_POST['dir']);
    $data = json_decode($lizzy, true);

    if (isset($data['Rose'])) {
        $smarty->assign('app', $data['Project']);
        $smarty->assign('ver', $data['version']);
        $smarty->assign('last', $lizzy->ago(strtotime($data['last_upd'])));
        $smarty->assign('verhist', $data['verhist']);
        $smarty->assign('used_in', $data['used_in']);
        $smarty->assign('lang', $data['lang']);
        $smarty->assign('uses', $data['uses']);
        $smarty->assign('rose', $data['Rose']);

        $smarty->assign('future', $lizzy->fixFuture($data['future']));

        $smarty->display("display.tpl");
    } else {
        $smarty->assign('app', $data['App']);
        $smarty->assign('ver', $data['version']);
        $smarty->assign('verhist', $data['verhist']);
        $smarty->assign('used_in', $data['used_in']);

        $smarty->display("displayvl1.tpl");
    }

} catch (Exception $e) {
    $smarty->assign("wrong", true);
    $smarty->display("first.tpl");
    exit();
}
