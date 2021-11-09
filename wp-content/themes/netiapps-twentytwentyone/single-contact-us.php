<?php
get_header();
while ( have_posts() ) :
    the_post(); 
?>

<div class="sections">

            <?php
              if( have_rows('contact_us_hero_section') ):
    
                while ( have_rows('contact_us_hero_section') ) : the_row();
                    if( get_row_layout() == 'hero_block' ):
                        $background_image = get_sub_field('banner');
                        $title = get_sub_field('title');
            ?>
            <div class="inner-hero-section d-flex justify-content-center align-items-center">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="breadcrumb text-white"><span><?php echo get_the_title();?></span></div> 
                                <h1 class="display-5 text-white hero-title"><?php echo $title; ?></h1>   
                                <p> <?php echo get_sub_field('banner_content'); ?> </p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-contain-background">
                            <img alt="<?php echo $background_image['alt'];?>" src="<?php echo $background_image['url'];?>" />
                    </div>
            </div>
               <?php 
                      endif;
               ?>

            <div class="container pt-lg-5 pt-3 contact-us-div">
                <div class="row pt-lg-5">
                    <div class="col-md-6 col-sm-12">
                         
                            <?php 
                                if( have_rows('office_details') ):
    
                                    while ( have_rows('office_details') ) : the_row();
                            ?>
                       
                            <div class="address">
                                        
                                        <h4><?php echo get_sub_field('office_title');?></h4>
                                        <div class="col-md-6">
                                            <p>
                                                <?php echo get_sub_field('office_address');?>
                                            </p>
                                            <p>
                                                <img alt="phone-call" width="20px" src="<?php echo get_template_directory_uri().'/images/phone-call.png';?>"> <?php echo get_sub_field('office_phone'); ?> <br>
                                                <img alt="envelope" width="20px" src="<?php echo get_template_directory_uri().'/images/envelope.png';?>"> <a href="mailto:info@netiapps.com" style="color: black;"> <?php echo get_sub_field('office_email'); ?> </a>      
                                            </p>
                                        </div>
                            <?php 
                                 endwhile;
                                endif;
                               
                            ?>
                            
                            <div class="px-4  pt-4 px-lg-0 map-section">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2266940106624!2d77.64517131466206!3d13.021230990823323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae165693ffffc9%3A0x1a37d169cc8d2c28!2sNetiApps+Software!5e0!3m2!1sen!2sin!4v1478674910997" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>            </div>
                            </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        
                       <?php 
                                if( have_rows('contact_form_details') ):
                                    
                                    while ( have_rows('contact_form_details') ) : the_row();
                       ?>

                        <div class="contact-us-form px-lg-5">
                            <h1> <?php echo get_sub_field('form_title');?> </h1>
                            <p>  <?php echo get_sub_field('form_description');?> </p>
                            <div>
                                 <?php 
                                //  echo do_shortcode('[hubspot type=form portal=24878914 id=f0995452-b708-4f83-947c-45d7e078d4cd]');
                                 echo do_shortcode('[hubspot type=form portal=24878914 id=f0995452-b708-4f83-947c-45d7e078d4cd]');
                                 ?>                 
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

<?php
 endwhile;
get_footer();
?>
