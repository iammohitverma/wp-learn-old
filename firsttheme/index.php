<?php get_header(); ?>


<div class="container blog-container">
	<div class="row">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>    
			<div class="col-12 col-md-4">
				<div class="blog-post">
					<div class="post-imageBx">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('large', ['class' => 'img-fluid post-img responsive--full', 'title' => 'Feature image']);?> 
						</a>				
					</div>
					<div class="post-content">
						<div class="post-meta">
							<span class="post-author"><strong> Author : </strong> <?php the_author(); ?> </span>
							<br>
							<span class="post-date"><strong> Posted on : </strong><?php the_time(); ?> | <?php the_date(); ?> </span>
						</div>
						<div class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title( '<h3>', '</h3>' ); ?>
							</a>				
						</div>
						<div class="post-description">
							<?php the_excerpt( '<p>', '</p>' )?>
							<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="pagination">
			<?php the_posts_pagination(); ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar();?>
		</div> 
	</div>
</div>

<style>
	h2.custHtml {
    height: 100px;
    background: red;
    color: #fff;
}
</style>
<h2 class="custHtml"><?php echo wp_kses_post(get_theme_mod( 'themename_theme_options')); ?></h2>

<?php get_footer(); ?>