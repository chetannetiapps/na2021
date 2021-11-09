<?php
get_header();
 global $post;
 while ( have_posts() ) :
 the_post(); 

// check if the flexible content field has rows of data
if( have_rows('template_building_blocks') ):
    // loop through the rows of data
    while ( have_rows('template_building_blocks') ) : the_row();

?>

<?php

    if( get_row_layout() == 'hero' ):
         $background_image = get_sub_field('image');
            $title = get_sub_field('title');
?>
<div class="inner-hero-section d-flex justify-content-center align-items-center">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb text-white"><span><?php echo get_the_title();?></span></div>                
                <h1 class="display-5 text-white hero-title"><?php echo $title; ?></h1>   
            </div>
        </div>
    </div>
    <div class="hero-contain-background">
            <img alt="<?php echo $background_image['alt'];?>" src="<?php echo $background_image['url'];?>" />
    </div>
</div>


<?php endif; ?>
<?php
        // Then we can check if get_row_layout() === other module and display its data
    endwhile;
endif;

?>

<?php

// check if the flexible content field has rows of data
if( have_rows('solution_landing_intro') ):

    // loop through the rows of data
    while ( have_rows('solution_landing_intro') ) : the_row();
?>
<?php

    if( get_row_layout() == 'intro_block' ):
        ?>
<div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="intro-text text-center">
                    <?php
                            $content = get_sub_field('description');                        
                            // Display content from that module
                            echo "<h4>" . $content . "</h4>";                    
                    ?>                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php
        // Then we can check if get_row_layout() === other module and display its data

    endwhile;

endif;

?>

           <?php

// check if the flexible content field has rows of data
if( have_rows('service_block') ):
    ?>

<div class="service-list">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="service-block-container">
           

 <?php    

    // loop through the rows of data
    while ( have_rows('service_block') ) : the_row();
?>
<?php

    if( get_row_layout() == 'inner_service_block' ):
        ?>
        <?php if( get_row_index() > 2){ $top_margin = "top-marg-items";}
        else{ $top_margin = ""; } ?>
          <div class="service-box <?php echo $top_margin; ?>">
        <?php
         if( get_row_index() % 2 == 0 ){    
                $push_top = "push-top";
        }else{ 
                $push_top = " ";        
        }    
        ?>      
            <div class="service-card <?php // echo $push_top; ?>">          
                    <div class="title"><h3><?php echo  get_sub_field('title'); ?></h3></div>
                    <div class="description"><?php echo  get_sub_field('description'); ?></div>
                    <?php $readmore_link = get_sub_field('read_more');
                       if ($readmore_link) {
                    ?>
                    <div class="link"><a href="/<?php echo get_sub_field('read_more'); ?>"><img src="<?php echo get_template_directory_uri() .'/images/arrow-right-circle-fill.svg';?>" ></a></div>
                    <?php  } ?>
            </div>
         </div>   
        <?php
                endif; 
                endwhile;
        ?>

        </div>
            </div>
        </div>
    </div>
</div>
<?php 
   endif;
?>

<div class="other-service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                      if( have_rows('solution_other_service_block') ):
                        while ( have_rows('solution_other_service_block') ) : the_row();
                ?>
                <div class="title text-center">
                    <h4><?php echo get_sub_field('title');?></h4>
                </div>
                <div class="other-service-list">
                    <ul>
                        <?php
                              $service_name = get_sub_field('service_name');
                            if( $service_name ):
                                foreach($service_name as $key => $service):
                                        $post_val = get_post($service['name_service']);
                        ?>
                        <li><a href="<?php echo get_permalink($service['name_service']); ?>" ><?php echo $post_val->post_title;?></a></li>
                        <?php
                              endforeach;
                            endif;
                        ?>
                    </ul>
                </div>
                <?php 
                     endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>


<?php  echo do_shortcode( '[latest_insights title="Related Insights" postid="'.get_the_ID().'" page=""]' ); ?>


<?php endwhile; // end of the loop. ?>   
<?php

get_footer();
?>

