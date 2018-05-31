<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>


	<!-- #content -->

	<div class="margin-for-footer"></div>
	<footer id="colophon" class="site-footer">
    <div class="container flex-column">
      <div class="footer-top flex1">
				<img id="img-logo" src="<?php echo get_template_directory_uri(); ?>/images/ulnalink-logo.JPG" alt="">ULNA LINK

      </div>

			<div class="footer-bottom flex1">
				<p>&copy; <?php the_time('Y') ?> Ulna Link Corp. All rights reserved.</p>

			</div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
