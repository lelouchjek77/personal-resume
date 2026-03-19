<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Personal_CV_Resume
 */

get_header();
?>

<div style="text-align:center; padding:80px 20px; max-width:800px; margin:auto;">
    
    <h1 style="font-size:72px; margin-bottom:10px;">404</h1>
    
    <h2 style="font-size:28px; margin-bottom:20px;">
        Oops! Page not found.
    </h2>
    
    <p style="color:#666; font-size:18px; margin-bottom:30px;">
        The page you’re looking for doesn’t exist, may have been moved, or the URL might be incorrect.
    </p>

    <!-- Buttons -->
    <div style="margin-bottom:40px;">
        <a href="<?php echo home_url(); ?>" style="padding:12px 24px; background:#0073aa; color:#fff; text-decoration:none; border-radius:5px; margin-right:10px;">
            Go to Homepage
        </a>
    </div>
</div>

<?php get_footer(); ?>