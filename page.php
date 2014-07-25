<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package wcmke
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="title page-title"><?php the_title(); ?></h2>
                        
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                    
                    <footer class="entry-footer">
                        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-footer -->
                    
                </article><!-- #post-## -->

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    
<?php get_footer(); ?>
