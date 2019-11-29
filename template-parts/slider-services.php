<?php 
$args = array(
	'post_type'   => 'services',
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order'   => 'ASC',
  'posts_per_page' => '10'
);
   
$services = new WP_Query( $args );

if ($services->have_posts()){
  while ( $services->have_posts() ) {
    $services->the_post();
        $temp = array();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        $temp['permalink'] = get_the_permalink();
        $temp['title'] = get_the_title();
        $temp['subtitle'] = get_field('subtitle');;
        $temp['excerpt'] = get_the_excerpt();
        $temp['image'] = $thumb_url;
        $temp['icon'] = get_field('icon');
        $temp['backgroung_image'] = get_field('backgroung_image');
        $slides[] = $temp;
  } 
}

wp_reset_postdata();

?>

<div class="services-slider">
  <div class="container-fluid">
    <?php if(count($slides) > 0) { ?>
      <div id="servicesCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
          <li data-target="#servicesCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>>
              <img src="<?php echo($icon)?>" alt="<?php esc_attr($title) ?>">
              <span class="indicator-title"><?php echo strtoupper($title) ?></span>
          </li>
          <?php $i++; } ?>
        </ol>
       
        <div class="carousel-inner" role="listbox"> <!-- CARROUSEL INNER --> 
          <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
            <div class="carousel-item  <?php if($i == 0) { ?>active<?php }; ?>" style="--service-background: url(<?php echo($backgroung_image);?>)" >
              <div class="services-slide-grid">
               
                <div class="service-logo-box">
                  <img src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>" class="service-logo">
                  <hr class="service-hr" style="border:none;">
                </div>
                
                <div class="slide-content-text">
                  <h4 class="service-subtitle" ><?php echo $subtitle;?></h4>
                  <div class="service-excerpt">
                    <p><?php echo $excerpt;?></p> 
                    <a href="<?php echo $permalink;?>" class="read-more">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>        
          <?php $i++; }} ?>
        </div> <!--  END CARROUSEL INNER -->
        <div class="services-carrousel-control">
          <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
          <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next"><span class="carousel-control-next-icon"></span></a>
        </div>
      </div>
    </div>
</div>
