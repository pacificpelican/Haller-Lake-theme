<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package haller_lake_s
 */

get_header(); ?>


<body <?php body_class(); ?>>





<header id="masthead" class="site-header" role="banner">


 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class='navbar-brand' href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">


     <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Links <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</ul>
</li>

            </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br>
  </header><!-- #masthead -->
<div id="page" class="hfeed site container-fluid">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>





<br>

<div class="row" id="bigrow">
  <div class="container col-xs-12 col-sm-12 col-md-8" id="hallerlakecontainer">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" id="hallerlakejumbotron">


	<div id="content" class="site-content">



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'That page can&rsquo;t be found.', '_s' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content" id="hallerlakenotfound">
					<p><?php _e( '404 NOT FOUND', '_s' ); ?></p>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php comments_template( $file, $separate_comments ); ?>


 </div>

    </div> <!-- /container -->
</div> <!-- /row -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('template_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>