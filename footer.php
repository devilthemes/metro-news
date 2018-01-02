<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metro_News
 */

?>

	</div><!-- #content -->
<?php if ( is_active_sidebar( 'footer-banner' )  ) : ?>
		<div class="footerbanner"><div class="row"><div class="column"><?php dynamic_sidebar( 'footer-banner' ); ?></div></div></div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-top' )  ) : ?>
		<div class="footertop"><div class="row"><div class="column "><?php dynamic_sidebar( 'footer-top' ); ?></div></div></div>
		<?php endif; ?>
	<footer id="colophon" class="site-footer">
	<?php if ( is_active_sidebar( 'footer' )  ) : ?>
					<div class="row"><?php dynamic_sidebar( 'footer' ); ?></div>
				<?php endif; ?>
				
		<div class="site-info row">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'metro-news' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'metro-news' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				
				printf( esc_html__( '%s', 'metro-news' ), 'Theme by :' );
			?>
			<a href="<?php printf( esc_html__( '%s', 'metro-news' ), 'https://devilthemes.com' ); ?>">devilthemes</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
