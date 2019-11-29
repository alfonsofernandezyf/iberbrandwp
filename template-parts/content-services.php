<?php 

/*****
 * 
 * Get current service info
 * 
 * *********/ 

$thepost = the_post();

$service_id = get_the_ID();
$service_logo_url = get_the_post_thumbnail_url();
$service_title = get_the_title();
$service_subtitle = get_field('subtitle');
$service_background_url = get_field('backgroung_image');


/***
 * 
 * Get the list of services
 * 
 * ***/

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
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
        $thumb_url = $thumb_url_array[0];
        $temp['id'] = get_the_id();
        $temp['permalink'] = get_the_permalink();
        $temp['title'] = get_the_title();
        $temp['subtitel'] = get_the_excerpt();
        $temp['image'] = $thumb_url;
        $temp['icon'] = get_field('icon');
        $temp['backgroung_image'] = get_field('backgroung_image');
        $slides[] = $temp;
  } 
}

wp_reset_postdata();

?>


<style>

.site-header {
    margin-bottom: 0;
}

.serviceMain {
    margin: 5em 0;
    padding: 0 5em;
}

h4.service-title {
    color: #a12338;
    font-size: 2.5em;
    margin-bottom: 1em;
}

h4.service-title::after {
    content: ' ';
    display: block;
    border-bottom: solid 4px #a12338;
    width: 2em;
    margin-top: 1em;
}

h1.service-logo {
    max-width: 256px;
    display: flex;
    flex-flow: wrap;
    align-content: flex-start;
    justify-content: center;
    text-align: center;
}

h1.service-logo img {
    margin: 0 auto;
}




@media screen and (min-width: 1px) and (max-width: 992px) {
	
    #serviceMain {
    grid-template-columns: 1fr;
    padding: 5em;
    grid-gap: 3em;
    }   

}

@media screen and (min-width: 992px){
		

}

</style>


    <?php if(count($slides) > 0) { ?>
      <div id="servicesMenu" class="">
        <ul class="nav service-indicators">
        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
          <li data-target="#servicesCarousel" data-slide-to="<?php echo $i ?>" <?php if($service_id==$id) { ?>class="active"<?php } ?>  onclick="location.href = '<?php echo $permalink;?>'" >
              <img src="<?php echo($icon)?>" alt="<?php esc_attr($title) ?>">
              <a href="<?php echo $permalink;?>" class="indicatorLink">
                <span class="indicator-title"><?php echo strtoupper($title) ?></span>
              </a>
          </li>
          <?php $i++; }} ?>
        </ul>

      </div>
      <div id="serviceMain" style="--service-background-url: url(<?php echo($service_background_url)?>)" >
       
        <h1 class="service-logo"><img src="<?php echo($service_logo_url)?>" alt="<?php esc_attr($service_title) ?>"></h1>

        <div class="service-body">
            <h4 class="service-title"><?php echo($service_subtitle)?></h4>
            <?php the_content();?>
        </div>

      
      </div>
