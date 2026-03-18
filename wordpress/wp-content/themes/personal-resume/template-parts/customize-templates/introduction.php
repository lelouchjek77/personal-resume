<?php
?>
<style>
   body{
        margin:0;
        background:#f3f4f6;
   }

   .profile-summary {
        max-width: 750px;
        margin: 40px auto;
        padding: 30px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        font-family: 'Segoe UI', Tahoma, sans-serif;
        line-height: 1.7;
        color: #444;

        /* animation */
        opacity:0;
        transform: translateY(40px);
        animation: slideUp 1s ease forwards;
        animation-delay: .6s;
   }

    .profile-summary h2 {
        font-size: 28px;
        margin-bottom: 15px;
        color: #1f2937;
        border-left: 5px solid #3b82f6;
        padding-left: 10px;
    }

    .profile-summary p {
        margin-bottom: 15px;
        font-size: 16px;
    }

    .highlight {
        font-weight: 600;
        color: #111827;
    }

    .tech {
        background: #eef2ff;
        color: #3730a3;
        padding: 3px 8px;
        border-radius: 6px;
        font-size: 14px;
        margin: 0 2px;
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
        <h1>Hi, I'm Jericho TEST SITE</h1>
        <p>Full-Stack Web Developer</p>
    </div>

    <!-- PROFILE IMAGE -->
    <div class="hero-profile">
        <img src="<?php echo get_template_directory_uri() ?>/assets/image/profile.jpg">
    </div>

</div>

<div class="profile-summary">
    <h2>Full-stack Web Developer</h2>
    <p>
        Full-stack Web Developer with over <span class="highlight">5 years of professional experience</span>
        developing and maintaining web applications. Highly experienced in
        <span class="tech">PHP</span> and modern JavaScript frameworks including
        <span class="tech">Laravel</span>, <span class="tech">Vue.js</span>, <span class="tech">Typescript</span>, 
        <span class="tech">React.js</span>, <span class="tech">WordPress</span>, and
        <span class="tech">jQuery</span>.
    </p>

    <p>
        Strong background in <span class="highlight">backend development</span>,
        <span class="highlight">database management</span>, and
        <span class="highlight">system debugging</span>. Also experienced in desktop
        application development using <span class="tech">C#</span> and
        <span class="tech">VB.NET</span>.
    </p>

    <p>
        Adept at analyzing system requirements, optimizing workflows, and building
        efficient solutions that reduce repetitive tasks.
    </p>
</div>