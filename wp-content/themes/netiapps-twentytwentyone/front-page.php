<?php get_header(); ?>
<?php
while (have_posts()):
    the_post();
    ?>
   
    <div class="section hero-section d-flex justify-content-center align-items-center" id="hero-section">


        <?php
        if (have_rows('hero')):
        while (have_rows('hero')) :
        the_row();
        $video = get_sub_field('video');
        $logo_dark = get_sub_field('logo_dark');
        echo $logo_dark['url'];
        if ($video):
            // Add autoplay functionality to the video code
            if (preg_match('/src="(.+?)"/', $video, $matches)):
                $src = $matches[1];
            endif;
        endif;
        ?>
        <video width="100%" height="100%" autoplay loop muted style="object-fit:cover">
            <source src="<?php echo $src; ?>" type="video/mp4"/>
        </video>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-slider owl-carousel">
                        <?php if (have_rows('title_slider')):
                            while (have_rows('title_slider')) : the_row();
                                ?>
                                <div>
                                    <h1 class="display-5 text-white hero-title">
                                        <?php echo get_sub_field('slider_title'); ?>
                                    </h1>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="banner_logo">
                       <?php 
                             if (have_rows('banner_logo')):
                                while (have_rows('banner_logo')) : the_row();
                                $image = get_sub_field('logo');
                       ?>
                            <img alt="<?php echo $image['alt'];?>" src="<?php echo $image['url']; ?>" />
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


    <div class="dd-wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="sidebar-list">
                    <ul class="sidebar-list-menu">
                        <?php
                        $colorCodes = ['#2f2d76', '#1a1b4b', '#2f2d76', '#1a1b4b','#2f2d76', '#1a1b4b'];
                        if (have_rows('key_offering')):
                        while (have_rows('key_offering')) :
                        the_row();
                        ?>
                        <div class="service-header">
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                        <span class="sidebar-list-menu-active-bar"></span>
                        <?php
                        // Loop over sub repeater rows.
                        if (have_rows('services')):
                            $i = 1;
                            while (have_rows('services')) : the_row();
                                if ($i == 1):
                                    $active = 'active';
                                else:
                                    $active = '';
                                endif;
                                ?>
                                <li><a href="#content_<?php echo $i; ?>" class="<?php echo $active; ?>"
                                       dd-active-tab="1"
                                       dd-sidebar-tab="#2f2d76"><?php echo get_sub_field('title'); ?> </a>
                                </li>
                                <?php
                                $i++;
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content part -->
        <div class="content">
            <?php
            if (have_rows('service-details')):
                $i = 1;
                while (have_rows('service-details')) : the_row();
                    $image = get_sub_field('logo');
                    ?>
                    <div id="content_<?php echo $i; ?>" class="content-container">
                      
                           <div class="content--center">
                                <div class="service-block d-flex align-items-end justify-content-start ">
                                    <div class="image-content">
                                        
                                                <img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"/>
                                                <p> <?php echo get_sub_field('description'); ?></p>
                                                <a href="<?php echo get_sub_field('link');?>" > Read more </a>
                                        
                                    </div>
                                </div>
                            </div> 
                      
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;

            endwhile;
            endif;
            ?>

        </div>
    </div>

    <div class="section our-strength px-5" id="our-strength">
        <div class="container px-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3>Our Strength</h3>
                    </div>
                    <div class="strength-counter border-bottom">
                        <?php
                        if (have_rows('our_strength')):

                        while (have_rows('our_strength')) :
                        the_row();
                        ?>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="counter">
                                    <?php while (have_rows('years_in_business')) :the_row(); ?>
                                            <h3>
                                                <label ><span class="counter_val"><?php echo get_sub_field('value'); ?></span><?php echo get_sub_field('symbol'); ?></label>
                                            </h3>
                                            <p><?php echo get_sub_field('label'); ?></p>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counter">
                                    <?php while (have_rows('project_delivered')) :the_row(); ?>
                                            <h3>
                                                <label><span class="counter_val"><?php echo get_sub_field('value'); ?></span><?php echo get_sub_field('symbol'); ?></label>
                                            </h3>
                                            <p><?php echo get_sub_field('label'); ?></p>
                                    <?php endwhile; ?>
                                   
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counter">
                                       <?php while (have_rows('client_retention_rate')) :the_row(); ?>
                                            <h3>
                                            <label><span class="counter_val"><?php echo get_sub_field('value'); ?></span><?php echo get_sub_field('symbol'); ?></label>
                                             </h3>
                                            <p><?php echo get_sub_field('label'); ?></p>
                                       <?php endwhile; ?>
                                  
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="counter">
                                       <?php while (have_rows('quality_of_delivered')) :the_row(); ?>
                                            <h3>
                                            <label><span class="counter_val"><?php echo get_sub_field('value'); ?></span><?php echo get_sub_field('symbol'); ?></label>
                                             </h3>
                                            <p><?php echo get_sub_field('label'); ?></p>
                                       <?php endwhile; ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Partners</h3>
                    </div>
                    <div class="partner pt-2">
                        <div class="row justify-content-start align-items-center text-center ">
                            <?php if (have_rows('cloud_partner')):
                                while (have_rows('cloud_partner')) : the_row();
                                    $image = get_sub_field('logo');
                                    ?>
                                    <div class="col-xs-3 col-md-2  pt-3 pb-3 text-center">
                                        <img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"/>
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
    </div>

    <div class="section case-container" id="case-study">
        <?php
        if (have_rows('case_study')):
            while (have_rows('case_study')) : the_row();
                ?>
                <div class="casestudy-section">
                    <div class="container">
                        <div class="section-title">
                            <h3> <?php echo get_sub_field('title') ?> </h3>
                            <h2 class="w-50 mx-auto"><?php echo get_sub_field('description'); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="casestudy-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="slider">
                                    <div class="owl-carousel">
                                        <?php
                                        if (have_rows('case_study_slider')):
                                            while (have_rows('case_study_slider')) : the_row();
                                                $image = get_sub_field('image')
                                                ?>
                                                <div>
                                                    <div class="slider-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="casestudy-title">
                                                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                                                </div>
                                                                <div class="casestudy-button">
                                                                    <a href="<?php echo get_sub_field('readmore_link'); ?>"
                                                                       class="btn btn-link">Read Casestudy</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="img"><img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"></div>
                                                </div>
                                            <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>

    <div class="section testimonial-section" id="testimonial-section">
        <div class="container">
            <?php
            if (have_rows('testimonials')):
                while (have_rows('testimonials')) : the_row();
                    ?>
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <div class="section-title">
                                <h3>Testimonial</h3>
                                <h2><?php echo get_sub_field('description'); ?> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <div class="testi owl-carousel">
                                <?php
                                if (have_rows('testimonial_list')):
                                    while (have_rows('testimonial_list')) : the_row();
                                        ?>
                                        <div>
                                            <div class="item">
                                                <div class="testimonial-block">
                                                    <div class="quote"><img
                                                                src="<?php echo get_template_directory_uri() . '/images/quote.png'; ?>"/>
                                                    </div>
                                                    <div class="test-content">
                                                        <?php echo get_sub_field('content'); ?>
                                                    </div>
                                                    <div class="author"> <?php echo get_sub_field('author'); ?></div>
                                                    <div class="position"><?php echo get_sub_field('position'); ?></div>
                                                    <div class="company"><?php echo get_sub_field('company'); ?></div>
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


    <div class="section journey" id="journey">

        <?php
        if (have_rows('milestone_slider')):
            while (have_rows('milestone_slider')) : the_row();
                ?>
                <div class="row">
                    <div class="container">
                        <div class="section-title">
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <h2 class="w-50 mx-auto"><?php echo get_sub_field('description'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="journey-slide owl-carousel">
                    <?php
                    if (have_rows('milestone_list')):
                        while (have_rows('milestone_list')) : the_row();
                            ?>
                            <div>
                                <div class="journey-block">
                                    <div class="year"><?php echo get_sub_field('title'); ?></div>
                                    <div class="content"><?php echo get_sub_field('content'); ?></div>
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
    <?php  echo do_shortcode( '[latest_insights title="Latest Insights" postid="" page="home"]' ); ?>
<?php

endwhile;
?>
    </main>

<?php get_footer(); ?>