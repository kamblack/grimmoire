            <div class="clear"></div>
        </div>
        <footer id="footer" role="contentinfo">
            <div id="copyright">
                <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'grimmoire' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'grimmoire' ), '<a href="https://kam.black/">Kam Black</a>' ); ?>
            </div>
        </footer>
    </div>

    <script>
    jQuery('body').addClass(jQuery('#content > article').attr('class'));
    jQuery('#content > article').removeAttr('class');
    </script>
    <?php wp_footer(); ?>
</body>
</html>