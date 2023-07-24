<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <!-- logo / titre -->
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                 <!-- ajout de ma nouvelle widget area -->
                 <a href="<?php echo(get_home_url()); ?>">
                <?php if ( is_active_sidebar( 'logo-widget-area' ) ) : ?>
                    <div id="header-widget-area" class="logo-header-widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'logo-widget-area' ); ?>
                    </div>
                <?php endif; ?>
                </a>
                <!-- fin nouvelle widget area -->
            </div>
        </div>

        <!-- navigation / menu -->
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <a href="<?php echo(get_home_url()); ?>/nous-rencontrer">Nous rencontrer</a>
            <a href="<?php echo(admin_url()) ?>"><?php if(is_user_logged_in()){ echo "Admin";} ?></a>
           <a href="<?php echo(get_home_url()); ?>/commander" class="bouton-rose">Commander</a>
        </nav>

    </header>
    <div id="container">
        <main id="content" role="main">