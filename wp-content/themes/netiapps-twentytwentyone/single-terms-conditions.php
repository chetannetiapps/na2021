<?php

 get_header();
 global $post;
 while ( have_posts() ) :
    the_post(); 
    // check if the flexible content field has rows of data
    if( have_rows('terms_condition_here_section') ):
    
        while ( have_rows('terms_condition_here_section') ) : the_row();
            if( get_row_layout() == 'hero_block' ):
                $background_image = get_sub_field('banner_image');
                $title = get_sub_field('banner_title');
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

                <div class="section insight-section" id="insight-section">
						<div class="container">
									<div class="row grid">
                                        <?php 
                                              if( have_rows('terms_conditions') ):
    
                                                while ( have_rows('terms_conditions') ) : the_row();
                                            ?>
                                             <h1> <?php echo get_sub_field('title');?> </h1>
                                             <p> <?php echo get_sub_field('content');?> </p>
                                        
                                    <?php endwhile;
                                        endif; ?>
                                 </div>
					   </div>
				</div>
		</div>

  
<?php   
          endif;
         endwhile;
        endif;
   
    endwhile;
    get_footer();
?>