<?php
if (post_password_required())
    return;
?>
<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <div class="container comment-list">
            <?php
    	wp_list_comments (array(
    	   'style'		=> 'div',
    	   'avatar_size'	=> 74,
    	   'reply_text'	=> 'Auf diesen Kommentar antworten'
    	));
            ?>
        </div>
        <?php
            if (get_comment_pages_count() > 1 && get_option ('page_comments')) :
        ?>
        <nav class="comment-navigation" role="navigation">
            <div class="nav-previous">
                <?php previous_comments_link (__('&larr; Ältere Kommentare')); ?>
            </div>
            <div class="nav-next">
                <?php next_comments_link (__('Neuere Kommentare &rarr;')); ?>
            </div>
        </nav>
        <?php endif; ?>
    <?php endif; // have_comments() ?>
    <?php comment_form(); ?>
</div><!-- #comments -->
