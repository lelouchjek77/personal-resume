<?php
?>
<style>

body{
    margin:0;
    background:#f3f4f6;
}

.experience-section {
    max-width: 900px;
    margin: 40px auto;
    font-family: 'Segoe UI', sans-serif;

    opacity:0;
    transform:translateY(40px);
    animation: sectionReveal 1s ease forwards;
    animation-delay:.5s;
}

.experience-section h2 {
    font-size: 28px;
    margin-bottom: 20px;
    border-left: 5px solid #3b82f6;
    padding-left: 10px;
}

/* EXPERIENCE CARD */
.experience-item {
    background: #ffffff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);

    opacity:0;
    transform:translateY(30px);
    animation: cardReveal .8s ease forwards;
}

/* STAGGER ANIMATION */
.experience-item:nth-of-type(1){ animation-delay:.8s; }
.experience-item:nth-of-type(2){ animation-delay:1s; }
.experience-item:nth-of-type(3){ animation-delay:1.2s; }

.experience-item h3 {
    margin: 0;
    color: #1f2937;
}

.company {
    display: block;
    font-weight: 600;
    color: #374151;
}

.date {
    display: block;
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 10px;
}

.experience-item ul {
    padding-left: 20px;
}

.experience-item li {
    margin-bottom: 6px;
    line-height: 1.6;
}

/* HOVER EFFECT */
.experience-item:hover{
    transform:translateY(-5px);
    transition:.3s;
}

/* ANIMATIONS */

@keyframes headerFade{
    from{
        opacity:0;
        transform:scale(1.05);
    }
    to{
        opacity:1;
        transform:scale(1);
    }
}

@keyframes sectionReveal{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes cardReveal{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}
</style>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/profile-hero.css">

<!-- HERO HEADER -->
<div class="hero">

    <!-- BACKGROUND IMAGE -->
    <img class="hero-bg"
    src="<?php echo get_template_directory_uri() ?>/assets/image/custom-header.jpg">

    <!-- HERO TEXT -->
    <div class="hero-content">
        <h1>Hi, I'm Jericho</h1>
        <p>Full-Stack Web Developer</p>
    </div>

    <!-- PROFILE IMAGE -->
    <div class="hero-profile">
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/profile.jpg">
    </div>

</div>

<section class="experience-section">

    <h2>Work Experience</h2>

    <div class="experience-item">
        <h3>Web Programmer</h3>
        <span class="company">TimeRiverDesign Inc.</span>
        <span class="date">December 2020 - Present</span>

        <ul>
            <li>Develop and maintain web applications using Laravel, PHP, WordPress, Vue.js, and jQuery.</li>
            <li>Implement backend logic, APIs, and database integration.</li>
            <li>Maintain and optimize SQL queries and database performance.</li>
            <li>Deploy system updates to production servers using FileZilla.</li>
            <li>Troubleshoot bugs and maintain existing systems.</li>
        </ul>
    </div>

    <div class="experience-item">
        <h3>Software Developer</h3>
        <span class="company">BP Solution</span>
        <span class="date">July 2018 - May 2020</span>

        <ul>
            <li>Developed full web applications using Laravel and jQuery.</li>
            <li>Built desktop systems using C# and VB.NET.</li>
            <li>Designed SQL queries, stored procedures, and database views.</li>
            <li>Performed debugging, testing, and system improvements.</li>
            <li>Coordinated with clients to discuss system requirements and features.</li>
        </ul>
    </div>

    <h2>Training Experience</h2>

    <div class="experience-item">
        <h3>Job and Esther Technologies Inc</h3>
        <span class="company">Negros Occidental Technologies Business Incubation Center</span>
        <span class="date">May 2016 – June 2016</span>

        <ul>
            <li>Learned mobile application development concepts.</li>
            <li>Discussed mobile development using C#, C, and Swift.</li>
            <li>Studied Eqela programming language developed by the company.</li>
        </ul>
    </div>

</section>