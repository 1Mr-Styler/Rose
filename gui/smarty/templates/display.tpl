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
    <title>Rose v{$rose|number_format: 1}</title>
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
    <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">{$app} | Version: {$ver} | Last Updated {$last}</div>
        <div class="panel-body">
            <!-- HISTORY CODE -->
            <ul class="treeview">
                <li class="first"><a href="#">History</a>
                    <ul>
                        {foreach $verhist as $k => $v}
                            <li class="second"><a href="#">Version {str_replace('_', '.', $k)}</a>
                                <ul>
                                    {foreach $v as $date_ => $stuff_}
                                        <li class="third"><a href="#">Date: {$date_}</a></li>
                                        <ul>
                                            {for $i = 0 to (count($stuff_) - 1)}
                                                <li class="fourth"><a href="#">{$stuff_[$i]}</a></li>
                                            {/for}
                                        </ul>
                                    {/foreach}
                                </ul>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- HISTORY CODE -->

            <!-- USED_IN CODE -->
            <ul class="treeview">
                <li class="first"><a href="#">Used In</a>
                    <ul>
                        {foreach $used_in as $k => $v}
                            <li class="second"><a href="#">{$k} : <a href="?loc={$v}"><label class="third">{$v}</label></a></a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- USED_IN CODE -->

            <!-- Language CODE -->
            <ul class="treeview">
                <li class="first"><a href="#">{if count($lang) < 2}Language{else}Languages{/if}</a>
                    <ul>
                        {foreach $lang as $k => $v}
                            <li class="second"><a href="#">{$k} : <label class="third">{$v}</label></a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- Language CODE -->

            <!-- Tech used CODE -->
            <ul class="treeview">
                <li class="first"><a href="#">{if count($uses) < 2}Technology{else}Technologies{/if} used</a>
                    <ul>
                        {foreach $uses as $k => $v}
                            <li class="second"><a href="#">{$k} : <label class="third">{$v}</label></a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- Tech used CODE -->
        </div>
    </div>
    <div>
        <h3>What does the future hold for {$app}?</h3>
        <div>
            {for $i = 0 to (count($future) - 1)}
                <div class="third">{$future[$i][0]}</div>
                <p>
                    <b>Status: </b>
                    {if $future[$i][1] == 'approved'}
                        <label style="color: green">{$future[$i][1]|capitalize}</label>
                    {elseif $future[$i][1] == 'undecided'}
                        <label style="color: gray">{$future[$i][1]|capitalize}</label>
                    {else}
                        <label style="color: red">{$future[$i][1]|capitalize}</label>
                    {/if}
                </p>
            {/for}
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
<script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.js"></script>
<script type="text/javascript" src="js/display.js"></script>
</html>
