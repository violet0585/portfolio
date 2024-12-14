<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * Template Name: 메인 페이지
 */
get_header(); ?>


<section class="work-section">
    <div class="container">
        <div class="content">
            <!-- Your existing portfolio components go here -->
            <section class="about-section"> 
                    <div class="intro">
                        <div>
                            <h2 style="font-weight:bold;">Hi, I'm <span style="color: #974EC3;">Yehee</span>, <br>UI/UX designer based in Bay Area.</h2>
                            <h5>I design with a critical eye for how users can interact more seamlessly and effectively.</h5>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-5" style="padding-left:0; margin-top: 16px;">
                                <a class="button row-btn" href="#project1"><span class="icon">1</span>BrewBot</a><br>
                                <a class="button row-btn" href="#project2"><span class="icon">2</span>Caregiver Strain Index Survey</a><br>
                                <a class="button row-btn" href="#project3"><span class="icon">3</span>Google Maps 'Add Stop' Redesign</a>
                            </div>
                    </div>
                    <div class="frame">
                        <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/profile-round.jpg')); ?> style="width: 30vw" >
                    </div>
                </section>
                <!-- <a class="button" href="<?php echo esc_url( home_url('/about')); ?>">button2</a> -->
        </div>
    </div>

        <section class="marquee-section marquee-padding">
            <div class="marquee">
                <div class="marquee__content">
                    <ul class="list-inline">
                        <li>I do design, develop,</li>
                        <li>animate, and think.</li>
                    </ul>
                    <ul class="list-inline">
                        <li>I do design, develop,</li>
                        <li>animate, and think.</li>
                        
                    </ul>
                    <ul class="list-inline">
                        <li>I do design, develop,</li>
                        <li>animate, and think.</li>
                    </ul>
                    
                </div>
            </div>
        </section>
    <div class="container">
        <div class="category-title-wrap">
            <!-- <a class="button line-button" href="<?php echo esc_url(home_url('/work')); ?>">Show More</a> -->
        </div>
        <div id="project1">
            <div style="max-width:80%; margin: auto;">
                <video style="max-width:100%;" autoplay muted>
                    <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/brewbot-short.mp4')); ?>" type="video/mp4">
                </video>
            </div>
            <!-- <a href="<?php echo esc_url(home_url('/brewbot')); ?>"><h3 class="project-title">BrewBot -></h3></a> -->
            <div class="project-des-con">
                <div class="project-des">
                    <div class="col-5">
                        <p class="strong">Redefining Campus Experience with Robotic Coffee Bar</p>
                        <h6 class="mar0">Introduced BrewBot, a coffee-making robot designed to redefine perceptions of robotics and showcase the transformative power of code with a friendly touch. This collaborative capstone project highlighted teamwork, strategy, and adaptability, rooted in human-centered design.</h6>
                    </div>
                    <div class="col-2">
                        <p class="strong">Team<br></p>
                        <h6 class="mar0">🙋‍♀️4 Designers</h6>
                        <h6 class="mar0">3 Storytellers</h6>
                        <h6 class="mar0">3 Developers</h6>
                        <h6 class="mar0">4 Robotics engineers</h6> 
                    </div>
                    <div class="col-2">
                        <p class="strong">Time</p>
                        <h6 class="mar0">4 months</h6>
                    </div>
                    <div class="col-2">
                        <p class="strong">Press</p>
                        <a class="press" href="https://www.youtube.com/watch?v=JEYRySa3WR4" target="_blank">ABC11</a><br>
                        <a class="press" href="https://linkedin.com/posts/unc-hussman-school-of-journalism-and-media_unchussman-thefutureisus-unc-activity-7191488081336700928-0-ui/" target="_blank">LinkedIn</a><br>
                        <a class="press" href="https://carolinaconnection.org/2024/04/26/after-a-semester-of-work-unc-students-unveil-a-robotic-barista" target="_blank">Carolina Connection</a>
                    </div>
                </div>
                <div class="readmore">
                        <a class="button readmore-button" href="<?php echo esc_url( home_url( '/brewbot/' ) ); ?>">Read more</a>
                </div>
            </div>
        </div>

        <div id="project2">
            <div style="max-width:80%; margin: auto;">
                <video style="max-width:100%;" autoplay muted>
                    <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/caregiver.mp4')); ?>" type="video/mp4">
                </video>
            </div>
            <!-- <a href="<?php echo esc_url(home_url('/careyaya')); ?>"><h3 class="project-title">Empowering Caregivers Through Insightful Self-Assessment</h3></a> -->
            <div class="project-des-con">
                <div class="project-des">
                    <div class="col-5">
                        <p class="strong">Empowering Caregivers Through Insightful Self-Assessment</p>
                        <h6 class="mar0">Developed the Caregiver Strain Index Survey, enabling caregivers to recognize and address their physical and mental challenges, significantly improving their well-being.</h6>
                    </div>
                    <div class="col-3 wider">
                        <p class="strong">Team</p>
                        <h6 class="mar0"><span>🙋‍♀️1 UX designer + Frontend developer</span> 
                        <h6 class="mar0">2 UI/UX designers</h6> 
                        <h6 class="mar0">1 Data analyst</h6> 
                        <h6 class="mar0">1 Frontend developer</h6>
                        <h6 class="mar0">1 Backend developer</h6>
                    </div>
                    <div class="col-2">
                        <p class="strong">Time</p>
                        <h6 class="mar0">8 months</h6>
                    </div>
                </div>
                <div class="readmore">
                        <a class="button readmore-button" href="<?php echo esc_url( home_url( '/careyaya/' ) ); ?>">Read more</a>
                </div>
            </div>
        </div>
        
        <div id="project3">
            <div style="max-width:80%; margin: auto;">
                <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-intro.png')); ?> >
            </div>
            <!-- <a href="<?php echo esc_url(home_url('/careyaya')); ?>"><h3 class="project-title">Wellsfargo -></h3></a> -->
            <div class="project-des-con">
                <div class="project-des">
                    <div class="col-5">
                    <p class="strong">Refined the 'Add Stop' Feature for Enhanced Usability</p>
                    <h6 class="mar0">Enhanced the 'Add Stop' feature by simplifying the process, reducing steps, and improving usability. Users can now view the ETA for all stopovers before starting their journey, based on user feedback and competitive analysis.</h6>
                    </div>
                    <div class="col-2">
                    <p class="strong">Role</p>
                    <h6 class="mar0">User research</h6>
                    <h6 class="mar0">UX/UI design</h6>
                    </div>
                    <div class="col-2">
                        <p class="strong">Time</p>
                        <h6 class="mar0">1 month</h6>
                    </div>
                </div>
                <div class="readmore">
                    <a class="button readmore-button" href="<?php echo esc_url( home_url( '/googlemap/' ) ); ?>">Read more</a>
                </div>
            </div>
        </div>
        
    </div>



