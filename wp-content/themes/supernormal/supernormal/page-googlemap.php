<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */


/*
 * Template Name: page-Googlemap
 */
get_header();

$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<div class="container2">
    <div class="main">
        <div class="left">
            <h1 class="title">Turning <span style="color: #974EC3;">Daily <br>Driving Hassles</span> <br>into Seamless Journeys<span style="color: #974EC3;"></span></h1>
            <!-- <h4>Blending robotics with a human-centered <br>coffee experience enhances campus life <br>through innovative and friendly service</h4> -->
        </div>
        <div class="right">
            <img style="width: 50vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-intro.png')); ?> >
        </div>
    </div>
    <div class="short-des">
        <p>Perosnal Project</p>
        <p>Mobile App</p>
        <p>2 weeks</p>
        <p>UX Research and Design</p>
    </div>
</div>

<div class="introduction">
    <div class="container2">
    <div class="body-gap"></div>
    <div class="body-gap"></div>
        <div class="body">
            <div>
            <video style="max-width: 200px;" autoplay loop muted>
                <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-backgroundVideo.mp4')); ?>" type="video/mp4">
            </video>
            </div>
            <div class="right">
                <p class="stitle">Background</p>
                <h2 class="title2">Tired of Rearranging Stops</h2>
                <h4 class="mtitle">As a frequent driver who relies on Google Maps for navigation, I often utilize the 'add stop' feature whenever I have multiple destinations. My usual approach involves setting <span class="linear-gradient">the final destination first, followed by adding any intermediate stops.</span> However, I’ve consistently found it inconvenient that Google Maps requires stops to be added in order, which <span class="linear-gradient">forces me to manually rearrange the stops every time.</span> <br><br>This repeated friction sparked the idea for this project, where I set out to redesign the 'add stop' feature to enhance usability and streamline the process.</h4>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div class="body">
            <div class="right">
                <p class="stitle">Research Goals</p>
                <h2 class="title2">Navigating User Pain Points</h2>
                <h4 class="mtitle">The research aimed to uncover challenges in adding and rearranging stops in Google Maps, discover user preferences for stop sequencing, and identify any other related pain points to enhance navigation efficiency and satisfaction.<br><br> <span class="linear-gradient">Methodologies: 1. Competitive Analysis 2. User Interviews</span></h4>
            </div>
            <div>
                <img style="max-width: 350px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-painpoint.jpg')); ?> >
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Competitive Analysis</p>
        <h2 class="title2">Different UX in adding stop feature</h2>
        <h4 class="mtitle">First, I compared the add stop feature across three apps, and it was clear that <span class="linear-gradient">Google Maps had the most steps</span> for adding a stop.</h4>
        <div class="body-gap2"></div>


        <div class="body" style="gap:20%;">
            <div>
                <video style="height: 600px;" autoplay loop muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-stop1.mp4')); ?>" type="video/mp4">
                </video>
                <h4 class="mtitle" style="display: flex; justify-content: center;">Google Maps</h4>
                <p class="stitle bubble" style="margin-bottom: 10px;">Meatballs menu button</p>
                <p class="stitle bubble" style="margin-bottom: 10px;">Add stop</p>
                <p class="stitle bubble" style="margin-bottom: 10px;">Stop added as a next stop</p>
            </div>
            <div>
                <video style="height: 600px;" autoplay loop muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-stop2.mp4')); ?>" type="video/mp4">
                </video>
                <h4 class="mtitle" style="display: flex; justify-content: center;">Apple Maps</h4>
                <p class="stitle bubble" style="margin-bottom: 10px;">Add stop button</p>
                <p class="stitle bubble">Stop added as a next stop</p>
            </div>
            <div>
                <video style="height: 600px;" autoplay loop muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-stop3.mp4')); ?>" type="video/mp4">
                </video>
                <h4 class="mtitle" style="display: flex; justify-content: center;">NAVER Map</h4>
                <p class="stitle bubble" style="margin-bottom: 10px;">+ Button</p> 
                <p class="stitle bubble">Stop added as a <br>intermediate stop</p>
            </div>
            
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Competitive Analysis 2</p>
        <h2 class="title2">Comparison of ETA Display</h2>
        <h4 class="mtitle">This table outlines how the three maps display estimated time of arrival (ETA) for the final destination and intermediate stops before and after starting navigation.</h4>
        <div class="body-gap2"></div>
        <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-competitive.png')); ?> >
       
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Affinity Map</p>
        <h2 class="title2">Four people were interviewed and they provided some new perspectives </h2>
        <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-affinityMap.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Resarch Findings</p>
        <div class="body-gap"></div>
        <div class="body">
            <div class="oneofthree">
                <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/thunder.png')); ?> >
                <h4 class="mtitle">Users preferred <span class="linear-gradient">a quicker, less complicated</span> process for adding stops.</h4>
            </div>
            <div class="oneofthree">
                <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/option.png')); ?> >
                <h4 class="mtitle">Users generally viewed the 'Add Stop' feature as a means to include <span class="linear-gradient">intermediate stops</span> on their route rather than as a tool for setting sequential destinations.</h4>
            </div>
        </div>
        <div class="body-gap2"></div>
        <div class="body">
            <div class="oneofthree">
                <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/clock.png')); ?> >
                <h4 class="mtitle">Users valued having <span class="linear-gradient">ETA information for at least the first stop</span> when adding multiple stops, as it significantly influenced their decision-making process.</h4>
            </div>
            <div class="oneofthree">
                <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/direction.png')); ?> >
                <h4 class="mtitle"> Users were often confused by the separation of "Add Stop" and "Search Along Route." They expressed that <span class="linear-gradient">the purposes of these features overlap,</span> as both are used to find and add stops along their route.</h4>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>
        
        <div>
            <p class="stitle">Personas</p>
            <!-- <h2 class="title2">Caregivers need understanding and support</h2> -->
            <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-persona1.png')); ?> >
            <img style="width: 80%; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-persona2.png')); ?> >
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Solution</p>
        <h2 class="title2">Discovering a better system for Add Stop</h2>
        <h4 class="mtitle">To avoid causing confusion in the current user experience, I focused on finding ways to enhance the system while maintaining most of the existing features. </h4>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        
        <div class="body solution">
            <div>
                <p class="stitle">01</p>
                <h2 class="title2">Simplified Stop Management</h2>
                <h4 class="mtitle">+ and - buttons simplify navigation and allow direct stop additions, ensuring that the next stop is added in sequence, consistent with the current Google Maps system.</h4>
            </div>
            <div class="video-container">
                <video autoplay loop muted>
                        <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution1.mp4')); ?>" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div>
            <p class="stitle">02</p>
            <h2 class="title2">Dynamic ETA Display</h2>
            <h4 class="mtitle">Before starting the trip, all stops' ETAs are displayed with the label "ETA for immediate departure" to indicate potential inaccuracies. Once the trip begins, the main screen shows only the next stop's ETA, and users can swipe up to view the ETAs for the remaining stops.</h4>
        </div>    
        <div class="body-gap2"></div>
        <div class="body" style="gap:0;">
            <img style="width: 18vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution2-1.png')); ?> >
            <img style="width: 18vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution2-2.png')); ?> >
            <img style="width: 18vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution2-3.png')); ?> >
            <img style="width: 18vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution2-4.png')); ?> >
        </div>
            

        
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">03</p>
        <h2 class="title2">Merging "Add Stop" and "Search Along Route" Features</h2>
        <div class="body">
            <h4 class="mtitle">Based on the user interview, a more intuitive approach would be to merge these functionalities. By allowing users to add stops and search along their route within a single interface, we can streamline the experience. <span class="linear-gradient">The sequence in which users add stops could determine whether the system prioritizes route-based suggestions or specific destinations,</span> making the tool more flexible and user-centric. Further research from a software development perspective would be beneficial, but the initial findings suggest that integrating these features could significantly enhance user satisfaction.</h4>
        </div>
        <div class="body-gap2"></div>
        <div class="body">
            <div>
                <div class="body2">
                    <video style="height: 32vw;" autoplay loop muted>
                            <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution3-1.mp4')); ?>" type="video/mp4">
                    </video>
                    <img style="height: 32vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution3-3.png')); ?> >
                </div>
                
                <h4 class="mtitle border-top" style="display: flex; justify-content: center;">Add Stops</h4>
            </div>
            <div>
                <div class="body2">
                    <video style="height: 32vw;" autoplay loop muted>
                            <source src="<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution3-2.mp4')); ?>" type="video/mp4">
                    </video>
                    <img style="height: 32vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Googlemap-solution3-4.png')); ?> >
                </div>
                
                <h4 class="mtitle border-top" style="display: flex; justify-content: center;">Search Along Route</h4>
            </div>
        </div>

        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Prototype</p>
        <div class="body-gap2"></div>
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);"  width="1000" height="700" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2F3khmeSPRiWXHwG2kkJQ5B2%2FGoogle-Map-Template-(Community)%3Fpage-id%3D0%253A1%26node-id%3D2036-1773%26viewport%3D-2503%252C577%252C0.81%26t%3DlSi5hkQw9H2W028z-1%26scaling%3Dscale-down%26content-scaling%3Dfixed%26starting-point-node-id%3D2036%253A1773%26" allowfullscreen></iframe>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        
    </div>
</div>
<div class="introduction3">
    <div class="body-gap"></div>
    <p class="stitle">Key Takeaways</p>
    <h2 class="title2">Users Tend to Stick to Familiar Features</h2>
    <h4 class="mtitle">User interviews revealed that many users only engage with specific features they are familiar with, even if other useful functions are more accessible. For example, although the 'Search Along Route' feature in Google Maps is represented by a prominent magnifying glass icon, users who frequently use the 'Add Stop' function were unaware of it. This shows that as a UX designer, it’s crucial to design interfaces that not only introduce new features but also encourage users to explore and discover them naturally, ensuring a seamless and intuitive experience.</h4>
    <div class="body-gap"></div>

    <h2 class="title2">The Challenge of Evidence-Based Design</h2>
    <h4 class="mtitle">While conducting user interviews and reviewing app feedback, I aimed to create a redesign grounded in solid evidence. However, I found that translating user insights and data into effective design solutions wasn't as straightforward as I anticipated. This experience highlighted the complexity of balancing user feedback with practical design choices. It also made me realize that to refine my ability to create evidence-based designs, I need to continue honing my skills in research and data interpretation. This challenge pushes me to grow as a UX designer and deepen my understanding of how to turn research into actionable, impactful design decisions.







</h4>

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