<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package haller_lake_s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="siteinfo">
		<div class="site-info" id="hallerlakefooter"><center>
			Powered by <a href="http://wordpress.org"><button class="btn btn-primary" type="button"><span class="badge">WordPress</span></button></a> and 
			<a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>"><button class="btn btn-success" type="button"><span class="badge"><?php echo wp_get_theme(); ?> version <?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?></span></button></a>
			</center>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page --><?php wp_footer(); ?></body></html>
