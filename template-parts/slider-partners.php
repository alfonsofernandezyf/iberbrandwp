<?php 

function r($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

$args = array(
	'post_type'   => 'partners',
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order'   => 'ASC',
  'posts_per_page' => '5'
);
   
$partners = new WP_Query( $args );

if ($partners->have_posts()){
  while ( $partners->have_posts() ) {
    $partners->the_post();
        $temp = array();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        $temp['id'] = get_the_ID();
        $temp['permalink'] = get_the_permalink();
        $temp['title'] = get_the_title();
        $temp['excerpt'] = get_the_excerpt();
        $temp['image'] = $thumb_url;
        $temp['position'] = get_field('position');
        $slides[] = $temp;
  } 
}

wp_reset_postdata();

?>

<div class="partners-slider">
  <div class="container"> <div class="row"><h2 class="secition-title">PARTNERS</h2></div></div>
  <div class="">
    <?php if(count($slides) > 0) { ?>
      <div id="partnersCarousel" class="">
              
        <div class="partner-grid" role=""> <!-- CARROUSEL INNER --> 
          <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
            <div id="partner-<?php echo $id ?>" class="partner-grid-item" style="--image-url: url(<?php echo($image); ?>)" onclick="location.href = '<?php echo $permalink;?>'" >
              <div class="partner-grid-item-inner">
                  <div class="partner-details">
                  <h4><?php echo $title;?></h4>
                  <span class="position"><?php echo strtok($position, "/"); ?></span>
                  </div>
              </div>
            </div>        
          <?php $i++; }} ?>
        </div> <!--  END CARROUSEL INNER -->
      </div>
    </div>
</div>
