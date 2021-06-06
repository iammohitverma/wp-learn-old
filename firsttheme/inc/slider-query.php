<?php
// query for slider and creating shortcode here


//[Creating Shortcode]
// function foobar_func( $atts ){

// 	$a=shortcode_atts(array(
//         'width' => '400',
//         'height' => '400',
//     ), $atts);
	
// 	$imgUrl = get_theme_file_uri( 'assets/images/default-image.jpg' );	
// 	return '<img src="'.$imgUrl.'" width="'.$a['width'].'" height="'.$a['height'].'" />';
// }
// add_shortcode( 'foobar', 'foobar_func' );
?>




    <div class="container">
        <div class="nikeSlick">
            <?php $query1 = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => 5 ) ); ?>
            <?php if ( $query1->have_posts() ) : ?>
                <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>    
                    <div class="slideBx">
                        <div class="box">
                            <div class="imgBx">
                            <?php 
                                $image = get_field('add_your_brand_image_here');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <!-- <img src="https://imagizer.imageshack.com/a/img924/5535/2A0ENb.png" alt="nike" /> -->
                            </div>

                            <h2 class="title"><?php the_title(); ?></h2>
                            <h3 class="brandName"><?php the_field('enter_brand_name'); ?></h3>
                            

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <?php

// // Check rows exists.
// if( have_rows('repeater_field_name') ):

//     // Loop through rows.
//     while( have_rows('repeater_field_name') ) : the_row();

//         // Load sub field value.
//         $sub_value = get_sub_field('sub_field');
//         // Do something...

//     // End loop.
//     endwhile;

// // No value.
// else :
//     // Do something...
// endif;


