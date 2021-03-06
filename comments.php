<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package wcmke
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

    <div class="comment-form">
        <?php comment_form(); ?>
    </div>
    
    <?php if ( have_comments() ) : ?>
        
        <div class="comment-list">
            <?php wp_list_comments(array(
                'style' => 'ol'
            )); ?>
        </div>
        
    <?php endif; ?>

</div><!-- #comments -->
