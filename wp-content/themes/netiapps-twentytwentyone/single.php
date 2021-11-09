<?php
get_header();

while ( have_posts() ) :
 the_post(); 

?>

 <div class="inner-hero-section d-flex justify-content-center align-items-center">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb text-white"><span><?php echo get_the_title();?></span></div>                
                <h1 class="display-5 text-white hero-title"><?php echo  get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <?php

    $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
   $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    ?>
    <div class="hero-contain-background">
            <img alt="<?php echo $alt; ?>" src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" />
    </div>
</div>
<div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="intro-text">
                    <?php                       
                            // Display content from the post
                            echo  the_content();                    
                    ?>                   
                </div>
            </div>
           
        </div>
    </div>
</div>

 <?php endwhile; // end of the loop. 

get_footer();
?>