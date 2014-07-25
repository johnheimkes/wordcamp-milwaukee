<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wcmke
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title('|', true, 'left'); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wcmke' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array(
                'menu'       => 'main-nav',
                'menu_class' => 'h-list'
            ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
