<?php
get_header();

while(have_posts()) {
	the_post();

	?>
<!--	copy paste-->
<?php

	the_content();
}

?>

<div class="inner-hero-section d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb text-white">Home / Solutions / Web Application Development</div>
                <h1 class="display-5 text-white hero-title">Thoughtful digital experiences that work.</h1>
            </div>
        </div>

    </div>
</div>

<div class="intro-text">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="intro-text text-center">
                    <h4>We combine our concrete business domain experience, technical expertise, and quality-driven delivery model to offer progressive, end-to-end web applications. We follow a highly structured methodology tailored to meet international standards and client expectations. Our expert teams ensure proper risk management, seamless workflow, and deadline-oriented development.</h4>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="service-list">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="row">
            <div class="col-md-6 align-items-end">
                <div class="service-card">
                    <div class="title"><h3>Laravel Development</h3></div>
                    <div class="description"><p>We have been creating advanced web applications since 2006. We offer full-cycle enterprise web application development solutions to clients across the globe. NetiApps has a team of experienced and dedicated business analysts, project managers, developers who work on complex business logic and projects that are associated with large volumes of data and processing.t</p></div>
                    <div class="link"><a href="#"><img src="images/arrow-right-circle-fill.svg"></a></div>
                </div>
                <div class="service-card">
                    <div class="title"><h3>Laravel Development</h3></div>
                    <div class="description"><p>We have been creating advanced web applications since 2006. We offer full-cycle enterprise web application development solutions to clients across the globe. NetiApps has a team of experienced and dedicated business analysts, project managers, developers who work on complex business logic and projects that are associated with large volumes of data and processing.t</p></div>
                    <div class="link"><a href="#"><img src="images/arrow-right-circle-fill.svg"></a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card push-top">
                    <div class="title"><h3>Laravel Development</h3></div>
                    <div class="description"><p>We have been creating advanced web applications since 2006. We offer full-cycle enterprise web application development solutions to clients across the globe. NetiApps has a team of experienced and dedicated business analysts, project managers, developers who work on complex business logic and projects that are associated with large volumes of data and processing.t</p></div>
                    <div class="link"><a href="#"><img src="images/arrow-right-circle-fill.svg"></a></div>
                </div>
                <div class="service-card">
                    <div class="title"><h3>Laravel Development</h3></div>
                    <div class="description"><p>We have been creating advanced web applications since 2006. We offer full-cycle enterprise web application development solutions to clients across the globe. NetiApps has a team of experienced and dedicated business analysts, project managers, developers who work on complex business logic and projects that are associated with large volumes of data and processing.t</p></div>
                    <div class="link"><a href="#"><img src="images/arrow-right-circle-fill.svg"></a></div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>




<div class="other-service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h4>Other Service</h4>
                </div>
                <div class="other-service-list">
                    <ul>
                        <li><a href="#" >Web Development</a></li>
                        <li><a href="#" >Mobile UI/UX</a></li>
                        <li><a href="#" >Web Development</a></li>
                        <li><a href="#" >Web Development</a></li>
                        <li><a href="#" >Web Development</a></li>
                        <li><a href="#" >Web Development</a></li>
                        <li><a href="#" >Web Development</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="insight-section">
    <div class="container">
        <div class="row">
            <div class="sub-title"><h3>Insight</h3></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="insight-block">
                    <div class="insight-image">
                        <img src="../images/insight.png">
                    </div>
                    <div class="insight-date">06/12/2021</div>
                    <div class="insight-content">
                        Time to Create the XFramework Branding for the Hero
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="insight-block">
                    <div class="insight-image">
                        <img src="../images/insight.png">
                    </div>
                    <div class="insight-date">06/12/2021</div>
                    <div class="insight-content">
                        Time to Create the XFramework Branding for the Hero
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="insight-block">
                    <div class="insight-image">
                        <img src="../images/insight.png">
                    </div>
                    <div class="insight-date">06/12/2021</div>
                    <div class="insight-content">
                        Time to Create the XFramework Branding for the Hero
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>