<?php get_header() ?>



<div class="container blog-container">
	<div class="row">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>    
			<div class="col-md-8 mx-auto col-12">
				<div class="blog-post single-post">
					<div class="post-imageBx">
                        
					</div>
					<div class="post-title">
                        <?php the_title( '<h3>', '</h3>' ); ?>
					</div>
					<div class="post-description">
						<?php the_content( '<p>', '</p>' )?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- <div class="col-md-4">
			<?php //get_sidebar();?>
		</div> -->
	</div>
</div>



<?php get_footer(); ?>

