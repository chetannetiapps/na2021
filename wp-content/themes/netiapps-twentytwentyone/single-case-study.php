<?php
get_header();

while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('case_study_block') ):
    // loop through the rows of data
    while ( have_rows('case_study_block') ) : the_row();



    if( get_row_layout() == 'case_study' ):
         $background_image = get_sub_field('hero');
            $title = get_sub_field('title');
?>
<div class="inner-hero-section d-flex justify-content-center align-items-center">
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <div class="breadcrumb text-white"><span><?php // echo get_the_title();?></span></div> -->                
                <h1 class="display-5 text-white hero-title"><?php echo $title; ?></h1>   
            </div>
        </div>
    </div>
    <div class="hero-contain-background">
            <img alt="<?php echo $background_image['alt'];?>" src="<?php echo $background_image['url'];?>" />
    </div>
</div>

<div class="intro-text image-content-section">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-8">
                <div class="intro-text ">
                    <?php
                            //$intro_title = get_sub_field('intro_title');                        
                            // Display content from that module
                            echo get_sub_field('intro_title');                    
                   ?>                    
                </div>
            </div>
            
        </div>
    </div>
</div>


<div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="intro-text text-center">
                    <?php
                            $intro_content = get_sub_field('intro_description');                        
                            // Display content from that module
                            echo "<div>" . $intro_content . "</div>";                    
                    ?>                   
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
<?php
// check if the flexible content field has rows of data
if( have_rows('case_study_block') ):
    // loop through the rows of data
?>
<div class="col-md-12">
              <div class="row text-center justify-content-center">
                <?php

    while ( have_rows('case_study_block') ) : the_row();

    if( get_row_layout() == 'case_study_property' ):
         $case_study_value = get_sub_field('case_study_value');
            $case_study_title = get_sub_field('case_study_title');
            ?>
                                      <div class="col-md-4 col-12">
                                        <span class="key-circle"><?php echo $case_study_value; ?></span>
                                            <h4><?php echo $case_study_title; ?></h4>
                                        </div>
    <?php 
    endif; 
    endwhile;
    ?>                                    
             </div>
</div>

<?php endif;
?>

<div class="intro-text image-content-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
            <div class="intro-text ">
                    <?php
                            //$intro_title = get_sub_field('intro_title');                        
                            // Display content from that module
                            echo get_sub_field('intro_title');                    
                   ?>                    
                </div>
           
            <?php if (get_the_ID() == "2127"){
                // case-study/ngo-under-unesco-leverages-ux-rich-web-portal
                echo do_shortcode( '[hubspot type=form portal=24878914 id=a08db879-9f69-4b0e-8091-bfc0a2f1af4b]' );
            }  elseif (get_the_ID() == "2133"){
             //   case-study/web-and-mobile-application-asias-largest-hotel-chain
                echo do_shortcode( '[hubspot type=form portal=24878914 id=2e3fd9b5-7f43-440e-91f1-e85622118d2f]' );
            } elseif (get_the_ID() == "2113"){
                // case-study/next-gen-ux-rich-responsive-website-development
                echo do_shortcode( '[hubspot type=form portal=24878914 id=6a7978d1-bacc-4c31-866f-3a0f0ff9a7da]' );
            } else{

                echo do_shortcode( '[hubspot type=form portal=24878914 id=bdd8c595-f636-497f-9cdf-21eb91a9110d]' );
            }
             ?>
            </div>
        </div>
    </div>
</div>

 <?php endwhile; // end of the loop. 

get_footer();
?>