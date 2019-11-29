<?php 



$args = array(
	'post_type'   => 'professionals',
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order'   => 'ASC',
  'posts_per_page' => '25'
);
   
$professionals = new WP_Query( $args );

if ($professionals->have_posts()){
  while ( $professionals->have_posts() ) {
    $professionals->the_post();
        $temp = array();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        $temp['id'] = get_the_ID();
        $temp['permalink'] = get_the_permalink();
        $temp['title'] = get_the_title();
        $temp['excerpt'] = get_the_excerpt();
        $temp['content'] = get_the_content();
        $temp['image'] = $thumb_url;
        $temp['position'] = get_field('position');
        $slides[] = $temp;
  } 
}

wp_reset_postdata();

?>

<div class="professionals-slider container">
<div class="container"> <div class="row"><h2 class="secition-title">PROFESSIONALS</h2></div></div>  <div class="row">
    <?php if(count($slides) > 0) { ?>
      <div id="professionalsCarousel" class="carousel slide carousel-fade" >
        <ol class="carousel-indicators-professionals">
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
          <li data-target="#professionalsCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>>
              <img src="<?php echo($icon)?>" alt="<?php esc_attr($title) ?>">
              <span class="indicator-title"><a href="#"><?php echo strtok($title, " ") ?></a></span>
          </li>
          <?php $i++; } ?>
        </ol>
       
        <div class="carousel-inner" role="listbox"> <!-- CARROUSEL INNER --> 
          <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
            <div class="carousel-item <?php if($i == 0) { ?>active <?php }; ?>">
              <div class="professionals-slide-grid">
                <div class="pro-col1">
                    <div class="pro-name">
                        <?php echo( '<h2 class="pro-name">' . $title . '</h2>' );
                        echo '<h4 class=pro-position>'.$position.'</h4>';
                        ?>
                    </div>
                    <img src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>" class="pro-pic">
                </div>
                <div class="pro-col2">
                  <div class="pro-content">
                    <p><?php echo $content;?></p> 
                  </div>
                  <div class="side-info">
                    <p><?php echo $side;?></p> 
                  </div>
                </div>
              </div>
            </div>        
          <?php $i++; }} ?>
        </div> <!--  END CARROUSEL INNER -->
      </div>
    </div>
</div>
