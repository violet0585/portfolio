<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */


/*
 * Template Name: page-CareYaya
 */
get_header(); 
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

 

<div class="container2">
    <div class="main">
        <div class="left">
            <h1 class="title">What <span style="color: #974EC3;">challenges</span> <br>are you facing?</h1>
            <h4>Creating a survey website to help caregivers better understand their daily struggles</h4>
        </div>
        <div class="right">
            <img style="height: 30vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-laptop.png')); ?> >
        </div>
    </div>
    <div class="short-des">
        <p>UNC SILS Master's Practicum Project</p>
        <p>Sponsor: Careyaya</p>
        <p>8 months</p>
        <p>UX design <br>Frontend development</p>
    </div>
</div>
<div class="introduction">
    <div class="container2">
        <div class="body-gap"></div>
        <div class="body-gap"></div>
        <p class="stitle">Why Focus on Caregivers' Struggles?</p>
        <h2 class="title2">Being a caregiver isn't easy. It takes a lot out of you.</h2>
        <h4 class="mtitle">I became really interested in this topic after seeing friends and family members taking care of their loved ones. Even though I hadn't personally been a caregiver, watching their daily challenges opened my eyes to what they go through. This project means a lot to me because <span class="linear-gradient">I want to help change how people think about caregiving.</span> It's important that we recognize and support these people who give so much of themselves to help others, often without much recognition or help.</span></h4>
        
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div class="body">
            <img style="height: 4vw;" src="https://www.careyaya.org/build/_assets/logo_bright-7BDSNBZ4.svg" >
            <div class="right">
                <p class="stitle">Background</p>
                <h2 class="title2">Working with People Who Care</h2>
                <h4 class="mtitle">We partnered with Careyaya, a company that does something really meaningful. They connect families who need affordable elder care with pre-health college students who can provide companionship and support. During our collaboration, we spent time with their team to really <span class="linear-gradient">understand what they're trying to achieve and what tools they need to better support caregivers.</span></h4>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div class="body">
            <img style="height: 16vw;" src="https://katiecouric.com/wp-content/uploads/2022/07/caregiver__4_.jpeg" >
            <div class="right">
                <p class="stitle">Stakeholder Interview</p>
                <h2 class="title2">Careyaya wants to build awareness of caregiver impact</h2>
                <h4 class="mtitle">By understanding the challenges caregivers face and the impact of these challenges on their ability to provide care, Careyaya aims to improve support systems and resources for caregivers. <br>This initiative not only supports the caregivers but also enhances the overall quality of care for the elderly, thereby contributing to the company's mission and growth. </h4>
            </div>
        </div>
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div>
            <p class="stitle">User Interviews</p>
            <h2 class="title2">Caregivers need understanding and support</h2>
            <h4 class="mtitle">Based on interviews with 13 caregivers, the findings highlight significant challenges.</h4>
        </div>
        <img style="height: 1000px; margin: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-affinitymap.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div>
            <p class="stitle">Personas</p>
            <!-- <h2 class="title2">Caregivers need understanding and support</h2> -->
            <img style="height: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-persona1.jpg')); ?> >
            <div class="body-gap"></div>
            <img style="height: auto; margin-top: 40px;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-persona2.jpg')); ?> >
        </div>
        <div class="body-gap"></div>
    </div>
</div>
<div class="introduction2">
    <div class="container2">
        <div class="body-gap"></div>
            <p class="stitle">Prioritisation</p>
            <h2 class="title2">Starting with data to drive caregiver support and business success</h2>
            <h4 class="mtitle">The survey helps us collect important information about what makes caregiving hard. By hearing directly from caregivers about their stress levels and daily challenges, Careyaya can better understand what kind of help they actually need. This isn't just about gathering numbers, it's about understanding real people's experiences so we can make changes that truly help both caregivers and the business grow in the right direction.</h4>
            <div class="body-gap"></div>
            <img style="height: 40vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-goals.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Survey Design</p>
        <h2 class="title2">Enhancing Survey Clarity Through Targeted Question Design</h2>
        <h4 class="mtitle">We used insights from caregiver interviews to refine the Caregiver Strain Index while preserving the original structure of the survey. We focused on enhancing question clarity and specificity to better capture the experiences of caregivers. By providing a broader range of specific concerns, we aimed to elicit more detailed responses, helping caregivers to reflect on their experiences more thoroughly.</h4>
        <div class="body-gap"></div>
        <div class="body">
            <img style="height: 26vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Careyaya-index1.png')); ?> >
            <img style="height: 26vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/Careyaya-index2.png')); ?> >
        </div>

        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">User Flow</p>
        <!-- <h2 class="title2">어떤식의 user flow인지</h2> -->
        <img style="height: augo; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-userflow.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>
    </div>
</div>
<div class="style-guide">
    <p class="stitle">Style Guide</p>
    <img class="styleguide" style="height: 30vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-styleguideW.png')); ?> >
    <img class="styleguide2" style="height: 30vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-styleguide.png')); ?> >
    <div class="body-gap"></div>
</div>

<div class="introduction2">
    <div class="container2">
        <p class="stitle">Wireframe</p>
        <div class="body-gap2"></div>
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="1100" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FDvvsMv2z7lE32TSw4Vosrm%2Fcareyaya!%3Fpage-id%3D%26node-id%3D97-8380%26node-type%3Dframe%26viewport%3D675%252C340%252C0.05%26t%3DTQctFOhSmV5rKfs6-1%26scaling%3Dmin-zoom%26content-scaling%3Dfixed%26starting-point-node-id%3D97%253A8380" allowfullscreen></iframe>
    </div>
    <div class="body-gap"></div>
    <div class="body-gap"></div>
</div>

<div class="introduction3">
    <div class="body-gap"></div>
    <p class="stitle">Key Takeaways</p>
    <h2 class="title2">Growing Through Mentor Communication</h2>
    <h4 class="mtitle">
    Working on Careyaya showed me the real value of good mentor relationships. Throughout the project, we faced several hurdles like tight deadlines, limited resources, and some unexpected setbacks. One big challenge was discovering we couldn't change the Caregiver Strain Index because of its research background. In these moments, I learned to organize my questions ahead of time and have focused discussions with our mentors. This approach helped us solve problems faster and keep the project on track. It taught me that being proactive about seeking guidance makes a real difference in getting things done.</h4>
    <div class="body-gap"></div>

    <h2 class="title2">Project Success Through Teamwork</h2>
    <h4 class="mtitle">I also learned a lot about keeping a project running smoothly when working with a multidisciplinary team. Knowing how long tasks really take and what each team member is working on helped everything run smoothly. Having someone keep track of deadlines and maintain open communication made a big difference. I also found that when team members understood a bit about each other's work areas, we worked together better and got more done. It was all about keeping everyone in sync and moving in the same direction.</h4>

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