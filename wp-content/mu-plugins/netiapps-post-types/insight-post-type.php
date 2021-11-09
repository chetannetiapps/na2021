<?php

function setup_insight_post_type() {
	register_post_type("insight", [
		"label" => "Insight Overview",
		"labels" => [
			"name" => "Insight Overview",
			"singular_name" => "Insight",
			"add_new_item" => "Add new Insight",
			"edit_item" => "Edit Insight",
			"view_item" => "View Insight",
			"view_items" => "View Insight",
			"search_items" => "Search Insight",
			"not_found" => "No Insight found",
			"all_items" => "All Insights",
			"archives" => "Insights archives"
		],
		"description" => "Insights provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-align-left",
		"rewrite" => [
			"slug" => "insight"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_insight_post_type");

function latest_insight_shortcode( $params='') {
	global $wp;
	$meta_query= null;
	$cat_condition = null;
	
	$baground_class = 'image-content-section';
	$args = [];
	if(isset($params['postid']) !=''){
		$category_detail=get_the_category( $params['postid'] );
        if(isset($category_detail[0]->term_id) !='' ){
			$args = array(
						'post_type' => 'blog-detail',
						'posts_per_page' => (isset($params['page']) && $params['page'] == 'insights') ? '' : 3,
						'tax_query' => array(
												array(
													'taxonomy' => 'category',
													'field'    => 'term_id',
													'terms'    => $category_detail[0]->term_id,
													),
							           ),
						'post__not_in' => array($params['postid']),
						'order' => 'DESC',
						
			);
			
        }else{
			$args = array(
				'post_type' => 'blog-detail',
				'posts_per_page' => 3,
				'order' => 'DESC',
				
			);
		}
	}

	if(isset($params['cat_id']) != ''){
		$args = array(
			       'post_type' => 'blog-detail',
		           'posts_per_page' => (isset($params['page']) == 'insights') ? '' : 3,
				   'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $params['cat_id'],
						),
		            ),
					'order' => 'DESC',
	    );
	}
	
	if(isset($params['page']) && $params['page'] == 'home'){
		$baground_class ='';
		$args = array(
			'post_type' => 'blog-detail',
			'posts_per_page' => 3,
			'meta_query' => array(
				'relation'		=> 'AND',
					array(
						'key'	 	=> 'blog_detail_Block_0_add_this_blog_to_home_page',
						'value'	  	=> '1',
						'compare' 	=> '=',
					)
					),
					'order' => 'DESC',
		);
	}	
	if(isset($params['page']) && $params['page'] == 'insights'){
		$args = array(
			'post_type' => 'blog-detail',
			'order' => 'DESC',
			
		);
	}	
	if(isset($params['page']) && $params['page'] == 'blog-details'){
		$baground_class = '';
	}
	
	
	    $insight_query = new WP_Query($args);

	    global $post;
	    $output = '';
    	$output .='<div class="section insight-section '.$baground_class.'" id="insight-section">
						<div class="container">
									<div class="row">
										<div class="sub-title"><h3>'.$params['title'].'</h3></div>
									</div>
							
									<div class="row">';
					if($insight_query->have_posts()):
						while ($insight_query->have_posts()) : $insight_query->the_post();
				          $thumbnail_id = get_post_thumbnail_id( $post->ID );
                       $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);			
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
						$view_link =  get_permalink(  $post->ID, false );
						$output .='<div class="col-lg-4">
										<div class="insight-block">
										<a href="'.$view_link.'" /><div class="insight-image">
												<img alt="'.$alt.'" src="'.$url.'">
											</div>';

										$output .='<div class="insight-content">
												'.get_the_title().' 
											</div>
											</a> 
										</div>
									</div>';
					
					   endwhile;
					endif;
					$output .= '</div>
					</div>
				</div>';
	        
 	  wp_reset_postdata();
	  return $output;
  }
  add_shortcode( 'latest_insights', 'latest_insight_shortcode' ); 