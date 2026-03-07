<?php
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<style>

body{
    margin:0;
    background:#f3f4f6;
}

/* HEADER IMAGE */
.header img {
    width: 100%;
    background-size: cover;
    background-position: center;
    height: 400px;

    opacity:0;
    transform:scale(1.05);
    animation: headerFade 1.4s ease forwards;
}

.contact-section {
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    font-family: 'Segoe UI', sans-serif;

    opacity:0;
    transform:translateY(40px);
    animation: sectionReveal 1s ease forwards;
    animation-delay:.5s;
}

.contact-section h2 {
    font-size: 28px;
    margin-bottom: 25px;
    border-left: 5px solid #3b82f6;
    padding-left: 10px;
    color: #1f2937;
}

.contact-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

/* CONTACT CARD */
.contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);

    opacity:0;
    transform:translateY(30px);
    animation: cardReveal .8s ease forwards;
}

/* STAGGER EFFECT */
.contact-item:nth-child(1){ animation-delay:.8s; }
.contact-item:nth-child(2){ animation-delay:1s; }
.contact-item:nth-child(3){ animation-delay:1.2s; }

.contact-item:hover {
    transform: translateY(-5px);
    transition: .3s;
}

.icon,
.icon-email {
    font-size: 24px;
    background: #eef2ff;
    padding: 10px;
    border-radius: 50%;
}

.contact-item h4 {
    margin: 0;
    font-size: 16px;
    color: #374151;
}

.contact-item p {
    margin: 2px 0 0;
    font-size: 14px;
    color: #6b7280;
    word-break: break-word;
}

.contact-item a {
    text-decoration: none;
    color: #374151;
}

.contact-item a:hover {
    color: #3b82f6;
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

<section class="contact-section">
    <h2>Contact Me</h2>

    <div class="contact-container">

        <div class="contact-item">
            <span class="icon">📞</span>
            <div>
                <h4>Phone</h4>
                <p>+63 961 127 7454</p>
            </div>
        </div>

        <div class="contact-item">
            <span class="icon-email"><i class="fa-solid fa-envelope"></i></span>
            <div>
                <h4>Email</h4>
                <p>
                    <a href="mailto:lelouch.jek77@gmail.com">
                        lelouch.jek77@gmail.com
                    </a>
                </p>
            </div>
        </div>

        <div class="contact-item">
            <span class="icon">📍</span>
            <div>
                <h4>Location</h4>
                <p>La Castellana, Negros Occidental<br>6131 Philippines</p>
            </div>
        </div>

    </div>
</section>