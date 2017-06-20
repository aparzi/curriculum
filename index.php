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
        <title> www.angeloparziale.it </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Materialize portfolio one page template, Using for personal website." />
        <meta name="keywords" content="cv, resume, portfolio, materialize, onepage, personal, blog" />
        <meta name="author" content="Angelo Parziale">

        <!-- FAVICON -->
        <link rel="icon" href="assets/images/favicon-32x32.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">


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

        <!--   COLOUR  -->
        <link rel="stylesheet" href="assets/css/color/lime.css" title="lime">
        <link rel="stylesheet" href="assets/css/color/red.css" title="red">
        <link rel="stylesheet" href="assets/css/color/green.css" title="green">
        <link rel="stylesheet" href="assets/css/color/purple.css" title="purple">
        <link rel="stylesheet" href="assets/css/color/orange.css" title="orange">

        <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
        <link rel="stylesheet" href="assets/css/demo.css">
    </head>
    <body>
        <!-- =========================================
                           HEADER TOP
        ==========================================-->
        <header id="header-top"> <!--Start: "Header Area"-->
            <div class="container">
                <div class="row">
                    <div class="top-contact col m12 left">
                        <a href="index.php?lang_user=it"><img style="cursor: pointer;" src="assets/images/italy.png" alt="italiano" /></a>
                        <a href="index.php?lang_user=eng"><img style="cursor: pointer;" src="assets/images/england.png" alt="england" /></a>
                        <span><i class="fa fa-envelope"></i> <a href="mailto:">angeloparziale94@gmail.com</a></span>
                    </div>
                </div>
            </div>

            <!-- =========================================
                           NAVIGATION
            ==========================================-->
            <div id="header-bottom" class="z-depth-1"> <!--Start: "Header Area"-->
                <div id="sticky-nav">
                    <div class="container">
                        <div class="row">
                            <nav class="nav-wrap">
                                <ul class="hide-on-med-and-down group"  id="example-one">
                                    <li class="current_page_item"><a href="#header-top">Home</a></li>
                                    <li><a href="#about"><?php echo ABOUT ?></a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#works"><?php echo WORKS ?></a></li>
                                    <li><a href="#education">Education</a></li>
                                    <li><a href="#contact-form"><?php echo CONTACT_ME ?></a></li>
                                    <li style="border-left: solid 1px; border-color: #000;"><a target="_blank" href="https://www.angeloparziale.it/blog">Blog</a></li>
                                </ul>
                                <!-- NAVBAR SMARTPHONE -->
                                <ul class="side-nav" id="slide-out">
                                    <li><a href="#header-bottom" class="active">Home</a></li>
                                    <li><a href="#about"><?php echo ABOUT ?></a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#works"><?php echo WORKS ?></a></li>
                                    <li><a href="#education">Education</a></li>
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
                            <div class="intro-content col m10 s12">
                                <h2>Angelo Parziale</h2>
                                <span>Web Developer</span>
                                <p><?php echo INTRODUCTION ?></p>
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

                                <span>HTML</span>
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
                            </div>
                            <div class="skill-bar col m6 s6 wow fadeIn a2" data-wow-delay="0.2s">
                                <span>REACTJS</span>
                                <div class="progress">
                                    <div class="determinate"> 100% </div>
                                </div>

                                <span>AJAX</span>
                                <div class="progress">
                                    <div class="determinate"> 100%</div>
                                </div>

                                <span>JAVA</span>
                                <div class="progress">
                                    <div class="determinate">85%</div>
                                </div>

                                <span>C/C++</span>
                                <div class="progress">
                                    <div class="determinate">70%</div>
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
                                <a href="https://telegram.me/ricormindbot"><h2><?php echo TITLE_WORK_1 ?></h2></a>
                                <span>2017</span>
                                <p><?php echo DESCRIPTION_WORK1 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a3" data-wow-delay="0.3s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="https://dibt.unimol.it/grs2017/" target="_blank"><h2><?php echo TITLE_WORK_2 ?></h2></a>
                                <span>2017</span>
                                <p><?php echo DESCRIPTION_WORK2 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a5" data-wow-delay="0.5s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://saner.unimol.it/" target="_blank"><h2><?php echo TITLE_WORK_4 ?></h2></a>
                                <span> 2016 - 2017 </span>
                                <p><?php echo DESCRIPTION_WORK4 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a4" data-wow-delay="0.4s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="#"><h2><?php echo TITLE_WORK_3 ?></h2></a>
                                <span> 2015 - 2016 </span>
                                <p><?php echo DESCRIPTION_WORK3 ?></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a6" data-wow-delay="0.5s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="#"><h2><?php echo TITLE_WORK_5 ?></h2></a>
                                <span> 2014 - 2015 </span>
                                <p><?php echo DESCRIPTION_WORK5 ?></p>
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
                                    <a href="blog-full-post.php"><img src="assets/images/b-1.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-1">
                                            <a href="blog-full-post.php">
                                                <h2>Website Design</h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a3" data-wow-delay="0.3s">
                                <div class="thumbnail z-depth-1">
                                    <a href="blog-full-post.php"><img src="assets/images/b-2.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-2">
                                            <a href="blog-full-post.php">
                                                <h2>Website Redesign</h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a4" data-wow-delay="0.4s">
                                <div class="thumbnail z-depth-1">
                                    <a href="blog-full-post.html"><img src="assets/images/b-4.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-3">
                                            <a href="blog-full-post.html">
                                                <h2>Music Player Design</h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a5" data-wow-delay="0.5s">
                                <div class="thumbnail z-depth-1">
                                    <a href="blog-full-post.html"><img src="assets/images/b-3.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-4">
                                            <a href="blog-full-post.html">
                                                <h2>Marketing Partner</h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a6" data-wow-delay="0.6s">
                                <div class="thumbnail z-depth-1">
                                    <a href="blog-full-post.html"><img src="assets/images/b-5.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-6">
                                            <a href="blog-full-post.html">
                                                <h2>Marketing Partner</h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m4 s12 blog-post wow fadeIn a7" data-wow-delay="0.7s">
                                <div class="thumbnail z-depth-1">
                                    <a href="blog-full-post.html"><img src="assets/images/b-6.jpg" alt="" class="responsive-img"></a>
                                    <div class="blog-details">
                                        <div class="post-title" id="blog-post-5">
                                            <a href="blog-full-post.html">
                                                <h2>Web development </h2>
                                                <span>branding, ui-ux, article</span>
                                            </a>
                                        </div>
                                        <div class="post-details">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Aliquam ornare arcu ac velit ultricies fermentum.
                                                Aliquam ornare arcu ac velit ultricies fermentum.</p>
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
                        <h2> <i class="fa fa-graduation-cap"></i>Education</h2>
                    </div>

                    <div class="cd-container" id="ed-timeline">
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://www.unimol.it/" target="_blank"><h2><?php echo TITLE_UNIVERSITY ?></h2></a>
                                <span> 2014 - in corso </span>
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

        <!-- =========================================================
            STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
        ===========================================================-->

        <!-- Style switter js -->
        <!--<script src="assets/js/styleswitcher.js"></script>

        <div class="cv-style-switch" id="switch-style">
            <a id="toggle-switcher" class="switch-button icon_tools"> <i class="fa fa-cogs"></i></a>
            <div class="switched-options">
                <div class="config-title">
                    Colors :
                </div>
                <ul class="styles">
                    <li><a href="index.html#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
                    <div class="red"></div>
                    </a></li>

                    <li><a href="index.html#" onclick="setActiveStyleSheet('purple'); return false;" title="purple">
                    <div class="purple"></div>
                    </a></li>

                    <li><a href="index.html#" onclick="setActiveStyleSheet('orange'); return false;" title="orange">
                    <div class="orange"></div>
                    </a></li>

                    <li><a href="index.html#" onclick="setActiveStyleSheet('green'); return false;" title="green">
                    <div class="green"></div>
                    </a></li>

                    <li><a href="index.html#" onclick="setActiveStyleSheet('lime'); return false;" title="lime">
                    <div class="lime"></div>
                    </a></li>

                    <li class="p">
                        ( NOTE: Pre Defined Colors. You can change colors very easily )
                    </li>
                </ul>
            </div>
        </div>-->
    </body>
</html>
