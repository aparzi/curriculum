<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <?php include 'partials/head.php' ?>
    <body>
        <?php include 'partials/header.php' ?>
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
                                <p id="introduction"></p>
                                <h5 id="title_equipment" style="color: #8a8a8b;"><b><i style="margin-right: 15px;" class="fa fa-user" aria-hidden="true"></i><?php echo MY_EQUIPMENT?></b></h5>
                                <div class="responsive">
                                <table id="personalEquipment" class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/kit/jet_brains_logo.png" alt="JetBrains Logo">
                                            <p style="padding-top: 0;" id="descr_jetbrains"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/images/kit/github.png" alt="Git Logo">
                                            <p id="descr_git"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img style="padding-top: 15px;" src="assets/images/kit/linux.png" alt="Linux Logo">
                                            <p id="descr_linux"></p>
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
                            <h3 id="programming_language" style="text-align: center;"></h3>
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
                                    <div class="determinate">90%</div>
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
                        <h2 id="title_work_experience"></h2>
                    </div>
                    <div id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="https://telegram.me/ricormindbot" target="_blank">
                                    <h2 id="title_xeos">
                                        <!--<img style="margin-top: -7px;" src="assets/images/projects/ricormind.png" width="32" height="32" alt="logo ricormind" />-->
                                    </h2></a>
                                <span>2017 - </span><span class="non_terminato"></span>
                                <p id="description_xeos"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a target="_blank" href="https://myunimol.it/Login.jsp"><h2 id="title_app_unimol"></h2></a>
                                <span>2017 - </span><span class="non_terminato"></span>
                                <p id="description_app_unimol"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a4" data-wow-delay="0.4s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a target="_blank" href="https://datasound.it/"><h2 id="title_datasounds"></h2></a>
                                <span> 2016 - 2017 </span>
                                <p id="description_datasounds"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a3" data-wow-delay="0.3s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="https://dibt.unimol.it/grs2017/" target="_blank">
                                    <h2 id="title_grs_2017"></h2></a>
                                <span>2017</span>
                                <p id="description_grs_2017"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a5" data-wow-delay="0.5s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://saner.unimol.it/" target="_blank">
                                    <h2 id="title_saner_2018"></h2></a>
                                <span> 2016 - 2017 </span>
                                <p id="description_saner_2018"></p>
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
                <cent class="row">
                    <div class="section-title wow fadeIn a1" data-wow-delay="0.1s">
                        <h2> <i class="fa fa-instagram"> </i>Instagram</h2>
                    </div>
                    <center>
                        <blockquote class="instagram-media" data-instgrm-captioned
                                    data-instgrm-permalink="https://www.instagram.com/p/BYwOaYaHDtO/"
                                    data-instgrm-version="8"
                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 0 auto !important; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:8px;">
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                                    <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
                                </div>
                                <p style=" margin:8px 0 0 0; padding:0 4px;"><a
                                            href="https://www.instagram.com/p/BYwOaYaHDtO/"
                                            style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;"
                                            target="_blank">#workstation #pc #programming #webdeveloper #job #passion
                                        #unimol #php #computerscience #university #js #javascript</a></p>
                                <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    Un post condiviso da <a href="https://www.instagram.com/aparzi/"
                                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;"
                                                            target="_blank"> Angelo Parziale</a> (@aparzi) in data:
                                    <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;"
                                          datetime="2017-09-07T20:39:11+00:00">Set 7, 2017 at 1:39 PDT
                                    </time>
                                </p>
                            </div>
                        </blockquote>
                    </center>
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
                        <h2 id="title_education" style="text-transform: capitalize;"> <i class="fa fa-graduation-cap"></i></h2>
                    </div>

                    <div class="cd-container" id="ed-timeline">
                        <div class="cd-timeline-block wow fadeIn a2" data-wow-delay="0.2s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://www.unimol.it/" target="_blank"><h2 id="title_university"></h2></a>
                                <span> 2014 - </span><span class="non_terminato"></span>
                                <p id="description_university"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                        <div class="cd-timeline-block wow fadeIn a3" data-wow-delay="0.3s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <h2 id="title_certificate"></h2>
                                <span> 2013 - 2014 </span>
                                <p id="description_certificate"></p>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block wow fadeIn a4" data-wow-delay="0.4s">
                            <div class="cd-timeline-img">
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content col m5 s12 z-depth-1">
                                <a href="http://www.ipiacb.it/" target="_blank"><h2 id="title_diploma"></h2></a>
                                <span> 2012 - 2013 </span>
                                <p id="description_diploma"></p>
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
                        <h2 id="title_contact"> <i class="fa fa-send"></i></h2>
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
        <?php include 'partials/script.php' ?>
    </body>
</html>
