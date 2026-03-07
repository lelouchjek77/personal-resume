<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="header" class="header">
<div class="container">

<h1 class="sitename"><?php bloginfo('name'); ?></h1>

</div>
</header>