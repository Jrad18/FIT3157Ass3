<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'The page you are looking for doesn&rsquo;t exist', 'twentyseventeen' ); ?></p>
					<p><?php _e( 'This might be because of a typo in the url, or the post/event you&rsquo;re looking for was moved or deleted', 'twentyseventeen' ); ?></p>
					<p><?php _e( 'You could try searching for what you were looking for.', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>
					
					<p><?php _e( 'Or search through the list of events', 'twentyseventeen' ); ?></p>
					
					<button href="/FIT3157Ass3/events">Events</button>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
