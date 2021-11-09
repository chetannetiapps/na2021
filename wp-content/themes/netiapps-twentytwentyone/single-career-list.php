<?php
get_header();

while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('career_list_block') ):
    // loop through the rows of data
    while ( have_rows('career_list_block') ) : the_row();



    if( get_row_layout() == 'hero_block' ):
         $background_image = get_sub_field('hero');
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

<div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="intro-text text-center">
                    <h4> <?php echo get_sub_field('description'); ?></h4>                   
                </div>
            </div>
        </div>
    </div>
</div>


<?php endif; 
        // Then we can check if get_row_layout() === other module and display its data
    endwhile;
endif;

?>
<div class="career-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-10">
               
                    <?php
                     global $wp;
                    
                     $args   =   array(
                                    'post_type'         =>  'career-detail',
                                    'post_status'       =>  'publish',
                                    'order' => 'DESC',
                                    'posts_per_page' => 10,
                                    );
                    
        $postslist = new WP_Query( $args );
        global $post;
        if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post();  

                if(have_rows('career_detail_block')):
                                            while( have_rows('career_detail_block') ) : the_row(); 

                                           if( get_row_layout() == 'career_block' ):
         $experience = get_sub_field('experience');

        ?>
                <div class="career-list">   
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="career-title"><h3><?php echo the_title();?></h3></div>
                            <div class="career-location d-flex align-items-center">
                                <h4>Location: Bengaluru,India</h4>
                                <h4>Experience: <?php echo $experience;?></h4>
                            </div>

                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>    
            <?php
                endif; 
                endwhile;
                endif; 
            endwhile;
             endif;   
             ?>        
               
            </div>
        </div>
     </div>
    </div> 


<?php  echo do_shortcode( '[latest_insights title="Related Insights" postid="'.get_the_ID().'" page=""]' ); ?>

 <?php endwhile; // end of the loop. 

get_footer();
?>