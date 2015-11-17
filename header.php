<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php wp_title(''); ?></title>
        <link href="http://mein-eigenraum.com/wp-content/themes/eigenraum/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <script src="https://use.typekit.net/yzi0ren.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
<!--[if lt IE 9]>
  <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
    <?php wp_head(); ?>
    </head>
            <nav id="nav" class="navbar navbar-default" role="navigation">
            <div class="container">
            <a href="/"><div id="logo" class="pull-left"></div></a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header visible-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="/immobilienberatung">IMMOBILIENBERATUNG</a></li>
                    <li><span class="dott">.</span></li>
                    <li><a href="/business-knigge">BUSINESS KNIGGE</a></li>
                    <li><span class="dott">.</span></li>
                    <li><a href="/entspannung">ENTSPANNUNG</a></li>
                    <li><span class="dott">.</span></li>
                    <li><a href="/kontakt">KONTAKT</a></li>
                    <li><a href="https://www.facebook.com/MeinEigenraum?fref=ts" id="facebook">
                        <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></a></li>
                </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </nav><!-- /.navbar -->
    <body <?php body_class(); ?>>