<?php
get_header();

while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('template_building_blocks') ):
    // loop through the rows of data
    while ( have_rows('template_building_blocks') ) : the_row();

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

<?php endif;
    endwhile;
endif;
 ?>

<?php 
   // short code present in the industries slider plugins...
    echo do_shortcode('[case_study_list]');
?>

<?php

// check if the flexible content field has rows of data
if( have_rows('case_study_portfolios') ):
    ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="work-section">
        <?php
            // loop through the rows of data
    while ( have_rows('case_study_portfolios') ) : the_row();

    if( get_row_layout() == 'portfolios_block' ):
         if( get_row_index() % 2 == 1 ){
     ?>
         <div class="row p-lg-5">
           <div class="col-md-7">
            <h4><?php echo get_sub_field('title'); ?></h4>
            <div class="description">
                <?php echo get_sub_field('description'); ?>
            </div>
           </div> 
           <div class="col-md-5">            
                 <div class="row">
                 <div class="col-md-12">  
            <?php $background_image = get_sub_field('image'); ?>
             <img src="<?php echo $background_image['url'];?>" />
                 </div>
                 <div class="col-md-12 case-study-block case-study-offers-list"> 
             <?php
              if( have_rows('service_offers') ):
                 echo "<h5><b>Services Offered</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('offers'))):
                        echo "<label>".get_sub_field('offers'). "</label>";
                    endif;
                 endwhile;
                 echo "<h5><b>Technologies</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('technologies_used'))):
                        echo "<label>".get_sub_field('technologies_used'). "</label>";
                    endif;
                 endwhile;
                 echo "<h5><b>Industry</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('industries'))):
                        echo "<label>".get_sub_field('industries'). "</label>";
                    endif;    
                 endwhile;
              endif;      
             ?> 
                </div>
                </div>
           </div>  
         </div>   

    <?php
        }else{
            ?>
        <div class="row p-lg-5"> 
           <div class="col-md-5">
             <div class="row">
                 <div class="col-md-12"> 
            <?php $background_image = get_sub_field('image'); ?>
             <img src="<?php echo $background_image['url'];?>" />
                  </div>  
                   <div class="col-md-12 case-study-block case-study-offers-list"> 
             <?php
              if( have_rows('service_offers') ):
                 echo "<h5><b>Services Offered</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('offers'))):
                        echo "<label>".get_sub_field('offers'). "</label>";
                    endif;
                 endwhile;
                 echo "<h5><b>Technologies</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('technologies_used'))):
                        echo "<label>".get_sub_field('technologies_used'). "</label>";
                    endif;
                 endwhile;
                 echo "<h5><b>Industry</b></h5>";
                 while( have_rows('service_offers') ) : the_row();
                    if(!empty(get_sub_field('industries'))):
                        echo "<label>".get_sub_field('industries'). "</label>";
                    endif;    
                 endwhile;
              endif;      
             ?>  </div>
               </div>
           </div> 
           <div class="col-md-7">
            <h4><?php echo get_sub_field('title'); ?></h4>
            <div class="description">
                <?php echo get_sub_field('description'); ?>
            </div>
           </div> 
         </div>  
    <?php        
        }
        endif;
        endwhile;
    ?>    
      </div>
      </div>
    </div>
  </div>
</section>              



 <?php 
 endif;
 ?>   

 <?php endwhile; // end of the loop. 
get_footer();
?>