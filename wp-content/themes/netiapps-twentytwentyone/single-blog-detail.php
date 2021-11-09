<?php
get_header();
global $post;
while ( have_posts() ) :
 the_post(); 


// check if the flexible content field has rows of data
if( have_rows('blog_detail_Block') ):
    // loop through the rows of data
    while ( have_rows('blog_detail_Block') ) : the_row();



    if( get_row_layout() == 'blog_detail_block' ):
         $background_image = get_sub_field('hero_banner');
            $title = get_sub_field('title');
?>
<div class="inner-hero-section d-flex justify-content-center align-items-center">
    <div class="container">

    </div>
    <div class="hero-contain-background">
            <img alt="<?php echo $background_image['alt'];?>" src="<?php echo $background_image['url'];?>" />
    </div>
</div>

<div class="insight-container">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-9">
                <div class="insight-title">
                    <?php // echo get_the_term_list( get_the_ID(), 'blog', '<label>', ',' ,'</label>'); ?> 
                     <!-- <label><?php//  echo get_the_term_list( get_the_ID(), 'category', '', '</label>' ,''); ?> </label>-->
                     <?php
                     $terms = wp_get_post_terms($post->ID, 'category');
                     $count = count($terms);
                        if ( $count > 0 ) {                            
                            foreach ( $terms as $term ) {
                                echo "<label><a href='/categories/".$term->slug ."'>" .$term->name . "</a></label>";
                            }
                        }
?>
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="content">
                    <?php echo get_sub_field('description'); ?>
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

 // echo "<h1>". get_field('add_script') . "</h1>";
 ?>
<?php 
$user_id = get_field( "select_user_list" );


 if( $user_id > 0){
?>
<div class="image-content-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3">
                <div class="col-md-2">
                    <div class="author-picture">
                    <?php // echo get_avatar( get_the_author_meta( $user_id), 32 ); ?>
                    <img src="<?php echo get_avatar_url( $user_id, array('size' => 450)); ?>
" alt="user picture">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h4><?php echo get_the_author_meta( 'display_name', $user_id ); ?></h4>
                    <b><p> <?php echo get_the_author_meta( 'add_designation', $user_id ); ?></p></b>
                    <p><?php echo get_the_author_meta('description', $user_id)?></p>
                    <a href="<?php echo get_the_author_meta( 'linkedin', $user_id ); ?>" class="nav-link px-2"><img src="https://dev-na2021.pantheonsite.io/wp-content/themes/netiapps-twentytwentyone/images/linkedin.png"></a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<?php  echo do_shortcode( '[latest_insights title="Related Insights" postid="'.get_the_ID().'" page="blog-details" ]' ); ?>

 <?php endwhile; // end of the loop. 

get_footer();
?>