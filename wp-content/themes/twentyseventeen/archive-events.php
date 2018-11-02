<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1>Events</h1>
			<div>A list of HRAFFs events</div>
			<hr/>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			
			//Custom output for each event
			$id = get_the_id();
			
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			
			$image = get_field('header_image');
			$size = 'medium'; // (thumbnail, medium, large, full or custom size)
			
			if( $image ) {
				echo '</main></div><aside id="secondary" class="widget-area" role="complementary"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . wp_get_attachment_image( $image, $size ). '</a></aside>';
				echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main">';
			}
			?></br></br><?php
			the_field('blurb');
			echo '</main><hr/><main id="main" class="site-main" role="main">';
			?></br></br><?php

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