<div class="introduction">
    <div class="container2">
        <div class="body-gap"></div>
        <p style="font-weight: bold;"class="stitle">There's more to explore</p>
        <p style="color: #8f8f8f" class="stitle">Diving deeper into my creative journey, you'll discover a vibrant collection of my work. From eye-catching posters to dynamic motion graphics, every piece is crafted with care and precision.</p>
        <div class="body-gap2"></div>
        
        <div class="more-section">
            <div class="text-list">
                <div class="text-item" data-media="sm-fine-art">SM Fine Art Gallery</div>
                <div class="text-item" data-media="nc-state">NC State University</div>
                <div class="text-item" data-media="fkbc-hesed">FKBC HESED</div>
                <div class="text-item" data-media="VideosMotions">Videos & Motion graphics</div>
            </div>
            <div class="media-display">
                <div id="sm-fine-art" class="media-item posters-container">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Awakening.jpg')); ?> alt="SM Fine Art Gallery Work 1" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/BAMA2022.jpg')); ?> alt="SM Fine Art Gallery Work 2" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/KIAF2022.jpg')); ?> alt="SM Fine Art Gallery Work 3" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/BAMA2023.jpg')); ?> alt="SM Fine Art Gallery Work 4" class="poster-item">
                </div>
                <div id="nc-state" class="media-item posters-container">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-card3.png')); ?> alt="NC State Univ Intern Work 1" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-card1.png')); ?> alt="NC State Univ Intern Work 2" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-zoom.jpg')); ?> alt="NC State Univ Intern Work 4" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-flyer1.jpg')); ?> alt="NC State Univ Intern Work 3" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-flyer2.jpg')); ?> alt="NC State Univ Intern Work 5" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/NC-card2.png')); ?> alt="NC State Univ Intern Work 6" class="poster-item">
                </div>
                <div id="fkbc-hesed" class="media-item posters-container">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Hesed-poster1.jpg')); ?> alt="FKBC HESED Work 1" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Hesed-logo.png')); ?> alt="FKBC HESED Work 3" class="poster-item">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Hesed-poster2.jpg')); ?> alt="FKBC HESED Work 2" class="poster-item">
                </div>
                <div id="VideosMotions" class="media-item posters-container">
                    <video width="1800" autoplay muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/NC-motiongraphic.mp4')); ?>" type="video/mp4">
                    </video>
                    <iframe width="1800" height="auto" src="https://www.youtube.com/embed/oiqqQymw8Nk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <iframe width="1800" height="auto" src="https://www.youtube.com/embed/Eno8H74ofJ0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                    <iframe width="1800" height="auto" src="http://www.youtube.com/embed/GOXo0KQEysI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="body-gap2"></div>
        <div class="body-gap2"></div>
    </div>
</div>
</section>



<?php
// Other PHP code or content generation

// Include the JavaScript file at the end of the PHP script output
echo '<script src="./js/custom.js"></script>';
?>

<?php get_footer(); ?>