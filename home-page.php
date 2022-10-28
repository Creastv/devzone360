<?php
/**
*
* Template name: Home page
* Template Post Type:  page
*/
get_header();
echo '<article>';
get_template_part( 'templates-parts/home/home', 'slider' );
get_template_part( 'templates-parts/home/home', 'about-us' );
get_template_part( 'templates-parts/home/home', 'with-us' );
get_template_part( 'templates-parts/home/home', 'offer' );
get_template_part( 'templates-parts/home/home', 'cta' );
get_template_part( 'templates-parts/home/home', 'experiences' );
get_template_part( 'templates-parts/home/home', 'we-help' );
get_template_part( 'templates-parts/home/home', 'become-a-lion' );
echo '</article>';
get_footer();
