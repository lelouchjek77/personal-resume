<?php
?>
<style>
   body{
        margin:0;
        background:#f3f4f6;
   }

   .header img {
        width: 100%;
        background-size: cover;
        background-position: center;
        height: 400px;

        /* animation */
        opacity:0;
        transform: scale(1.05);
        animation: fadeImage 1.5s ease forwards;
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

    /* IMAGE FADE ANIMATION */
    @keyframes fadeImage{
        from{
            opacity:0;
            transform: scale(1.05);
        }
        to{
            opacity:1;
            transform: scale(1);
        }
    }

    /* TEXT SLIDE ANIMATION */
    @keyframes slideUp{
        from{
            opacity:0;
            transform: translateY(40px);
        }
        to{
            opacity:1;
            transform: translateY(0);
        }
    }


/* HERO SECTION */
.hero{
    position:relative;
    width:100%;
    height:420px;
    overflow:hidden;
}

/* BACKGROUND IMAGE FIX */
.hero-bg{
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center 25%;
}

/* DARK OVERLAY */
.hero::after{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
}

/* TEXT CONTENT */
.hero-content{
    position:absolute;
    top: 45%;
    left:50%;
    transform:translate(-50%, -50%);
    text-align:center;
    color:white;
    z-index:2;

    opacity:0;
    animation:fadeUp 1s ease forwards;
}

.hero-content h1{
    font-size:42px;
    margin-bottom:10px;
    color:#ffffff;
}

.hero-content p{
    font-size:18px;
    letter-spacing:1px;
}

/* PROFILE IMAGE */
.hero-profile{
    position:absolute;
    bottom:25px;
    left:50%;
    transform:translateX(-50%);
    z-index:3;
}

.hero-profile img{
    width:150px;
    height:150px;
    border-radius:50%;
    border:5px solid white;
    object-fit:cover;
    background:white;

    opacity:0;
    animation:profileFade 1s ease forwards;
    animation-delay:.5s;
}

@keyframes profileFade{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* ANIMATION */
@keyframes fadeUp{
    from{
        opacity:0;
        transform:translate(-50%, -30%);
    }
    to{
        opacity:1;
        transform:translate(-50%, -50%);
    }
}

</style>

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

<div class="profile-summary">
    <h2>Full-stack Web Developer</h2>
    <p>
        Full-stack Web Developer with over <span class="highlight">5 years of professional experience</span>
        developing and maintaining web applications. Highly experienced in
        <span class="tech">PHP</span> and modern JavaScript frameworks including
        <span class="tech">Laravel</span>, <span class="tech">Vue.js</span>,
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