<?php get_header(); ?>

<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img.jpg" alt="">

  <div class="container d-flex flex-column align-items-center justify-content-center text-center">
    <h2>I am Morgan Freeman</h2>
    <p><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
  </div>

</section>


<!-- About Section -->
<section id="about" class="about section">

<div class="container">

<div class="row gy-4">

<div class="col-md-6">

<div class="row justify-content-between gy-4">

<div class="col-lg-5">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.jpg" class="img-fluid">
</div>

<div class="col-lg-7 about-info">
<p><strong>Name:</strong> <span>Morgan Freeman</span></p>
<p><strong>Profile:</strong> <span>Full Stack Developer</span></p>
<p><strong>Email:</strong> <span>contact@example.com</span></p>
<p><strong>Phone:</strong> <span>(617) 557-0089</span></p>
</div>

</div>

</div>


<div class="col-md-6">
<div class="about-me">

<h4>About me</h4>

<p>
Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
</p>

<p>
Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
</p>

<p>
Nulla porttitor accumsan tincidunt.
</p>

</div>
</div>

</div>

</div>

</section>


<!-- Resume Section -->
<section id="resume" class="resume section">

<div class="container section-title">
<h2>Resume</h2>
</div>

<div class="container">

<div class="row">

<div class="col-lg-6">

<h3 class="resume-title">Summary</h3>

<div class="resume-item">
<h4>Brandon Johnson</h4>

<p>
Innovative and deadline-driven Graphic Designer with 3+ years experience.
</p>

<ul>
<li>Portland, Orlando FL</li>
<li>(123)456-7891</li>
<li>email@example.com</li>
</ul>

</div>

<h3 class="resume-title">Education</h3>

<div class="resume-item">
<h4>Bachelor of Graphic Design</h4>
<h5>2010 - 2014</h5>
<p>Rochester Institute of Technology</p>
</div>

</div>


<div class="col-lg-6">

<h3 class="resume-title">Professional Experience</h3>

<div class="resume-item">
<h4>Senior Graphic Designer</h4>
<h5>2019 - Present</h5>

<ul>
<li>Lead in design and development</li>
<li>Delegate tasks to design team</li>
<li>Supervise project quality</li>
</ul>

</div>

</div>

</div>

</div>

</section>


<!-- Portfolio -->
<section id="portfolio" class="portfolio section">

<div class="container section-title">
<h2>Portfolio</h2>
</div>

<div class="container">

<div class="row gy-4">

<div class="col-lg-4 col-md-6">
<div class="portfolio-item">

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/app-1.jpg" class="img-fluid">

<div class="portfolio-info">
<h4>Project 1</h4>
<p>Web Application</p>
</div>

</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="portfolio-item">

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/product-1.jpg" class="img-fluid">

<div class="portfolio-info">
<h4>Project 2</h4>
<p>Product Design</p>
</div>

</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="portfolio-item">

<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/branding-1.jpg" class="img-fluid">

<div class="portfolio-info">
<h4>Project 3</h4>
<p>Branding</p>
</div>

</div>
</div>

</div>

</div>

</section>


<!-- Contact -->
<section id="contact" class="contact section">

<div class="container section-title">
<h2>Contact</h2>
</div>

<div class="container">

<div class="row gy-5">

<div class="col-lg-4">

<div class="info-item">
<h3>Address</h3>
<p>New York, USA</p>
</div>

</div>

<div class="col-lg-4">

<div class="info-item">
<h3>Phone</h3>
<p>+1 5589 55488</p>
</div>

</div>

<div class="col-lg-4">

<div class="info-item">
<h3>Email</h3>
<p>info@example.com</p>
</div>

</div>

</div>


<form method="post" class="php-email-form">

<div class="row gy-4">

<div class="col-md-6">
<input type="text" class="form-control" placeholder="Your Name">
</div>

<div class="col-md-6">
<input type="email" class="form-control" placeholder="Your Email">
</div>

<div class="col-md-12">
<textarea class="form-control" rows="6" placeholder="Message"></textarea>
</div>

<div class="col-md-12 text-center">
<button type="submit">Send Message</button>
</div>

</div>

</form>

</div>

</section>

</main>

<?php get_footer(); ?>