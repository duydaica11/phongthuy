<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Razzi
 */

?>

<?php
\Razzi\Markup::instance()->close( 'site_content' );
?>

<?php do_action('razzi_before_open_site_footer'); ?>
<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {?>
	<footer id="site-footer" class="<?php \Razzi\Footer::classes('site-footer'); ?>">
		<?php do_action('razzi_after_open_site_footer'); ?>
		<?php do_action('razzi_before_close_site_footer'); ?>
	</footer>
<?php } ?>
<?php do_action('razzi_after_close_site_footer'); ?>

</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
