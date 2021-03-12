<?php
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new account</title>
    
    <link href="assets/css/client-area.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body style=" height:100vh;" class=" cursor-anim-enable landing-page">


    <?php include 'components/nav-bar.php'; ?>

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">

        <div>

            <!-- pos-rel start -->
            <section id="up" class="pos-rel js-parallax-bg" style="background-image:url(assets/images/contact-us/header/header-1.jpg)">
                <!-- bg-overlay -->
                <div class="bg-overlay-black"></div>
                <!-- pos-rel start -->
                <div class="pos-rel flex-min-height-100vh">
                    <div class="padding-top-bottom-120 container small after-preloader-anim">


                        <form class="section-bg-dark-2 form-log-in" action='' method="POST">
                            <img src="assets/images/global-images/logo/logo-white.svg" alt="Brilliant Web Design Logo" class="js-pointer-large" style="max-width: 250px; margin: 0 auto; display: table;" />
                            <p id="incorrect-password">The email or password you entered<br /> is not correct, please try again.</p>
                            <div class="form-group-log-in">
                                <input class="js-pointer-large" required type="text" placeholder="Enter first name" style="color:white; padding-left:8px;">
                                <br />
                                <input class="js-pointer-large" required type="text" placeholder="Enter last name" style="color:white; padding-left:8px;">
                                <br />
                                <input class="js-pointer-large" required type="email" placeholder="Enter email address" style="color:white; padding-left:8px;">
                                <br />
                                <input class="js-pointer-large" required type="password" placeholder="Enter your password" style="color:white; padding-left:8px;">
                            </div>

                            <br />

                            <br />
                            <div>
                                
                                <?php 
                                    $test1 = new UsersView();
                                    echo $test1->showUsers("Alex");
                                
                                    $user1 = new UsersContr();
                                    $user1->createUser("Hello","Is working");
                                ?>
                            
                            
                                <br />
                                <a class="js-pointer-large" id="sign-in-button" onClick="showDiv();">
                                    Submit
                                </a>
                            </div>

                        </form>

                    </div>
                </div><!-- pos-rel end -->
            </section><!-- pos-rel end -->





        </div>

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
</body>

</html>
