<?php

 get_header();
 global $post;
 while ( have_posts() ) :
    the_post(); 
    
                if( have_rows('about_us_hero_section') ):
                    while ( have_rows('about_us_hero_section') ) : the_row();
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
                                <div class="banner_logo">
                                    <?php 
                                            if (have_rows('banner_logo')):
                                                while (have_rows('banner_logo')) : the_row();
                                                $image = get_sub_field('logo');
                                    ?>
                                            <img src="<?php echo $image['url']; ?>" />
                                    <?php 
                                            endwhile;
                                        endif;
                                    ?>
                                </div>
                            </div>
                            
                <?php 
                        endif; 
                    endwhile;
                endif;

                if( have_rows('about_us_intro_section')):
                    while( have_rows('about_us_intro_section')):the_row();
                    ?>
                            <div class="intro-text">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="intro-text text-center">
                                                <h4> <?php echo get_sub_field('description'); ?> </h4>                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                    endwhile;
                endif;
                ?>

                <div class="image-content-section">
                    <div class="container">
                            <div class="col-lg-11 m-auto">
                            <?php
                                  if(have_rows('our_core_values')):
                                      while(have_rows('our_core_values')): the_row();
                                      ?>
                                            <div class="justify-content-center ">
                                                <h1 class="text-center"> <?php echo get_sub_field('section_title'); ?> </h1>
                                            </div>
                                            <div class="row about-us core-values justify-content-center content-bottom-wrapper">
                                                    <?php
                                                            if (have_rows('core_values')):
                                                                while (have_rows('core_values')) : the_row();
                                                                $image = get_sub_field('image');
                                                                ?>
                                                                    
                                                                    <div class="col-12 col-sm-6 col-md-4 text-center animated fadeInLeft my-3 px-lg-5">
                                                                        <div class="key-content">
                                                                            <span class="key-circle"><img alt="Quality" src="<?php echo $image['url']; ?>"></span>
                                                                            <h5><?php echo get_sub_field('title'); ?></h5>
                                                                        </div>
                                                                    </div>
                                                                <?php

                                                            endwhile;
                                                        endif;
                                                    ?>
                                            </div>
                                    <?php
                                      endwhile;
                                  endif;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ceo_comments_section">
                    <div class="container">
                        <div class="row">
                                <?php
                                    if( have_rows('ceo_comments')):
                                        while(have_rows('ceo_comments')): the_row();
                                        $photo = get_sub_field('ceo_photo');
                                        ?>
                                            <div class="col-md-8">
                                                <?php echo get_sub_field('comments');?>
                                            </div>
                                            <div class="col-md-4 photo">
                                                <img src="<?php echo $photo['url']; ?>" />
                                            </div>
                                        <?php
                                        endwhile;
                                    endif;
                                ?>
                        </div>
                    </div>
                </div>

                <div class="industry_slider image-content-section" >
                    <div class="container">
                       <div class="industry_slide owl-carousel">
                                <?php
                                if (have_rows('industry_slider')):
                                    while (have_rows('industry_slider')) : the_row();
                                         $image = get_sub_field('image');
                                        ?>
                                        <div>
                                            <div class="item row">
                                                
                                                    <div class="col-md-6" >
                                                        <h1> <?php echo get_sub_field('title'); ?> </h1>
                                                        <?php echo get_sub_field('content'); ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="img-div" >
                                                                <img src="<?php echo $image['url']; ?>"/>
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
                </div>    

               
<?php 
    endwhile;
    get_footer();
?>