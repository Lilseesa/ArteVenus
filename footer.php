<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link 
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				
			</div><!-- .site-name -->
			<div class="powered-by">

			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
		
</body>
</html>
