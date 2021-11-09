<?php
get_header();
 global $post;
 while ( have_posts() ) :
 the_post(); 

// check if the flexible content field has rows of data
if( have_rows('site_map_block') ):
    // loop through the rows of data
    while ( have_rows('site_map_block') ) : the_row();

?>
<?php
    if( get_row_layout() == 'inner_block' ):
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


<section id="content" class="content-sitemap">
        <div id="accordion" class="accordion-container">
            <div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <?php
            // check if the flexible content field has rows of data
        if( have_rows('site_map') ):
            // loop through the rows of data
            while ( have_rows('site_map') ) : the_row();
                  if( get_row_layout() == 'menu_block' ):

                    // Check rows exists.
                    if( have_rows('top_menu') ):

                        // Loop through rows.
                        while( have_rows('top_menu') ) : the_row();

                            // Load sub field value.
                            $link = get_sub_field('top_menu');
                            if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <article class="content-entry">
                        <h4 class="article-title"><i></i><a target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>" ><?php echo esc_html( $link_title ); ?></a></h4>
                        <div class="accordion-content" style="">
                                <p>

                                  </p>
                <?php
                // Check rows exists.
                    if( have_rows('second_menu_level') ):

                        // Loop through rows.
                        while( have_rows('second_menu_level') ) : the_row();

                            // Load sub field value.
                            $sec_link = get_sub_field('menu_title');
                            if( $sec_link ): 
    $sec_link_url = $sec_link['url'];
    $sec_link_title = $sec_link['title'];
    $sec_link_target = $sec_link['target'] ? $sec_link['target'] : '_self';
    ?>

                                  <ul class="first_level"> 
                                          
                           <li><a target="<?php echo esc_attr( $sec_link_target ); ?>" href="<?php echo esc_url( $sec_link_url ); ?>" ><?php echo esc_html( $sec_link_title ); ?></a>
                      <?php
                        // Check rows exists.
                            if( have_rows('third_menu_level') ):

                                // Loop through rows.
                                while( have_rows('third_menu_level') ) : the_row();

                                    // Load sub field value.
                                    $third_link = get_sub_field('menu_title');
                                    if( $third_link ): 
            $thrd_link_url = $third_link['url'];
            $thrd_link_title = $third_link['title'];
            $thrd_link_target = $third_link['target'] ? $third_link['target'] : '_self';
    ?>
      
                           <ul class="sec_level"> 
                <li><a target="<?php echo esc_attr( $thrd_link_target ); ?>" href="<?php echo esc_url( $thrd_link_url ); ?>" ><?php echo esc_html( $thrd_link_title ); ?></a></li>                           
                                </ul>
                 <?php  
                            endif;
                        endwhile;
                    endif;
     ?>                      
                                          
                           </li>
                </ul>
     <?php  
            endif;
        endwhile;
    endif;
     ?>                                              

                        </div>
                        <!--/.accordion-content-->
                </article>

                <?php endif; 

                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;

                  endif;
            endwhile;
        endif;            

?>    
            </div>
             </div>
               </div>    
                
        </div>              
        <!--/#accordion-->              
    </section>

<?php endif; ?>
<?php
        // Then we can check if get_row_layout() === other module and display its data
    endwhile;
endif;

?>


<?php endwhile; // end of the loop. ?>   
<?php

get_footer();
?>

