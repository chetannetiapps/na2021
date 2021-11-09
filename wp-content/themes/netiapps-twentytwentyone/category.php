<?php
get_header();

global $post;


?>

<?php $page_object = get_queried_object(); ?>
<?php 
 // echo $page_object->cat_name;

$catObj = get_category_by_slug($page_object->cat_name); 
//var_dump($catObj);
$catName = $catObj->name;
$catTermid = $catObj->term_id;

//echo "<h4> $catTermid </h4>";
 ?>

<div class="section insight-section" id="insight-section">
						<div class="container">
									<div class="row grid">
<?php

      $args = array(  
        'post_type' => 'blog-detail',
        'post_status' => 'publish',
        'posts_per_page' => 10, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'cat' => $catTermid,
    );

    $loop = new WP_Query( $args ); 
     if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

    // the_content();
     $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
     $view_link =  get_permalink(  get_the_ID(), false ); 
	?>

	<div class="col-lg-4 element-item ">
                <div class="insight-block">
                    <div class="insight-image"> 
                            <img src="<?php echo $url; ?>">
                    </div>
                    <div class="insight-date">
                        <?php echo get_the_date('d M Y'); ?>
                    </div>
                    <div class="insight-content">
                        <a href="<?php echo $view_link; ?>" /> <?php echo get_the_title(); ?></a> 
                    </div>
                </div>
      </div>

	<?php
     endwhile; endif;
 
?>
					</div>
					</div>
					</div>
<?php
get_footer();
?>