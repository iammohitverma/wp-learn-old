
<?php 
$images = get_field('mv_gallery'); 
if( $images ):
   $images = explode(',', $images);
   $images = array_filter($images);
   if( count($images)): ?>
       <ul>
           <?php foreach( $images as $image ): 
               $alt = get_the_title($image);
               $imageUrlFull = wp_get_attachment_image_url(  $image, 'full' ) ?>
               <li>
                   <a href="<?php echo $imageUrlFull ?>" title="<?php echo $alt; ?>">
                       <?php echo wp_get_attachment_image($image, "url", false, ['alt' => $alt]); ?>
                   </a>
               </li>
           <?php endforeach; ?>
       </ul>
   <?php endif; ?>
<?php endif; ?>