<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
        <script>
          // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          // ga('create', '####', 'auto');
          // ga('send', 'pageview');
        </script>
    </head>
    <body <?php body_class(); ?>>
    <div class="page-wrapper">

        <button class="close-btn"><i class="fi-list"></i></button>
        <div class="mobile-nav-container">
            <nav class="mobile-nav">
                <?php wp_nav_menu( array('menu' => 'Mobile Nav' ));?>                
            </nav>
        </div>

        <header>
            <nav class="row main-nav"">
                <div class="columns">
                    <div class="logo">
                        <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_white@2x.png" alt="Strattavu Logo" width="153" height="33"></a>
                    </div>
                    <div class="navigation" role="navigation">
                        <div class="main-menu">
                            <?php wp_nav_menu( array('menu' => 'Main nav' ));?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>