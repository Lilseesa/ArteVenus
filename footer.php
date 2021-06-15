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
				<a href="http://fetchrss.com/rss/60c8e9242b26753d8879f55260c8e90508e74e228e457b92.xml">Suscribe</a>
				<img alt="Subscribe to What's New" src="https://i.imgur.com/fZIDSoj.png" width="25" height="25">
			</div><!-- .powered-by -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<?php wp_footer(); ?>
		
</body>
</html>
