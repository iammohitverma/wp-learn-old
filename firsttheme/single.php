<?php


get_header();
?>

	<div id="primary" class="">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			// get_template_part( 'template-parts/single', 'mvposts' );

			/*the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jt-academy' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jt-academy' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
            */

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>
	</div><!-- #main -->
	<?php echo get_post_type(); ?>
<?php
get_footer(); ?>