<?php
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My details</title>

    <link href="assets/css/client-area.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#1b2a2f; height:100vh;" class="preloader cursor-anim-enable landing-page">


    <?php if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){
    $checkuser = new CheckUserSession;
    if($checkuser -> verifyUserLogin($_COOKIE['id'], $_COOKIE['sess'])){
        
        echo "<script>console.log(JSON.parse('" . json_encode($checkuser) . "'));</script>";
        $user = new GetUserInfo;
        $user -> getUserInfoDetails($_COOKIE['id'], $_COOKIE['sess']);
        if($user){
             echo "<script>console.log(JSON.parse('" . json_encode($user) . "'));</script>";
        } else{
            echo "<script>console.log('something went wrong' );</script>";
        }
        
        
    ?>

    <?php include 'components/client-area/top-nav-bar.php'; ?>


    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">


        <?php include 'components/client-area/vertical-nav.php'; ?>

        <section id="my-details" style="margin-top: 100px; margin-bottom: 250px; margin-left: 200px;">

            <!-- pricing start -->
            <section class="pos-rel section-bg-dark-2">

                <!-- pos-rel start -->
                <div class="pos-rel padding-top-bottom-40">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="anim-text-double-fill invert" data-text="My">My</span>
                        <span class="anim-text-double-fill tr-delay-02" data-text="Details">Details</span>
                    </h2><!-- title end -->

                    <!-- container start -->
                    <div class="container small padding-top-30">

                        <!-- price start -->
                        <div class="padding-top-60">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">First name:</h2>
                                    </div>
                                </div>
                                <div class="six-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>First Name</h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Last name:</h2>
                                    </div>
                                </div>
                                <div class="six-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>Last name </h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Email address:</h2>
                                    </div>
                                </div>
                                <div class="six-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>Email address needed</h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- price end -->

                        <!-- price start -->
                        <div class="padding-top-60">
                            <div class="flex-container border-box border-radius-10px hidden-box">
                                <div class="three-columns content-bg-red d-flex flex-center-center">

                                    <div class="text-center padding-top-bottom-20">
                                        <h2 class="subhead-m">Contact number:</h2>
                                    </div>
                                </div>
                                <div class="six-columns d-flex flex-align-center">
                                    <div class="width-100perc padding-top-bottom-20">
                                        <!-- list start -->
                                        <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                            <li class="list__item">
                                                <h3>Contact Number</h3>
                                            </li>
                                        </ul><!-- list end -->
                                    </div>
                                </div>

                            </div>
                        </div><!-- price end -->



                        <form action="add-contact-number.php" method="POST">
                            <!-- price start -->
                            <div class="padding-top-60">
                                <div class="flex-container border-box border-radius-10px hidden-box">
                                    <div class="three-columns content-bg-red d-flex flex-center-center">

                                        <div class="text-center padding-top-bottom-20">
                                            <h2 class="subhead-m">Update contact number:</h2>
                                        </div>
                                    </div>

                                    <div class="six-columns d-flex flex-align-center">
                                        <div class="width-100perc padding-top-bottom-20">
                                            <!-- list start -->
                                            <ul class="list list_center subhead-xxs text-color-b0b0b0 margin-left-right-20">
                                                <li class="list__item">
                                                    <input id="contact_number" name="contact_number" style="height:40px; width:70%;font-family: 'Montserrat', sans-serif; font-weight: 700; color:white;" class="js-pointer-large" required type="text" placeholder="Enter your contact number" />
                                                    <input type="hidden" id="email" name="email" value="enter email">
                                                </li>

                                            </ul><!-- list end -->
                                        </div>
                                    </div>

                                    <div class="three-columns d-flex flex-center-center">
                                        <div class="price-btn-offset text-center">
                                            <button type="submit" class="skew-btn js-pointer-large">
                                                <span class="skew-btn__box">
                                                    <span class="skew-btn__content">Update number</span>
                                                    <span class="skew-btn__arrow"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price end -->
                        </form>
                    </div>
                </div>
            </section>
        </section>

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
