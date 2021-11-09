
 <?php
/**
 * Plugin Name: Industries Slider
 *
 * Description: Slides the industries post 
 * Version: 1.0
 * Author: Chetan Kumar.g
 * 
 */

 function events_shortcode() {
 	 global $wp;
    	$args   =   array(
                	'post_type'         =>  'industry',
                	'post_status'       =>  'publish',
                	'order' => 'ASC',
                	'posts_per_page' => 1,
    	            );
    	            
        $postslist = new WP_Query( $args );
        global $post;
        $output = '';

        if ( $postslist->have_posts() ) :
        $output .= '<div class="industries-lists">';

            while ( $postslist->have_posts() ) : $postslist->the_post();  
            $output .= '<div class="casestudy-section">
                            <div class="container">
                                <div class="section-title">
                                    <h3>'. get_the_title().'</h3>
                                </div>
                            </div>
                        </div>';  
            $output .='<div class="casestudy-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="slider">
                            <div class="owl-carousel">';
                               
                                        if(have_rows('hero_banner_block')):
                                            while( have_rows('hero_banner_block') ) : the_row(); 

                                           if( get_row_layout() == 'hero_banner' ):
         $background_image = get_sub_field('image');
            $title = get_sub_field('title');
             
             $output .='<div>
                                    <div class="slider-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="casestudy-title">
                                                    <h3>'. get_sub_field('title').'</h3>
                                                </div>
                                                <div class="casestudy-button">
                                                    <a href="'. get_sub_field('link').'" class="btn btn-link">Read More</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="img"><img alt="'. $background_image['alt'].'" src="'. $background_image['url'].'"></div>
                                </div>';
                                    
                                    endif;
                                    endwhile;
                                endif;
                                
                            
                            $output .='</div>
                        </div>
                </div>
            </div>
        </div>
    </div>';                             
            endwhile;
            wp_reset_postdata();
            $output  .= '</div>';			
        endif;    
        return $output;
    }
    add_shortcode( 'industries_sliders', 'events_shortcode' );   


 
 function casestudy_post() {
     global $wp;
        $args   =   array(
                    'post_type'         =>  'case-study',
                    'post_status'       =>  'publish',
                    'order' => 'ASC',
                    'posts_per_page' => 4,
                    );
                    
        $postslist = new WP_Query( $args );
        global $post;

        $output = '';

        if ( $postslist->have_posts() ) :
        $output .= '<div class="casestudy-slider">
                        <div class="container">
                        <div class="row case-study-content">    ';
              $loop_counter = 1;          
            while ( $postslist->have_posts() ) : $postslist->the_post(); 
            $view_link =  get_permalink(  $post->ID, false );  
            if($loop_counter == 1 || $loop_counter == 4){
                $row_class = 'col-md-12';
            }else{
                $row_class = 'col-md-6';
            }
            // check if the flexible content field has rows of data
if( have_rows('case_study_block') ):
    // loop through the rows of data
    while ( have_rows('case_study_block') ) : the_row();
    if( get_row_layout() == 'case_study' ):
         $background_image = get_sub_field('hero');
            $title = get_sub_field('title');
            $intro_content = get_sub_field('intro_description');

        
            $output .='
                            <div class="case-study-row '.$row_class.'">
                            <div class="inner-hero-section d-flex justify-content-center align-items-center">
    
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">               
                                            <h3 class="text-white hero-title">'. $title .'</h3> '; /*
                                            <div class="text-white" >'.strip_tags($intro_content).'</div> */
            $output .= '<div class="field_service_button"><a href="'.$view_link.'" class="btn btn-primary download-case-study">Download</a></div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-contain-background">
                                        <img alt="'. $background_image['alt'].'" src="'. $background_image['url'].'">
                                </div>
                            </div>
                                </div>';                                       
     endif;
     endwhile;
endif;            

           $loop_counter++;                             
            endwhile;
            wp_reset_postdata();
            $output  .= '</div> </div> </div>';           
        endif;    
        return $output;
    }
    add_shortcode( 'case_study_list', 'casestudy_post' );        
