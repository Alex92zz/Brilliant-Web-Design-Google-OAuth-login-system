<?php
    require_once('includes/config.php');
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My payments</title>



    <link href="assets/css/client-area.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#1b2a2f; height:100vh;" class=" cursor-anim-enable landing-page">

    <?php if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){
    
    $checkuser = new CheckUserSession;
    if($checkuser -> verifyUserLogin($_COOKIE['id'], $_COOKIE['sess'])){
    ?>

    <?php include 'components/client-area/top-nav-bar.php'; ?>

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <?php include 'components/client-area/vertical-nav.php'; ?>




        <section id="my-details" style="margin-top: 100px; margin-bottom: 250px; margin-left: 200px;">
            <!-- pricing start -->
            <section class="pos-rel section-bg-dark-2" style="margin-top:100px;">

                <!-- pos-rel start -->
                <div class="pos-rel padding-top-bottom-40">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="anim-text-double-fill invert" data-text="My">My</span>
                        <span class="anim-text-double-fill tr-delay-02" data-text="Package">Package</span>
                    </h2><!-- title end -->

                    <!-- container start -->
                    <div class="container small padding-top-30">

                        <!-- price start -->
                        <div class="padding-top-60 twelve-columns flex-align-center">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">My package:</h2>
                                    </div>
                                </div>
                                <div class="nine-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>package name... </h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60 twelve-columns flex-align-center">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Package cost:</h2>
                                    </div>
                                </div>
                                <div class="nine-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>package cost ...</h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>

                            </div>
                        </div><!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60 twelve-columns flex-align-center">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Paid so far:</h2>
                                    </div>
                                </div>
                                <div class="nine-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>paid so far </h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>

                            </div>
                        </div><!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60 twelve-columns flex-align-center">

                            <div class="flex-container border-box border-radius-10px hidden-box">

                                <div class="three-columns content-bg-red d-flex flex-center-center">
                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Pay with PayPal:</h2>
                                    </div>
                                </div>

                                <div class="nine-columns flex-align-center">
                                    <div class=" padding-top-bottom-20">


                                    </div>
                                </div>

                            </div>

                        </div><!-- price end -->
                    </div>
                </div>
            </section>



            <!-- pricing start -->
            <section id="pricing" class="pos-rel section-bg-dark-2">
                <!-- pos-rel start -->
                <div class="pos-rel padding-top-bottom-120">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="anim-text-double-fill invert" data-text="Pricing">Pricing</span>
                        <span class="anim-text-double-fill tr-delay-02" data-text="Table">Table</span>
                    </h2><!-- title end -->

                    <!-- flex-container start is like a row needed to align children -->
                    <div class="container flex-container flex-justify-center padding-top-30">
                        <!-- column start -->
                        <div class="three-columns column-50-100 padding-top-60">
                            <div class="column-l-r-margin-10 price-top-offset content-bg-dark-2 border-box border-radius-10px hidden-box">
                                <div class="text-center content-bg-red">
                                    <h3 class="subhead-m padding-top-bottom-20">Basic</h3>
                                </div>
                                <h4 class="text-center padding-top-20">
                                    <span class="headline-l"> &pound;375</span><br>
                                </h4>
                                <!-- accordion start -->
                                <div class="accordion accordion_underline js-accordion js-accordion-first-active margin-left-right-20 margin-top-bottom-50">

                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Website Design</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">1 - 3 pages </li>
                                                <li class="list__item check red">Responsive web design</li>
                                                <li class="list__item check red">Slideshow animation </li>
                                                <li class="list__item check red">Simple and clean website design</li>
                                                <li class="list__item check red">Secure contact form</li>
                                                <li class="list__item x opacity-05">Testimonial carousel</li>
                                                <li class="list__item x opacity-05">Modern animations</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Hosting &amp; Domain</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">12 months FREE hosting</li>
                                                <li class="list__item check red">FREE domain name .co.uk</li>
                                                <li class="list__item check red">FREE SSL Certificate included</li>
                                                <li class="list__item check red">1 business emails</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Search Engine Optimisation</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Page submission to Google &amp; Bing</li>
                                                <li class="list__item check red">Links to social media</li>
                                                <li class="list__item x opacity-05">Premium on-page SEO optimisation</li>
                                                <li class="list__item x opacity-05">Google Analytics</li>
                                                <li class="list__item x opacity-05">Google Maps Listing</li>
                                                <li class="list__item x opacity-05">First page of Google for local search</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Content &amp; Branding</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Main page 500 words</li>
                                                <li class="list__item check red">10 FREE pictures</li>
                                                <li class="list__item x opacity-05">Logo design</li>
                                                <li class="list__item x opacity-05">Social Covers with Logo</li>
                                                <li class="list__item x opacity-05">Email Signature with Logo</li>
                                                <li class="list__item x opacity-05">PDF invoice with Logo</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                </div><!-- accordion end -->

                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="three-columns column-50-100 padding-top-40">
                            <div class="column-l-r-margin-10 border-box content-bg-dark-2 border-radius-10px hidden-box">
                                <div class="text-center content-bg-red">
                                    <h3 class="subhead-s padding-top-bottom-20">Premium</h3>
                                </div>
                                <h4 class="text-center padding-top-20">
                                    <span class="headline-l"> &pound;575</span><br>
                                </h4>
                                <!-- accordion start -->
                                <div class="accordion accordion_underline js-accordion js-accordion-first-active margin-left-right-20 margin-top-bottom-50">
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Website Design</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">1 - 6 pages </li>
                                                <li class="list__item check red">Responsive web design</li>
                                                <li class="list__item check red">Slideshow animation </li>
                                                <li class="list__item check red">Eye-catching modern design</li>
                                                <li class="list__item check red">Secure Contact Form</li>
                                                <li class="list__item check red">Testimonial carousel</li>
                                                <li class="list__item check red">Modern animations</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Hosting &amp; Domain</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">12 months FREE hosting</li>
                                                <li class="list__item check red">FREE domain name .co.uk</li>
                                                <li class="list__item check red">FREE SSL Certificate included</li>
                                                <li class="list__item check red">Up to 10 business emails</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Search Engine Optimisation</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Page submission to Google &amp; Bing</li>
                                                <li class="list__item check red">Links to social media</li>
                                                <li class="list__item check red">Premium on-page SEO optimisation</li>
                                                <li class="list__item check red">Google Analytics</li>
                                                <li class="list__item check red">Google Maps Listing</li>
                                                <li class="list__item check red">First page of Google for local search</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Content &amp; Branding</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Main page 1000 words</li>
                                                <li class="list__item check red">20 FREE pictures</li>
                                                <li class="list__item check red">Logo design</li>
                                                <li class="list__item check red">Social Covers with Logo</li>
                                                <li class="list__item check red">Email Signature with Logo</li>
                                                <li class="list__item check red">PDF invoice with Logo</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->

                                </div><!-- accordion end -->

                            </div>
                        </div><!-- column end -->


                        <!-- column start -->
                        <div class="three-columns column-50-100 padding-top-60">
                            <div class="column-l-r-margin-10  content-bg-dark-2 price-top-offset border-box border-radius-10px hidden-box">
                                <div class="text-center content-bg-red">
                                    <h3 class="subhead-m padding-top-bottom-20">E-commerce</h3>
                                </div>
                                <h4 class="text-center padding-top-bottom-20">
                                    <span class="headline-l"> &pound;975</span><br>
                                </h4>
                                <!-- accordion start -->
                                <div class="accordion accordion_underline js-accordion js-accordion-first-active margin-left-right-20 margin-top-bottom-50">
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Web Design</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">1 - 3 pages </li>
                                                <li class="list__item check red">Up to 30 products </li>
                                                <li class="list__item check red">Responsive web design</li>
                                                <li class="list__item check red">Slideshow animation </li>
                                                <li class="list__item check red">Eye-catching modern design</li>
                                                <li class="list__item check red">Testimonial carousel</li>
                                                <li class="list__item check red">Modern animations</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Hosting &amp; Domain</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">24 months FREE hosting</li>
                                                <li class="list__item check red">FREE domain name .co.uk</li>
                                                <li class="list__item check red">FREE SSL Certificate included</li>
                                                <li class="list__item check red">Up to 10 business emails</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Search Engine Optimisation</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Page submission to Google &amp; Bing</li>
                                                <li class="list__item check red">Links to social media</li>
                                                <li class="list__item check red">Premium on-page SEO optimisation</li>
                                                <li class="list__item check red">Google Analytics</li>
                                                <li class="list__item check red">Listing Google Maps</li>
                                                <li class="list__item check red">Digital Visibility</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h6 class="accordion__btn-title headline-xxxxs">Content &amp; Branding</h6>
                                        </div>
                                        <div class="accordion__content js-accordion-content">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-top-10">
                                                <li class="list__item check red">Main page 1000 words</li>
                                                <li class="list__item check red">20 FREE pictures</li>
                                                <li class="list__item check red">Logo design</li>
                                                <li class="list__item check red">Social Covers with Logo</li>
                                                <li class="list__item check red">Email Signature with Logo</li>
                                                <li class="list__item check red">PDF invoice with Logo</li>
                                            </ul><!-- list end -->
                                        </div>
                                    </div><!-- accordion__tab end -->
                                </div><!-- accordion end -->

                            </div>
                        </div><!-- column end -->
                    </div> <!-- flex-container start is like a row needed to align children end -->


                    <!-- flex-container start is like a row needed to align children for checkout -->
                    <div class="container flex-container flex-justify-center padding-top-30">
                        <!-- Checkout start -->
                        <div class="ten-columns column-30-50 padding-top-60">

                            <div class="column-l-r-margin-10 content-bg-dark-2 price-top-offset border-box border-radius-10px hidden-box">
                                <div class="text-center content-bg-red">
                                    <h3 class="subhead-m padding-top-bottom-20">Checkout</h3>
                                </div>
                                <h4 style="padding:20px;">
                                    Order Summary
                                </h4>
                                <!-- accordion start -->
                                <div class="accordion accordion_underline js-accordion js-accordion-first-active margin-left-right-20 margin-top-bottom-50">

                                    <h5 style="padding:10px;">Package name: Premium </h5>
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h5>Package cost: £475 </h5>
                                        </div>

                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">
                                            <h5>SSL Certifiacte: Included </h5>
                                        </div>

                                    </div><!-- accordion__tab end -->
                                    <!-- accordion__tab start -->
                                    <div class="accordion__tab js-accordion-tab">
                                        <div class="accordion__btn js-accordion-btn js-pointer-large">

                                        </div>


                                        <div style="text-align: center;">
                                            <div style="margin-bottom: 0.9rem;">
                                                <p style="margin-bottom: 0.5rem;">Website Design &amp; Development</p>
                                                <select class="js-pointer-large" id="item-options" style="padding:10px;">
                                                    <option value="Basic" price="375">Basic - 375 GBP</option>
                                                    <option value="Premium" price="575">Premium - 575 GBP</option>
                                                    <option value="Gold" price="775">Gold - 775 GBP</option>
                                                </select>
                                                <select style="visibility: hidden" id="quantitySelect"></select>
                                            </div>
                                            <div class="js-pointer-large" id="paypal-button-container"></div>
                                        </div>


                                    </div>
                                </div><!-- column end -->

                            </div><!-- flex-container end -->
                        </div><!-- Checkout end -->
                    </div> <!-- flex-container start is like a row needed to align children for checkout -->


                </div><!-- pos-rel end -->
            </section><!-- pricing end -->
        </section><!-- my details container end -->
    </main>
    <?php
    
    } else{
         header('Location: logout.php');
                exit();
    }} else{ 
                header('Location: logout.php');
                exit();  }?>

    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/refresh-page.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170720387-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-170720387-1');

    </script>
</body>

</html>
