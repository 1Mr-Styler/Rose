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
    <title>Rose</title>
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
                <li><a href="#">History</a>
                    <ul>
                        {foreach $verhist as $k => $v}
                            <li><a href="#">Version {str_replace('_', '.', $k)}</a>
                                <ul>
                                    <li><a href="#">Date: {$v[0]}</a></li>
                                    {for $i = 1 to (count($v) - 1)}
                                        <li><a href="#">{$v[$i]}</a></li>
                                    {/for}
                                </ul>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- HISTORY CODE -->

            <!-- USED_IN CODE -->
            <ul class="treeview">
                <li><a href="#">Used In</a>
                    <ul>
                        {foreach $used_in as $k => $v}
                            <li><a href="#">{$k} : <a href="?loc={$v}">{$v}</a></a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>
            <!-- USED_IN CODE -->
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="js/vendor/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.js"></script>
<script type="text/javascript" src="js/display.js"></script>
</html>
