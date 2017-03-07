<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package plum
 */
?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<span class="sep"></span>
			<?php echo ( get_theme_mod('plum_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. 京ICP备17011376号. ','plum')) : esc_html( get_theme_mod('plum_footer_text') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
