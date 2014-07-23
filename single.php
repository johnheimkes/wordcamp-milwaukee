<?php
/**
 * The template for displaying all single posts.
 *
 * @package wcmke
 */

 ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="title post-title"></h2>

                    <div class="entry-meta">
                        <h4 class="post-date">Posted on:</h4>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                    
                    
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    
                    
                    <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

