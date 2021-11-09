
<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5G5MSPH');</script>
<!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-35756041-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-35756041-1');
    </scr -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true);  ?></title>
    <?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1040572013412892');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1040572013412892&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php the_field('add_script'); ?>

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G5MSPH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="loader-wrapper">
     <div class="loader">
         <img src="<?php echo get_theme_file_uri('images/preloader.png') ?>" alt="">
     </div>
</div>
<?php

while (have_posts()):
    the_post();
    ?>
<div class="top-header">
    <div class="container">
        <header class="top-menu d-flex flex-wrap py-3 align-items-center justify-content-between">
            <?php
                    $header_logo = get_field('header_logo', 'option');
                    
            ?>
                    <a href="/" class="d-flex logo align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <img class="logo-dark" src="<?php echo $header_logo['logo_dark']['url']; ?>" alt="logo" />
                        <img class="logo-white"  src="<?php echo $header_logo['logo_white']['url']; ?>" alt="logo" />
                    </a>

            <?php 
                  //  endwhile;
                 //endif;
            ?>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

            <div class="text-end social-media">
               <div class="call pr-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   <img src="<?php echo get_theme_file_uri('images/telephone-fill.svg') ?>">
               </div>
                <div class="btn btn-primary"><a target="<?php echo $header_logo['header_get_in_touch']['target'];?>" href="<?php echo $header_logo['header_get_in_touch']['url']; ?>"><?php echo $header_logo['header_get_in_touch']['title']; ?></a> </div>
            </div>
        </header>
    </div>
</div>

<div class="modal contact-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="left-content">
                           <h2>Wanna Talk? We would love to hear.</h2>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="right-content">
                          <div>
                              <div class="number"><i class="bi bi-telephone-fill"></i>
                                   +91 80 41733406</div>
                              <div class="number"><i class="bi bi-telephone-fill"></i>
                                   +91 80 41733608</div>
                              <div class="skype"><i class="bi bi-skype"></i> Skype.netiapps</div>
                              <div class="email"><a href="mailto:info@netiapps.com"><i class="bi bi-envelope-fill"></i> info@netiapps.com</a></div>
                            <div class="row">
                                           <div class="col-md-12">

<?php
// Option value for the social media links of footer sections...
if ( have_rows( 'footer_social_media_links', 'option' ) ) : ?>

        <?php while ( have_rows( 'footer_social_media_links', 'option' ) ) : the_row();

            // Services Sub Repeater.
            if ( have_rows( 'social_media' ) ) : ?>

            <ul class="nav col-12 col-md-auto mb-2 mb-md-0">

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
               </div>
            </div>
        </div>
    </div>
</div>
<?php
   endwhile;
?>