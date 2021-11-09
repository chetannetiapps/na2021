<?php
get_header();

while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('career_detail_block') ):
    // loop through the rows of data
    while ( have_rows('career_detail_block') ) : the_row();



    if( get_row_layout() == 'career_block' ):
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
                <div class="intro-text">
                    <?php
                            $content = get_sub_field('description');                        
                            // Display content from that module
                            echo "<div>" . $content . "</div>";                    
                    ?>                   
                </div>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode( '[hubspot type=form portal=24878914 id=4526fa60-06db-4522-8174-9c8969c36656]'); ?>
            </div>
        </div>
    </div>
</div>

<?php endif; 
        // Then we can check if get_row_layout() === other module and display its data
    endwhile;
endif;

?>

<?php  echo do_shortcode( '[latest_insights title="Related Insights" postid="'.get_the_ID().'" page=""]' ); ?>

 <?php endwhile; // end of the loop. 

get_footer();
?>