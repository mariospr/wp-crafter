<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crafter_Pro
 */

?>
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div><!-- /row -->
            
</div><!-- /#container -->
<?php endif; ?>

    <div class="sub-footer">
        <div class="container">
            <div class="row">

                    <p align="center" style="float: none;">
                    <?php esc_html_e( '&copy;', 'crafter' ); echo ' 2017 - Present <a href="' . get_site_url() . '">' . get_bloginfo( 'name' ) . '</a> ';  ?>.
                    <?php /* printf( esc_html__( 'Designed by %s.', 'crafter' ), '<a href="https://www.quemalabs.com/" rel="designer">Quema Labs</a>' ); */ ?>
                    </p>

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .sub-footer -->


<?php wp_footer(); ?>

</body>
</html>