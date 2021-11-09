<?php

 get_header();
 global $post;
 while ( have_posts() ) :
    the_post(); 
    // check if the flexible content field has rows of data
    if( have_rows('insight_hero_block') ):
    
        while ( have_rows('insight_hero_block') ) : the_row();
            if( get_row_layout() == 'hero_block' ):
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

                <?php 
                  
                  $categories = get_categories(
                    array(
                        'term_id' => array(
                            'value' => 1,
                            'compare' 	=> '!='
                        ),
                        
                    ) 
                  );
                 
                ?>
                

                <div class="other-service">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title text-center">
                                    <h4>Insights Category</h4>
                                </div>
                                <div class="other-service-list">
                                            <div class="other-service-list button-group filters-button-group">
                                               <button class="button is-checked" data-filter="*">All</button>
                                            <?php
                                                     $uncategorized_id = get_cat_ID( 'Uncategorized' );
                                                     foreach($categories as $key =>  $category):
                                                        if ( $category->cat_ID == $uncategorized_id ) {
                                                            continue;
                                                        }
                                           ?>
                                                <button class="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
                                                <?php
                                                     endforeach;
                                                ?>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    $args = array(
                        'post_type' => 'blog-detail',
                         'posts_per_page' => '-1',
                        'order' => 'DESC',
                        
                    );
                    $insight_query = new WP_Query($args);
                    global $post;
                ?>
                <div class="section insight-section" id="insight-section">
						<div class="container">
									<div class="row grid">
                                        <?php if($insight_query->have_posts()):
                                            while ($insight_query->have_posts()) : $insight_query->the_post();
                                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                            $view_link =  get_permalink(  $post->ID, false ); 
                                            $category =  get_the_category( $post->ID );
                                            $categoryName ='';
                                            if($category){
                                                $categoryName =$category[0]->name;
                                                $categorySlug =$category[0]->slug;
                                            }
                                            ?>
                                                        <div class="col-lg-4 element-item <?php echo $categorySlug; ?> ">
                                                            <div class="insight-block">
                                                                <div class="insight-image"> 
                                                                    <img src="<?php echo $url; ?>">
                                                                </div>
                                                                <div class="insight-date">
                                                                <?php echo get_the_date('d M Y'); ?>
                                                                </div>
                                                                <div class="insight-content">
                                                                    <a href="<?php echo $view_link; ?>" /> <?php echo get_the_title(); ?></a> 
                                                                </div>
                                                            </div>
                                                        </div>
                                        
                                    <?php endwhile;
                                        endif; ?>
                                 </div>
					   </div>
				</div>

    <?php 
        endif; 
        endwhile;
    endif;

    ?>
        
<?php 
    endwhile;
    get_footer();
?>