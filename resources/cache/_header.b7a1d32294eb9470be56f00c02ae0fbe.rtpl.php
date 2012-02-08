<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link type="text/css" rel="stylesheet" media="all" href="/media/css/bootstrap.min.css" />
<script type="text/javascript" src="/media/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="/media/css/prettify.css" />
<script type="text/javascript" src="/media/js/prettify.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="/media/css/style.css" />
</head>
<body onload="prettyPrint()">
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="/">tanGo</a>
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                    <li <?php if( $currentPage == 'home' ){ ?>class="active"<?php } ?>><a href="/">Home</a></li>
                    <li <?php if( $currentPage == 'say-hello' ){ ?>class="active"<?php } ?>><a href="/say-hello/Sergey">Say-Hello</a></li>
                    <li <?php if( $currentPage == 'about' ){ ?>class="active"<?php } ?>><a href="/about">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--/.navbar-inner -->
</div><!--/.navbar -->
<div class="container">