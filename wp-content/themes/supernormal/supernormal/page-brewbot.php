<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */


/*
 * Template Name: page-BrewBot
 */
get_header();
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<div class="container2">
    <div class="main">
        <div class="left">
            <h1 class="title">From Idea <br>to <span style="color: #974EC3;">Espresso</span></h1>
            <h4>Blending robotics with a human-centered coffee experience enhances campus life through innovative and friendly service</h4>
        </div>
        <div class="right">
            <img style="height: 30vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-monitorRobot.png')); ?> >
        </div>
    </div>
    <div class="short-des">
        <p>UNC Interdisciplinary Team Project</p>
        <p>Collaborated with UNC Blue Sky Innovation</p>
        <p>4 months</p>
        <p>Web Design <br>Setting up an ordering system using Square</p>
    </div>
</div>

<div class="introduction">
    <div class="container2">
    <div class="body-gap"></div>
    <div class="body-gap"></div>
        <div class="body">
            <div>
            <img style="min-width: 400px;" src="<?php echo 'https://thebigsmoke.com.au/wp-content/uploads/ROSIE-AND-JETSONS.png'; ?>" alt="FARAI Image">
            </div>
            <div class="right">
                <p class="stitle">Background</p>
                <h2 class="title2">Understanding FARAI</h2>
                <h4 class="mtitle">In the context of rapidly advancing technology, robotics is becoming an integral part of everyday life. Despite its potential, <span class="linear-gradient">almost 25% of US individuals report experiencing FARAI</span> (Fear of Autonomous Robots and Artificial Intelligence). According to Liang and Lee (2017), many people fear autonomous robots and AI, often without having substantial interaction with these technologies. <span class="linear-gradient">Robotics is frequently seen as complex and impersonal.</span></h4>
            </div>
        </div>
        
        <div class="body-gap"></div>
        <div class="body-gap"></div>
        <p class="stitle">Why Integrate Robotics into the Coffee Experience?</p>
        <h2 class="title2">Making Technology More Approachable</h2>
        <h4 class="mtitle">We created BrewBot to show that robots can be part of our everyday moments in a friendly way. The idea came from wanting to help people feel more comfortable with new technology. <span class="linear-gradient">BrewBot aims to bridge the gap between technological potential and public perception, making robotics approachable and enjoyable.</span> Through this integration, BrewBot seeks to transform the way we interact with technology, blending advanced solutions with a user-friendly approach.</h4>
        <div class="img-list">
            <img class="list-img" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-2.jpg')); ?> >
            <img class="list-img" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-3.jpg')); ?> >
            <img class="list-img" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-1.jpg')); ?> >
            <img class="list-img" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-4.jpg')); ?> >
        </div>
        
        

        
        <div class="body-gap"></div>
        <div class="body-gap"></div>
            <p class="stitle">Competitive Analysis</p>
            <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/other-cafes.png')); ?> >
       
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div>
            <p class="stitle">Personas</p>
            <!-- <h2 class="title2">Caregivers need understanding and support</h2> -->
            <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-persona1.jpg')); ?> >
            <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-persona2.jpg')); ?> >
        </div>
        <div class="body-gap"></div>
    </div>
</div>

<div class="introduction2">
    <div class="container2">
        <div class="body-gap"></div>
            <p class="stitle">Prioritisation</p>
            <h2 class="title2"> Focusing on merging effective promotion with exceptional user experience</h2>
            <div class="body-gap"></div>
            <img style="height: 40vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-goals.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <!-- <p class="stitle">End-to-End User Journey Map </p> -->
        <!-- <h2 class="title2">어떤식의 user flow인지</h2> -->
        <!-- <img allowfullscreen style="height: augo; margin:auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-journeyMap.png')); ?>> -->
        <!-- <div class="body-gap"></div> -->
        <!-- <div class="body-gap"></div> -->

        <p class="stitle">UX Research-Informed Features</p>
        <h2 class="title2">Through UX research, we identified key features to enhance the BrewBot experience</h2>
        <div class="body-gap"></div>
        <div class="body">
            <video width="600vw" autoplay loop muted>
                <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-FAQvideo.mp4')); ?>" type="video/mp4">
            </video>
            <div class="right">
                <h2 class="title2">FAQ Page</h2>
                <h4 class="mtitle"><span class="linear-gradient">To ensure users have easy access to information and support,</span> we developed an FAQ page. <br>It is covering common questions about BrewBot, such as location, ordering and payment, safety, usage, and technical information. </h4>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>
        <div class="body">
            <div class="right">
                <h2 class="title2">First-Time User Guide</h2>
                <h4 class="mtitle"><span class="linear-gradient">To make the first-time experience with BrewBot smooth and welcoming,</span> a personalized onboarding process is introduced. This includes a step-by-step walkthrough of how to use BrewBot, highlighting key features. </h4>
            </div>
            <video width="600vw" autoplay loop muted>
                <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-guide.mp4')); ?>" type="video/mp4">
            </video>
            
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Wireframe</p>
        <div class="monitor-container">
            <div class="wireframe-container">
                <img class="wireframe-image" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-wireframe.png')); ?> >    
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Final Website</p>
        <div class="body">
        <h2 class="title2">Explore the BrewBot Live Website!</h2>
            <div class="right">
                <a href="https://www.brewbot.co/" target="_blank">
                <img class="brewbot-logo" style="width: 70%; margin: auto; margin-top: -60px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Brewbot-logo.png')); ?> >
                </a>
            </div>
        </div>
        <div class="body-gap"></div>
    </div>
</div>
<div class="introduction3">
    <div class="body-gap"></div>
    <p class="stitle">Key Takeaways</p>
    <h2 class="title2">Teamwork Makes the Dream Work</h2>
    <h4 class="mtitle">The biggest lesson was how important it is to keep everyone in the loop. Since we had different teams working on various parts of the project, our weekly catch-ups became crucial. These meetings weren't just updates - they helped us spot issues we might have missed on our own. Working with the marketing team was especially important for me, as we needed to make sure everything looked and felt consistent.</h4>
    <div class="body-gap"></div>

    <h2 class="title2">Research Changed Everything</h2>
    <h4 class="mtitle">When I started working on the website, I thought it would be pretty straightforward. But once I dug into the research, I realized there was so much more to consider. Taking time to understand what users needed and how they'd interact with BrewBot helped me make better choices about the design. It showed me how good research can really shape a project into something more meaningful.</h4>

</div>





<?php if (has_post_thumbnail()) : ?>
<div class="page-header page-cover-img" style="background-image: url('<?php echo $thumb['0']; ?>')">
    <?php else : ?>
    <div class="page-header">
        <?php endif; ?>
        <h2 class="page-title"><?php echo get_the_title(); ?></h2>
    </div>

    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile;
			?>
    <?php get_footer(); ?>

<script src="<?php echo esc_url( get_template_directory_uri() . '/js/script.js' ); ?>"></script>
