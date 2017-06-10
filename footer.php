<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IL10
 */

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div id="footer-widget-areas">
		<div id="sidebar-footer-1"><?php dynamic_sidebar( 'footer-1' );
?></div>
		<div id="sidebar-footer-2"><?php dynamic_sidebar( 'footer-2' );
?></div>
	</div>
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
