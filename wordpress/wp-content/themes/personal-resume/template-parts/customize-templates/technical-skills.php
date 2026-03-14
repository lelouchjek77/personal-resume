<?php
?>
<style>

   body{
        margin:0;
        background:#f3f4f6;
   }

   /* HEADER IMAGE ANIMATION */
   .header img {
        width: 100%;
        background-size: cover;
        background-position: center;
        height: 400px;

        opacity:0;
        transform:scale(1.05);
        animation: headerFade 1.5s ease forwards;
   }

   .skills-section {
        max-width: 900px;
        margin: 40px auto;
        font-family: 'Segoe UI', sans-serif;

        opacity:0;
        transform:translateY(40px);
        animation: sectionReveal 1s ease forwards;
        animation-delay:.6s;
   }

    .skills-section h2 {
        font-size: 28px;
        margin-bottom: 25px;
        border-left: 5px solid #3b82f6;
        padding-left: 10px;
        color: #1f2937;
    }

    .skills-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    /* SKILL CARD */
    .skill-group {
        background: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);

        opacity:0;
        transform:translateY(30px);
        animation: cardReveal .8s ease forwards;
    }

    /* STAGGER ANIMATION */
    .skill-group:nth-child(1){ animation-delay:.8s; }
    .skill-group:nth-child(2){ animation-delay:1s; }
    .skill-group:nth-child(3){ animation-delay:1.2s; }
    .skill-group:nth-child(4){ animation-delay:1.4s; }

    .skill-group h4 {
        margin-bottom: 10px;
        color: #374151;
    }

    .skill-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .skill-tags span {
        background: #eef2ff;
        color: #3730a3;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 13px;

        transition: all .3s ease;
    }

    /* HOVER EFFECT */
    .skill-tags span:hover{
        background:#3730a3;
        color:white;
        transform:translateY(-3px);
    }

    /* KEYFRAMES */

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

<section class="skills-section">
    <h2>Technical Skills</h2>

    <div class="skills-container">

        <div class="skill-group">
            <h4>Languages</h4>
            <div class="skill-tags">
                <span>PHP</span>
                <span>JavaScript</span>
                <span>C#</span>
                <span>VB.NET</span>
                <span>Java (Struts)</span>
                <span>Node.js</span>
            </div>
        </div>

        <div class="skill-group">
            <h4>Frameworks & Libraries</h4>
            <div class="skill-tags">
                <span>Laravel</span>
                <span>React.js</span>
                <span>Vue.js</span>
                <span>Typescript</span>
                <span>jQuery</span>
                <span>WordPress</span>
            </div>
        </div>

        <div class="skill-group">
            <h4>Database</h4>
            <div class="skill-tags">
                <span>MySQL</span>
                <span>SQL Server</span>
                <span>SQL Queries</span>
                <span>Stored Procedures</span>
                <span>Database Views</span>
            </div>
        </div>

        <div class="skill-group">
            <h4>Tools & Technologies</h4>
            <div class="skill-tags">
                <span>Git</span>
                <span>Github</span>
                <span>Open AI</span>
                <span>Docker</span>
                <span>FileZilla</span>
                <span>REST APIs</span>
                <span>AWS</span>
                <span>Linux Server Deployment</span>
            </div>
        </div>

    </div>
</section>