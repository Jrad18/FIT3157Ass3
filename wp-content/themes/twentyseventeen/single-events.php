<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();?>

<div class="wrap">
	<div>
		<main id="main" class="site-main" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			
			//get_template_part( 'template-parts/post/content', get_post_format() );

			
			$id = get_the_id();
			
			//Title, Where & When, Blurb, Image, Content
			?>
			<h1>
				<?php the_title(); ?>
			</h1>
			<small>
				<?php the_field( 'name' ); ?><br/>
				<?php the_field( 'address_line_1' ); ?>
			</small>
			<small>
				<?php if( get_field( 'address_line_2' ) ) {
					the_field( 'address_line_2' ); 
				}?>
			</small>
			<small>
				<?php the_field('suburb');echo ', '; the_field('state');echo ', '; the_field('postcode'); ?>
			</small>
			<br/>
			<p>
				<?php the_field('blurb'); ?>
			</p>
			<?php
		
			$image = get_field('header_image');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			
			if(get_field('video')){
				the_field('video');
			}
			?><br/><br/><?php
			$content_post = get_post($id);
			$content = $content_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			
			?>
			<h1>Tickets</h1>
			<small>$<?php the_field('price'); ?> <a href='#'>purchase here</a></small>
			<?php	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
