<?php

 get_header();
 global $post;
 while ( have_posts() ) :
    the_post(); 

      if( have_rows('client_hero_section') ):
        while ( have_rows('client_hero_section') ) : the_row();
            if( get_row_layout() == 'hero_block' ):
                $background_image = get_sub_field('banner_image');
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
                            <img src="<?php echo $background_image['url'];?>" />
                    </div>
                </div>

                <?php

            endif;
        endwhile;
    endif;
?>


<?php if( get_field('client_intro') ): ?>
                       
            <div class="intro-text">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="intro-text text-center">
                                <h4><p> <?php echo get_field('client_intro') ?></p></h4>                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
<?php  endif; ?>
<div class="section testimonial-section" id="testimonial-section">
        <div class="container">
            <?php
            if (have_rows('client_slider')):
                while (have_rows('client_slider')) : the_row();
                    ?>
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="section-title">
                                <h3><?php echo get_sub_field('section_title'); ?> </h3>
                                <h2><?php echo get_sub_field('description'); ?> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <div class="testi owl-carousel">
                                <?php
                                if (have_rows('slider_items')):
                                    while (have_rows('slider_items')) : the_row();
                                        ?>
                                        <div>
                                            <div class="item">
                                                <div class="testimonial-block">
                                                    <div class="quote"><img
                                                                src="<?php echo get_template_directory_uri() . '/images/quote.png'; ?>"/>
                                                    </div>
                                                    <div class="test-content">
                                                        <?php echo get_sub_field('client_content'); ?>
                                                    </div>
                                                    <div class="position"><?php echo get_sub_field('client_address'); ?></div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>


<div class="intro-text">
    <div class="container">
    <?php
    // loop through the rows of data
    if(have_rows('client_logos')):
       while ( have_rows('client_logos') ) : the_row(); 

?>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center technology_logos p-lg-3">
                        <h1><?php echo get_sub_field('title'); ?></h1>
                       <hr class='head-liner'>
                       <div class='row justify-content-center '>
                       
                    <?php 
                        if( have_rows('client_logo_list') ):
                        while( have_rows('client_logo_list') ) : the_row();
                            $client_logo = get_sub_field('logo');
                    ?>
                            <div class="col-md-3">
                             <img src="<?php echo $client_logo['url'];?>" />
                            </div> 
                    <?php  
                        endwhile;
                      endif;                   
                    ?>   
                    </div>                
                </div>
            </div>
        </div>


    <?php 
        endwhile;
    endif;
        ?>
  </div>
</div>





<?php
                  
    endwhile;
    get_footer();
?>