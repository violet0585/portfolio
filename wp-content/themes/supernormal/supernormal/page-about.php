<?php
/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */
/*
 * Template Name: page-About
 */
get_header();
?>



<div class="container2">
    <div class="main2">
        <div class="left">
            <h1 class="title">Hello! <br>I'm <span style="color: #974EC3;">Yehee Kim,</span></h1>
            <h5 style="line-height: 2vw;">From rearranging my room to perfecting the flow of my daily routine, I’ve always had a habit of optimizing space and removing inefficiencies. It’s not just about aesthetics—it’s about crafting an environment that works seamlessly with how I move, live, and think. <br><br>This mindset naturally extends to my work as a UX designer, where I’m constantly asking, “How can this be more intuitive, more efficient?” In my Careyaya project, for example, I entered the unfamiliar field of caregiving, uncovering key pain points through in-depth research and designing an efficient, user-friendly UI to address these needs.<br><br>Whether reshaping a digital product or improving a physical layout, I’m always seeking ways to enhance the flow and efficiency of a user’s journey, both physically and digitally.</h5>
        </div>
        <div class="right">
            <img style="margin-top: 100px; margin-left: 73px; height: 30vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/cartoon.png')); ?> >
        </div>
    </div>

    <div class="body-gap"></div>
    <div class="body-gap"></div>

    <div class="container">
        <h2 class="title2">A Glimpse Into <span style="color: #974EC3;">My Interests</span></h2>
        <div class="more-section">
            <canvas id="hobbiesRadarChart" width="300" height="300"></canvas>
            <div class="body-scroll">
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-4.jpg')); ?> >
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-3.jpg')); ?> >
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-1.jpg')); ?> >
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-2.jpg')); ?> >
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-5.jpg')); ?> >
                <img style="height: 400px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/about-6.jpg')); ?> >
            </div>
        </div>

        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div>
            <h2 class="title2">Crafted with <span style="color: #974EC3;">Care</span> and <span style="color: #974EC3;">Code</span></h2>
            <h6 style="line-height:40px; font-weight:400; margin:0;">This portfolio reflects my dedication to both design and development. Instead of using web builders, I built the site from scratch with custom code, allowing me to tailor every detail to my vision and create a unique, personalized user experience. I'm now focused on making the site fully responsive, ensuring it performs seamlessly across all devices.</h6>
        </div>
    </div>

    <div class="body-gap"></div>
    <div class="body-gap"></div>
</div>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/radar-chart.js" defer></script> <!-- 수정된 부분: 경로와 defer 추가 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php get_footer(); ?>