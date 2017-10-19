<!DOCTYPE html>
<?php
$lang_supported = array("it", "eng");
$lang_default = "it";
$lang_user = filter_input(INPUT_GET, 'lang_user');
if (!isset($lang_user)) {
    $lang_user = $lang_default;
}
include './language/' . $lang_user . '.php';
?>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- TITLE OF SITE -->
        <title> angeloparziale.it </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Curriculum di Angelo Parziale (AParzi)." />
        <meta name="keywords" content="cv, resume, portfolio, materialize, onepage, personal, blog" />
        <meta name="author" content="Angelo Parziale">

        <!-- FAVICON -->
        <link rel="icon" href="assets/images/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- JQUERY LIBRARY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>

        <!-- FRAMEWORK CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
        <!--<link rel="stylesheet" href="css/lightbox.css">-->

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


        <!-- ADDITIONAL CSS -->
        <link rel="stylesheet" href="assets/css/timeline.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/nav.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">

        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- LOAD COLOUR CSS -->
        <script src="assets/js/functions.js"></script>
    </head>
    <body>
        <!-- =========================================
                           HEADER TOP
        ==========================================-->
        <header id="header-top"> <!--Start: "Header Area"-->
            <!--<div class="container">
                <div class="row">
                    <div class="top-contact col m12 left">
                        <a href="index.php?lang_user=it"><img style="cursor: pointer;" src="assets/images/italy.png" alt="italiano" /></a>
                        <a href="index.php?lang_user=eng"><img style="cursor: pointer;" src="assets/images/england.png" alt="england" /></a>
                        <span><i class="fa fa-envelope"></i> <a style="color: white;" href="mailto:">angeloparziale94@gmail.com</a></span>
                    </div>
                </div>
            </div>-->

            <!-- =========================================
                           NAVIGATION
            ==========================================-->
            <div id="header-bottom" class="z-depth-1"> <!--Start: "Header Area"-->
                <div id="sticky-nav">
                    <div class="container">
                        <div class="row">
                            <nav class="nav-wrap">
                                <ul class="hide-on-med-and-down group"  id="example-one">
                                    <li name="nm_it" style="border-right: solid 1px; border-color: #000;">
                                        <a href="index.php?lang_user=it"><img style="cursor: pointer;" src="assets/images/italy.png" alt="italiano" /></a>
                                    </li>
                                    <li name="nm_eng" style="border-right: solid 1px; border-color: #000; display: none;">
                                        <a href="index.php?lang_user=eng"><img style="cursor: pointer;" src="assets/images/england.png" alt="england" /></a>
                                    </li>
                                    <li class="current_page_item"><a href="#header-top">Home</a></li>
                                    <li><a href="#about"><?php echo ABOUT ?></a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#works"><?php echo WORKS ?></a></li>
                                    <li><a href="#education"><?php echo EDUCATION ?></a></li>
                                    <li><a href="#contact-form"><?php echo CONTACT_ME ?></a></li>
                                    <li style="border-left: solid 1px; border-color: #000;"><a target="_blank" href="https://www.angeloparziale.it/blog">Blog</a></li>
                                </ul>
                                <!-- NAVBAR SMARTPHONE -->
                                <ul class="side-nav" id="slide-out">
                                    <li name="nm_it" style="border-bottom: solid 1px; border-color: #000;">
                                        <a href="index.php?lang_user=it"><img style="cursor: pointer;" src="assets/images/italy.png" alt="italiano" /></a>
                                    </li>
                                    <li name="nm_eng" style="border-bottom: solid 1px; border-color: #000; display: none;">
                                        <a href="index.php?lang_user=eng"><img style="cursor: pointer;" src="assets/images/england.png" alt="england" /></a>
                                    </li>
                                    <li><a href="#header-bottom" class="active">Home</a></li>
                                    <li><a href="#about"><?php echo ABOUT ?></a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#works"><?php echo WORKS ?></a></li>
                                    <li><a href="#education"><?php echo EDUCATION ?></a></li>
                                    <li><a href="#contact-form"><?php echo CONTACT_ME ?></a></li>
                                    <li style="border-top: solid 1px; border-color: #000; width: 100%;"><a target="_blank" href="https://www.angeloparziale.it/blog">Blog</a></li>
                                </ul>
                                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> <!--End: Header Area-->
        </header> <!--End: Header Area-->
        <!-- =========================================
                        ABOUT
        ==========================================-->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="intro z-depth-1 col m12">
                        <div class="col m12 s12">
                            <div class="profile-pic wow fadeIn a1" data-wow-delay="0.1s" >
                                <img src="assets/images/profile.jpg" alt="">
                            </div>
                        </div>
                        <div class="col m12 s12 co-centered wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="intro-content col m11 s12">
                                <h2>Angelo Parziale</h2>
                                <span>Web/Mobile Developer</span>
                                <p>
                                    <?php echo INTRODUCTION ?>
                                </p>
                                <h5 style="color: #8a8a8b;"><b><i style="margin-right: 15px;" class="fa fa-user" aria-hidden="true"></i><?php echo MY_EQUIPMENT?></b></h5>
                                <div class="responsive">
                                <table id="personalEquipment" class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/kit/jet_brains_logo.png" alt="JetBrains Logo">
                                            <p style="padding-top: 0;">
                                                <?php echo JETBRAINS ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/kit/github.png" alt="Git Logo">
                                            <p>
                                                <?php echo GIT ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img style="padding-top: 15px;" src="assets/images/kit/linux.png" alt="Linux Logo">
                                            <p>
                                                <?php echo LINUX ?>
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>

                                <a href="resource/cv.pdf" download="" class="btn waves-effect">Download CV</a>
                                <a href="#contact-form" class="btn btn-success waves-effect">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================
                           SKILLS
        ==========================================-->
        <section id="skills">
            <div class="container">
                <div class="row">
                    <div class="section-title wow fadeIn a1" data-wow-delay="0.1s">
                        <h2> <i class="fa fa-gears"></i>Skills</h2>
                    </div>
                    <div class="skill-line z-depth-1">
                        <div class="row">
                            <h3 style="text-align: center;"><?php echo PROGRAMMING_LANGUAGE ?></h3>
                            <div class="skill-bar col m6 s6 wow fadeIn a1"  data-wow-delay="0.1s">
                                <span>PHP/MySQL</span>
                                <div class="progress">
                                    <div class="determinate"> 100% </div>
                                </div>

                                <span>HTML5</span>
                                <div class="progress">
                                    <div class="determinate"> 100%</div>
                                </div>

                                <span>CSS3/LESS</span>
                                <div class="progress">
                                    <div class="determinate">100%</div>
                                </div>

                                <span>JQUERY</span>
                                <div class="progress">
                                    <div class="determinate">100%</div>
                                </div>

                                <span>AJAX</span>
                                <div class="progress">
                                    <div class="determinate"> 100%</div>
                                </div>
                            </div>
                            <div class="skill-bar col m6 s6 wow fadeIn a2" data-wow-delay="0.2s">
                                <span>SLIM</span>
                                <div class="progress">
                                    <div class="determinate"> 100%</div>
                                </div>

                                <span>LARAVEL</span>
                                <div class="progress">
                                    <div class="determinate">100%</div>
                                </div>

                                <span>REACTJS</span>
                                <div class="progress">
                                    <div class="determinate"> 90% </div>
                                </div>

                                <span>ANGULAR.JS</span>
                                <div class="progress">
                                    <div class="determinate">90%</div>
                                </div>

                                <span>SPRING BOOT</span>
                                <div class="progress">
                                    <div class="determinate">65%</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h3 style="text-align: center;">Content Management System </h3>
                            <div class="skill-bar col m6 s6 wow fadeIn a1"  data-wow-delay="0.1s">
                                <span>WORDPRESS</span>
                                <div class="progress">
                                    <div class="determinate"> 90% </div>
                                </div>

                                <span>JOOMLA</span>
                                <div class="progress">
                                    <div class="determinate"> 90%</div>
                                </div>
                            </div>
                            <div class="skill-bar col m6 s6 wow fadeIn a2" data-wow-delay="0.2s">
                                <span>MAGENTO</span>
                                <div class="progress">
                                    <div class="determinate"> 75% </div>
                                </div>

                                <span>PRESTASHOP</span>
                                <div class="progress">
                                    <div class="determinate"> 70%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
                WORKS EXPERIENCE
        ==========================================-->

        <section id="works">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2> <i class="fa fa-suitcase"> </i><?php echo WORK_EXPERIENCE ?></h2>
                    </div>
                    <div id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a target="_blank" href="https://myunimol.it/Login.jsp"><h2><?php echo TITLE_APP_UNIMOL ?>
                                        <img style="margin-top: -7px;" src="assets/images/projects/myunimol.png" width="32" height="32" alt="logo myUnimol" />
                                    </h2></a>
                                <span>2017 - <?php echo NON_TERMINATO ?></span>
                                <p><?php echo DESCRIPTION_APP_UNIMOL ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="https://telegram.me/ricormindbot" target="_blank">
                                    <h2><?php echo TITLE_WORK_1 ?>
                                        <img style="margin-top: -7px;" src="assets/images/projects/ricormind.png" width="32" height="32" alt="logo ricormind" />
                                    </h2></a>
                                <span>2017</span>
                                <p><?php echo DESCRIPTION_WORK1 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a3" data-wow-delay="0.3s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="https://dibt.unimol.it/grs2017/" target="_blank">
                                    <h2><?php echo TITLE_WORK_2 ?>
                                        <img style="margin-top: -7px;" src="assets/images/projects/unimol.png" width="32" height="32" alt="logo unimol" />
                                    </h2></a>
                                <span>2017</span>
                                <p><?php echo DESCRIPTION_WORK2 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a5" data-wow-delay="0.5s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://saner.unimol.it/" target="_blank">
                                    <h2><?php echo TITLE_WORK_4 ?>
                                        <img style="margin-top: -7px;" src="assets/images/projects/logoSaner.png" width="32" height="32" alt="logo saner" />
                                    </h2></a>
                                <span> 2016 - 2017 </span>
                                <p><?php echo DESCRIPTION_WORK4 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a4" data-wow-delay="0.4s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a><h2><?php echo TITLE_WORK_3 ?></h2></a>
                                <span> 2015 - 2016 </span>
                                <p><?php echo DESCRIPTION_WORK3 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                    </div> <!-- cd-timeline -->
                </div>
            </div>
        </section>

        <!-- =========================================
                BLOG
        ==========================================-->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="section-title wow fadeIn a1" data-wow-delay="0.1s">
                        <h2> <i class="fa fa-edit"> </i>Blog</h2>
                    </div>
                    <div class="row">
                        <div class="blog">
                            <div class="col m4 s12 blog-post wow fadeIn a2" data-wow-delay="0.2s">
                                <div class="thumbnail z-depth-1 animated">
                                    <img src="assets/images/blog/postman.png" alt="" class="responsive-img">
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-1">
                                            <a target="_blank" href="https://www.angeloparziale.it/blog/2017/06/22/postman/">
                                                <h2>Postman</h2>
                                                <span>Tool per testing API</span>
                                            </a>
                                        </div>
                                        <!--<div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a7" data-wow-delay="0.7s">
                                <div class="thumbnail z-depth-1">
                                    <img src="assets/images/blog/composer_img.png" alt="composer logo" class="responsive-img">
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-4">
                                            <a target="_blank" href="https://www.angeloparziale.it/blog/2017/06/21/composer-addio-problemi-di-dipendenze/">
                                                <h2>Composer</h2>
                                                <span>Dependency management in PHP</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a5" data-wow-delay="0.5s">
                                <div class="thumbnail z-depth-1">
                                    <img src="assets/images/blog/slim_logo.png" alt="" class="responsive-img">
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-5">
                                            <a target="_blank" href="https://www.angeloparziale.it/blog/2017/06/17/slim-framework/">
                                                <h2>Slim Framework</h2>
                                                <span>Framework PHP leggero e snello</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========================================
                EDUCATION
        ==========================================-->
        <section id="education">
            <div class="container">
                <div class="row">
                    <div class="section-title wow fadeIn a1" data-wow-delay="0.1s">
                        <h2> <i class="fa fa-graduation-cap"></i><?php echo EDUCATION?></h2>
                    </div>

                    <div class="cd-container" id="ed-timeline">
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://www.unimol.it/" target="_blank"><h2><?php echo TITLE_UNIVERSITY ?></h2></a>
                                <span> 2014 - <?php echo NON_TERMINATO ?> </span>
                                <p><?php echo DESCRIPTION_UNIVERSITY ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a3" data-wow-delay="0.3s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <h2><?php echo TITLE_CERTIFICATE ?></h2>
                                <span> 2013 - 2014 </span>
                                <p><?php echo DESCRIPTION_CERTIFICATE ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a4" data-wow-delay="0.4s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://www.ipiacb.it/" target="_blank"><h2><?php echo TITLE_DIPLOMA ?></h2></a>
                                <span> 2012 - 2013 </span>
                                <p><?php echo DESCRIPTION_DIPLOMA ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                    </div> <!-- cd-timeline -->

                </div>
            </div>
        </section>

        <!-- =========================================
                CONTACT
        ==========================================-->
        <section id="contact-form">
            <div class="container">
                <div class="row">
                    <div class="section-title wow fadeIn a1" data-wow-delay="0.1s">
                        <h2> <i class="fa fa-send"></i><?php echo CONTACT ?></h2>
                    </div>
                    <div class="contact-form z-depth-1" id="contact">
                        <div class="row">
                            <form id="contactForm" data-toggle="validator">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="input-field col m6 s12 wow fadeIn a2" data-wow-delay="0.2s">
                                    <label for="name" class="h4">Full Name *</label>
                                    <input type="text" onblur="controlField('name')" class="form-control validate" id="name" required data-error="NEW ERROR MESSAGE">
                                </div>
                                <div class="input-field col m6 s12 wow fadeIn a4" data-wow-delay="0.4s">
                                    <label for="email" class="h4">Email *</label>
                                    <input type="email" onblur="controlField('email')" class="form-control validate" id="email"  required>
                                </div>
                                <div class="input-field col m12 s12 wow fadeIn a3" data-wow-delay="0.3s">
                                    <label for="last_name" class="h4">Subject *</label>
                                    <input type="text" onblur="controlField('subject')" class="form-control validate" id="subject" required>
                                </div>
                                <div class="input-field col m12 s12 wow fadeIn a6" data-wow-delay="0.6s">
                                    <label for="message" class="h4 ">Message *</label>
                                    <textarea id="message" onblur="controlField('message')" class="form-control materialize-textarea validate" required></textarea>
                                </div>
                                <button type="button" id="form-submit" class="btn btn-success waves-effect wow fadeIn a7" data-wow-delay="0.7s" onclick="sendEMail()">Submit</button>

                            </form>
                        </div>
                    </div>

                    <!-- =========================================
                            INTEREST
                    ==========================================-->

                    <div class="interests col s12 m12 l12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row">
                            <ul class="z-depth-1"> <!-- interetsr icon start -->
                                <a href='https://www.facebook.com/angelo.m.parziale' target='_blank'><li><i class="fa fa-facebook-official tooltipped col m4 s6" data-position="top" data-delay="50" data-tooltip="Facebook"></i></li></a>
                                <a href='https://www.linkedin.com/in/angelo-parziale-2470b311a/' target='_blank'><li><i class="fa fa-linkedin tooltipped col m4 s6" data-position="top" data-delay="50" data-tooltip="Linkedin"></i></li></a>
                                <a href='https://plus.google.com/u/0/113273722236358246887' target='_blank'><li><i class="fa fa-google tooltipped col m4 s6" data-position="top" data-delay="50" data-tooltip="Google"></i></li></a>
                            </ul> <!-- interetsr icon end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SCRIPTS -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js'></script>
        <script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
        <script src="assets/js/masonry.pkgd.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="control/contact/email.js"></script>
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/init.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58052891-2', 'auto');
            ga('send', 'pageview');

        </script>

        <script>
            var language = getParameterByName('lang_user');
            if (language == false || language == 'it') {
                $('li[name=nm_eng]').css('display', 'block')
                $('li[name=nm_it]').css('display', 'none')
            } else {
                $('li[name=nm_it]').css('display', 'block')
                $('li[name=nm_eng]').css('display', 'none')
            }
        </script>
    </body>
</html>
