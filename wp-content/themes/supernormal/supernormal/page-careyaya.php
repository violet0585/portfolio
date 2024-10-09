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
            <h4>Helping caregivers recognize their challenges <br>through the strain index survey website</h4>
        </div>
        <div class="right">
            <img style="height: 30vw;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-laptop.png')); ?> >
        </div>
    </div>
    <div class="short-des">
        <p>UNC SILS Master's Practicum Project</p>
        <p>Sponsor: Careyaya <br>Project Advisor: Lukasz M Mazur</p>
        <p>8 months</p>
        <p>UX design <br>Frontend development</p>
    </div>
</div>
<div class="introduction">
    <div class="container2">
        <div class="body-gap"></div>
        <div class="body-gap"></div>
        <p class="stitle">Why Understand the Caregiver's Burden?</p>
        <h2 class="title2">Caregiving is a demanding and exhausting responsibility.</h2>
        <h4 class="mtitle">My interest in the caregiver’s burden grew from observing the challenges faced by people around me who were involved in caregiving. While I hadn’t deeply engaged with the issue before, these observations provided <span class="linear-gradient">insight into the difficulties caregivers encounter.</span> Through this project, I’m excited to contribute to a broader societal shift in the perception of caregiving. By highlighting the struggles caregivers endure and raising awareness, <span class="linear-gradient">I hope to foster greater understanding and support for these essential, yet often underrecognized, contributors to our communities.</span></h4>
        
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <div class="body">
            <img style="height: 4vw;" src="https://www.careyaya.org/build/_assets/logo_bright-7BDSNBZ4.svg" >
            <div class="right">
                <p class="stitle">Background</p>
                <h2 class="title2">A Company Committed to Caregiver Voices</h2>
                <h4 class="mtitle">Careyaya, a company that helps families in need of affordable elder care and companionship connect to prehealth college students to provide care, sponsored this project. <br>Our team engaged with Careyaya to understand their perspective on the challenges they face and the specific needs they have in supporting caregivers.</h4>
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
            <h4 class="mtitle">Collecting and analyzing caregiver stress index data through the survey provides valuable insights into the challenges caregivers face. This understanding enables Careyaya to enhance caregiver well-being and raise awareness of their needs. Ultimately, the data collected through these processes are instrumental in achieving the business goals.</h4>
            <div class="body-gap"></div>
            <img style="height: 40vw; margin:auto;" src=<?php echo esc_url( get_template_directory_uri() . ('/img/careyaya-goals.png')); ?> >
        <div class="body-gap"></div>
        <div class="body-gap"></div>

        <p class="stitle">Survey Design</p>
        <h2 class="title2">Enhancing Survey Clarity and Depth Through Targeted Question Design</h2>
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
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="700" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FDvvsMv2z7lE32TSw4Vosrm%2Fcareyaya!%3Fpage-id%3D%26node-id%3D97-8380%26node-type%3Dframe%26viewport%3D675%252C340%252C0.05%26t%3DTQctFOhSmV5rKfs6-1%26scaling%3Dmin-zoom%26content-scaling%3Dfixed%26starting-point-node-id%3D97%253A8380" allowfullscreen></iframe>
    </div>
    <div class="body-gap"></div>
    <div class="body-gap"></div>
</div>

<div class="introduction3">
    <div class="body-gap"></div>
    <p class="stitle">Key Takeaways</p>
    <h2 class="title2">Strategic Communication and Mentorship in the Careyaya Project</h2>
    <h4 class="mtitle">
    One of the most significant lessons I gained from the Careyaya project was the importance of timely and effective communication, particularly with mentors, when facing challenges across different stages of the project, from research to design and front-end development. When encountering unexpected delays, resource constraints, or uncertainties—such as realizing that we couldn't modify the Caregiver Strain Index due to its research-based foundation—it became clear that proactively organizing questions and engaging in clear, strategic discussions with mentors was crucial. This approach ensured efficient problem-solving and kept the project on track.</h4>
    <div class="body-gap"></div>

    <h2 class="title2"> Ensuring Smooth Collaboration and Timely Delivery in Multidisciplinary Teams</h2>
    <h4 class="mtitle">I learned the critical importance of project management, especially when working with a multidisciplinary team. Understanding how long each task takes, the challenges involved, and the current status of each phase is vital for smooth project progression. The role of a project manager in maintaining clear communication with team members and managing timelines effectively was crucial for keeping the project on track and meeting deadlines. Additionally, I discovered that having a broad understanding of different fields among team members enhances collaboration and facilitates better project planning. This holistic approach ensures that everyone is aligned and contributes effectively towards the project's success.</h4>

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