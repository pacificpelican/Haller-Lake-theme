<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="siteinfo">
		<div class="site-info">
		<center>
			Powered by <a href="http://wordpress.org">WordPress</a> and <a href="http://getbootstrap.com">Bootstrap</a> and <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>"><? echo wp_get_theme(); ?></a> by <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'AuthorURI' ); ?>"><?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Author' ); ?></a>
			</center>	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page --><?php wp_footer(); ?></body></html>