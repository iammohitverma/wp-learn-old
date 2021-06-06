<?php
$a = '1';

	function map_shortcode($slider_id) {				
		ob_start();
        $a = shortcode_atts(array(
            'id' => '',
            'slides' => '',
        ), $slider_id);
            
?>  

<div class="container">
        <div class="nikeSlick">
        <?php if( have_rows('slider_post', $a['id']) ): ?>
        
            <?php while( have_rows('slider_post', $a['id']) ): the_row();?>

                <div class="slideBx">
                    <div class="box">
                        <div class="imgBx">
                            
                            <!-- get image from subfield -->
                            <?php $image = get_sub_field('brand_image');?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />  
                        </div>
                            

                        
                        <!-- get Product Name from subfield -->
                        <h2 class="title"> <?php the_sub_field('product_name'); ?></h2>
                        

                        <!-- get Brand Name from subfield -->
                        <h3 class="brandName"><?php the_sub_field('brand_name'); ?></h3>

                    </div>
                </div>            
                
                
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php print_r($a['slides']); ?>
<script>
    jQuery(document).ready(function () {
    jQuery('.nikeSlick').slick({
        dots: true,
        infinite: true,
        slidesToShow: <?php print_r($a['slides']); ?>,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: <?php print_r($a['slides']); ?>,
                    slidesToScroll: <?php print_r($a['slides']); ?>,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
</script>
	<?php
		return ob_get_clean();
	}
	add_shortcode("slider", "map_shortcode");
?>

