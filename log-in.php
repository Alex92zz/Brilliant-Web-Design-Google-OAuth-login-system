<?php
    require_once('includes/config.php');
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to my app</title>

    <link href="assets/css/client-area.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body style="background-color:#1b2a2f; height:100vh;" class=" cursor-anim-enable landing-page">


    <?php include 'components/client-area/top-nav-bar.php'; ?>


    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">

        <!-- pos-rel start -->
        <section id="up" class="pos-rel js-parallax-bg" style="background-image:url(assets/images/contact-us/header/header-1.jpg); max-height:100vh;">
            <!-- bg-overlay -->
            <div class="bg-overlay-black"></div>
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <div class="padding-top-bottom-120 container small after-preloader-anim">


                    <form class="section-bg-dark-2 form-log-in" action='' method="POST">
                        <img src="assets/images/global-images/logo/logo-white.svg" alt="Brilliant Web Design Logo" class="js-pointer-large" style="max-width: 250px; margin: 0 auto; display: table;" />
                        <p id="incorrect-password">The email or password you entered<br /> is not correct, please try again.</p>
                        <div class="form-group-log-in">
                            <input class="js-pointer-large"  required type="email" placeholder="Enter email" style="color:white; padding-left:8px;">
                            <br />
                            <input class="js-pointer-large" required type="password" placeholder="Enter your password" style="color:white; padding-left:8px;">
                        </div>

                        <br />

                        <br />
                        <div>


                            <br />
                            <a class="js-pointer-large" id="sign-in-button" onClick="showDiv();">
                                Sign in
                            </a>
                        </div>



                        <div class="google-btn js-pointer-large margin-top-20" onclick="window.location = '<?php echo $login_url; ?>'">
                            <div class="google-icon-wrapper">
                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                            </div>
                            <div class="div-text">
                                <p class="btn-text">Sign in with Google</p>
                            </div>
                        </div>

                    </form>

                </div>
            </div><!-- pos-rel end -->
        </section><!-- pos-rel end -->

    </main>
    <!-- scripts -->



    <script>
        const showDiv = async () => {
            setTimeout(function() {
                document.getElementById('incorrect-password').style.display = "block"
            }, 1000);
        }

    </script>
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
