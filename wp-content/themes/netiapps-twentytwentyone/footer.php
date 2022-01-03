

<footer class="footer-section">
    <?php 
       if( get_post_type() != "contact-us"):
    ?>
    <div class="footer-top">
        <div class="container">
            <div class="get-in">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-9">
                        <div class="title">
                            <?php
                                $footer_get_in_touch = get_field('footer_get_in_touch_section', 'option'); ?>
                            <h2><?php echo $footer_get_in_touch['intro'];?></h2>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="btn btn-light btn-block"><a target="<?php echo $footer_get_in_touch['link']['target'];?>" href="<?php echo $footer_get_in_touch['link']['url'];?>"><?php echo $footer_get_in_touch['link']['title'];?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="footer-bottom">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-9">
                    <h3>Solution and Services</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'solution-service-menu' ) ); ?>
                </div>
                <div class="col-md-3">
                    <h3>Company</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'company-menu' ) ); ?>
                </div>
            </div>
            <div class="footer-extra">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo get_theme_file_uri('images/dmca-badge-w100-1x1-05.png') ?>">
                    </div>
                    <div class="col-md-6 text-center">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
                        <p>© <?php echo date('Y')?> NetiApps. All Rights Reserved</p>
                    </div>
                    <div class="col-md-3">

<?php
// Option value for the social media links of footer sections...
if ( have_rows( 'footer_social_media_links', 'option' ) ) : ?>

        <?php while ( have_rows( 'footer_social_media_links', 'option' ) ) : the_row();

            // Services Sub Repeater.
            if ( have_rows( 'social_media' ) ) : ?>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-end mb-md-0">

                   <?php
                   while ( have_rows( 'social_media' ) ) : the_row();

                       $image = get_sub_field( 'image' );
                       $link = get_sub_field( 'link' );
                   ?>
                    <li><a target="_blank" href="<?php echo esc_html( $link ); ?>" class="nav-link px-2"><img src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>"></a></li>

                   <?php endwhile; ?> 
            </ul>

               <?php endif; ?>
        <?php endwhile; ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>