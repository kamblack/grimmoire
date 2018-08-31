<footer class="entry-footer">
    <span class="cat-links"><?php _e( 'Categories: ', 'grimmoire' ); ?><?php the_category( ', ' ); ?></span>
    <span class="tag-links"><?php the_tags(); ?></span>
    <?php if ( comments_open() ) { 
        echo '<span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'grimmoire' ) ) . '</a></span>';
    } ?>
</footer> 