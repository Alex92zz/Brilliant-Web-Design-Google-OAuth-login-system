<?php
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My content</title>



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

        <section id="my-business-info" style="margin-top: 200px; margin-bottom: 250px; margin-left: 200px;">

            <!-- Submit Content Form start -->
            <section class="pos-rel section-bg-dark-2" style="margin-top:100px; ">

                <div class="pos-rel padding-top-bottom-20">
                    <!-- pos-rel start -->
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="anim-text-double-fill invert" data-text="Submit ">Submit </span>
                        <span class="anim-text-double-fill tr-delay-02" data-text="Content">Content</span>
                    </h2><!-- title end -->

                    <!-- container form start -->
                    <div class="container small padding-top-10">
                        <form action="create.php" method="POST" class="flex-container padding-top-10">
                            <!-- column start -->
                            <div class="twelve-columns">
                                <div class="column-r-margin-10 padding-top-90">
                                    <input type="text" id="section_title" name="section_title" placeholder="Enter section title" required class="form-input padding-top-90 js-pointer-large">
                                </div>
                            </div><!-- column end -->


                            <!-- column start -->
                            <div class="twelve-columns">
                                <textarea type="text" id="section_text" name="section_text" placeholder="Enter section content" required class="form-input js-pointer-large"></textarea>

                                <input type="hidden" id="f_name" name="f_name" value="first name">
                                <input type="hidden" id="l_name" name="l_name" value="last name">
                                <input type="hidden" id="email" name="email" value="email ">
                            </div><!-- column end -->

                            <!-- column start -->
                            <div class="twelve-columns text-center padding-top-90">
                                <button type="submit" class="border-btn js-pointer-large">
                                    <span class="border-btn__inner">add content</span>
                                    <span class="border-btn__lines-1"></span>
                                    <span class="border-btn__lines-2"></span>
                                </button>
                            </div><!-- column end -->
                        </form><!-- flex-container end -->
                    </div><!-- container form end -->
                </div><!-- pos-rel start -->
            </section><!-- Submit Content form end -->



            <!-- pricing start -->
            <section class="pos-rel section-bg-dark-2" style="margin-top:200px;margin-bottom:300px;">
                <!-- pos-rel start -->

                <!-- title start -->
                <h2 class="headline-xxl text-center js-scrollanim">
                    <span class="anim-text-double-fill invert" data-text="Website">Website</span>
                    <span class="anim-text-double-fill tr-delay-02" data-text="Content">Content</span>
                </h2><!-- title end -->


                <div class="pos-rel padding-top-bottom-20">
                    <!-- container start -->
                    <div class="container small padding-top-bottom-60 flex-center-center ">
                        <!-- js-scrollanim start -->
                        <div class="js-scrollanim">
                            <h3 class="headline-xs hidden-box text-color-red padding-top-bottom-20" style="text-transform: uppercase;">
                                <span class="anim-slide tr-delay-02">business content title</span>
                            </h3>
                            <p class="body-text-m margin-top-20 anim-text-reveal tr-delay-04">business content text</p>
                        </div><!-- js-scrollanim end -->
                    </div><!-- container end -->

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
