<?php

 get_header();
 global $post;
 while ( have_posts() ) :
    the_post(); 


    if( have_rows('people_behind_hero_section') ):
    
        while ( have_rows('people_behind_hero_section') ) : the_row();
            if( get_row_layout() == 'block_hero' ):
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


<?php
    
                if( have_rows('people_behind') ):
                    while ( have_rows('people_behind') ) : the_row();
                            $intro_image = get_sub_field('image');               
                ?>
                       
                       <div class="intro-text">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="intro-text text-center">
                                           <h1><?php echo  get_sub_field('intro_title');?></h1>
                                            <h4><p> <?php echo get_sub_field('intro_content') ?></p></h4>                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    <?php 
                           if(have_rows('people_content')):
                                $i = 1;
                                while(have_rows('people_content')): the_row();
                                $photo = get_sub_field('image');
                                if ( $i % 2 == 0){
                                  $addEvenClass = 'even';  
                                }else{
                                    $addEvenClass = 'add';  
                                }
                            ?>
                               <div class="people-list <?php echo $addEvenClass;?>">
                                     <div class="container">
                                            <div class="row">
                                                <div class="col-md-8">
                                                  <h1><?php echo get_sub_field('name'); ?></h1>
                                                  <div class="designation"><?php echo get_sub_field('designation'); ?> </div>
                                                  <div class="description"><?php echo get_sub_field('description');?></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="photo">
                                                        <img src="<?php echo $photo['url']; ?>" alt="">
                                                    </div>
                                                </div>
                                            </div>         
                                    </div>
                               </div>
                                  
                            <?php
                                $i++;
                                endwhile;
                           endif;
                    
                    ?>

                            
                <?php 
                        
                    endwhile;
                endif;
                

    endwhile;
    get_footer();
?>