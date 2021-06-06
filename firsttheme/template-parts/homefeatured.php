<?php 
/**
* Template Name: Home Featured Mohit
*/
?>



<?php get_header(); ?>



<div class="container blog-container">
	<div class="row">
        <div class="page-title">
            <?php the_title( '<h3>', '</h3>' ); ?>
        </div>

        <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <!-- // Display post content -->
                <div class="page-content">
                    <?php the_content( '<div>', '</div>' )?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>



        <div class="col-12 col-md-6">
        <h3 class="cat-title"><?php echo get_cat_name( $category_id = 3 );?></h3>

        <?php $query = new WP_Query( array( 'cat' => 3, 'posts_per_page' => 1 ) ); ?>
		    <?php if ( $query->have_posts() ) : ?>
			    <?php while ( $query->have_posts() ) : $query->the_post(); ?>    
                    <?php the_title( '<div>', '</div>' )?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>


        <?php $query1 = new WP_Query( array( 'post_type' => 'mvposts', 'posts_per_page' => 1 ) ); ?>
            <?php if ( $query1->have_posts() ) : ?>
                <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>    
                    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"> <?php the_title(); ?> </a></h3>
                    <div class="page-content">
                        <?php the_content( '<div>', '</div>' )?>
                        <?php the_post_thumbnail()?>
                    </div>
                    <a href="<?php echo get_post_permalink() ?>"> Read More </a>
                    <?php $url = get_post_meta( get_the_ID(), 'metaUrlBox', true ); ?>
                    <a href="<?php echo $url ?>"> my Link </a>
                    
                    
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pagination">
                        <?php
                            global $query1;
                        
                            $total_pages = $query1->max_num_pages;
                        
                            if ($total_pages > 1){
                                $current_page = max(1, get_query_var('paged'));
                        
                                echo paginate_links(array(
                                    'base' => get_pagenum_link(1) . '%_%',
                                    'format' => '/page/%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                ));
                            }
                        ?>
                    </div>
                <?php 
                $image = get_field('your_custom_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>


                <?php print_r(get_post_type());?>
        <?php wp_reset_postdata(); ?>
        </div>
	</div>
</div>

<?php get_footer(); ?>