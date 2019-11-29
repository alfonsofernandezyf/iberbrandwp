<?php 

$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;

$args = array(
	'post_type'   => 'post',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order'   => 'DESC',
  'posts_per_page' => '12',
  'cat' => $cat_id
);
   
$archives = new WP_Query( $args );

if ($archives->have_posts()){
  while ( $archives->have_posts() ) {
    $archives->the_post();
        $temp = array();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
        $thumb_url = $thumb_url_array[0];
        $temp['permalink'] = get_the_permalink();
        $temp['title'] = get_the_title();
        $temp['category'] = get_the_category();
        
        $temp['thumb_id'] = $thumb_id;
        $slides[] = $temp;
  } 
}

wp_reset_postdata();

?>

<div class="container">

<div class="archives-slider">
  <div class="row">
    <?php if(count($slides) > 0) { ?>

      

      <ul id="light-slider">
          <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
            <li class="post-slide" >
                <a class="post-cat" href="<?php  $cat_id = $category[0]->term_id; echo get_category_link( $cat_id ); ?>"><?php echo$category[0]->cat_name; ?> </a>
                <a href="<?php echo($permalink); ?>">
                <?php echo wp_get_attachment_image($thumb_id, 'large', true, ["class" => "my-custom-class"]);?>
                <h4 class="archive-title" ><?php echo $title;?></h4>
                </a>
            </li>        
          <?php $i++; }} ?>

        </ul> <!--  END CARROUSEL INNER -->

        
      
    </div>  <!--row-->
    </div> <!--container fluid-->
</div> <!--archives-slider-->


<script type="text/javascript">
    $(document).ready(function() {
        $("#light-slider").lightSlider({
            item: 3,
            autoWidth: true,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 10,
 
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
 
            speed: 400, //ms'
            auto: false,
            pauseOnHover: false,
            loop: false,
            slideEndAnimation: true,
            pause: 2000,
 
            keyPress: true,
            controls: true,
            prevHtml: '<img src="<?php echo get_template_directory_uri();?>/img/slider-left.svg" alt="previous" />',
            nextHtml: '<img src="<?php echo get_template_directory_uri();?>/img/slider-right.svg" alt="next" />',
 
            rtl:false,
            adaptiveHeight:false,
 
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
 
            thumbItem:10,
            pager: true,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
 
            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
 
            responsive : [],
 
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
        });
    });
</script> 