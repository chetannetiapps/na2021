<?php
get_header();

while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('inner_hero_block') ):
    // loop through the rows of data
    while ( have_rows('inner_hero_block') ) : the_row();

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


<?php endif; 
        // Then we can check if get_row_layout() === other module and display its data
    endwhile;
endif;

?>

<?php

// check if the flexible content field has rows of data
if( have_rows('solution_detials_intro') ):

    // loop through the rows of data
    while ( have_rows('solution_detials_intro') ) : the_row();
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

<?php endif;
    endwhile;
endif;
 ?>


<?php
/* technology block content */
// check if the flexible content field has rows of data
if( have_rows('technology_section') ):

    ?>
<div class="intro-text">
    <div class="container">
    <?php
    // loop through the rows of data
    while ( have_rows('technology_section') ) : the_row();

    if( get_row_layout() == 'technology_block' ):
        ?>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center technology_logos p-lg-3">
                    <?php
                            $title = get_sub_field('title');                        
                            // Display content from that module
                            echo "<h4><b>" . $title . "</b></h4>
                            <hr class='head-liner'>"; 

                            // Check rows exists.
                    if( have_rows('technology_logo') ):
                        echo "<div class='row justify-content-center '>";
                        // Loop through rows.
                        while( have_rows('technology_logo') ) : the_row();

                            // Load sub field value.
                            $technolog_logo = get_sub_field('technology_logo');
                            // Do something...
                            ?>
                            <div class="col-md-3">
                             <img src="<?php echo $technolog_logo['url'];?>" />
                            </div> 
                           <?php  
                        // End loop.
                        endwhile;
                        echo "</div>";
                    endif;                   
                    ?>                   
                </div>
            </div>
        </div>


<?php endif;
    endwhile;?>
  </div>
</div>
<?php    
endif;
/* End of the technology block content */
 ?>


 <?php endwhile; // end of the loop. 

get_footer();
?>