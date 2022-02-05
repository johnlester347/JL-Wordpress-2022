<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="<?php //bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet"> -->

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

        <!-- HEADER
	================================================== -->
        <header class="site-header" role="banner">

            <!-- NAVBAR
		================================================== -->
            <div class="navbar-wrapper">

                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"
                                    alt="Bootstrap to Wordpress"></a>
                        </div>


                        <!-- ******************* Navbar ******************** -->
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'container'      => 'nav',
                                    'container_class' => 'navbar-collapse collapse',
                                    'menu_class'     => 'nav navbar-nav navbar-right',
                                )
                            );
                        ?>
                        <!--
                        // Eto yung dynamically generated
                        <nav class="nav navbar-nav navbar-right">
                            <ul>
                                <li class="page_item page-item-11 current_page_item"><a
                                        href="http://bootstrap2wordpress.test/" aria-current="page">Homepage</a></li>
                                <li class="page_item page-item-2"><a
                                        href="http://bootstrap2wordpress.test/sample-page/">Sample Page</a></li>
                            </ul>
                        </nav>

                        // Eto yung dating static
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="resources.html">Resources</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        -->
                        <!-- ******************* Navbar ******************** -->
                    </div> <!-- container -->
                </div>

            </div>
        </header>