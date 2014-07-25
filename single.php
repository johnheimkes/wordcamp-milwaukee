<?php
/**
 * The template for displaying all single posts.
 *
 * @package wcmke
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="title post-title"><?php the_title(); ?></h2>

                    <div class="entry-meta">
                        <h4 class="post-date">Posted on: <?php echo get_the_date(); ?></h4>
                        <h4 class="post-author"><?php the_author(); ?></h4>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                    
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>