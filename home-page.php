<?php
/**
*
* Template name: Home page
* Template Post Type:  page
*/
get_header();
echo '<article>';
get_template_part( 'templates-parts/lp/lp', 'slider' );
get_template_part( 'templates-parts/lp/lp', 'about-us' );
get_template_part( 'templates-parts/lp/lp', 'with-us' );
get_template_part( 'templates-parts/lp/lp', 'offer' );
get_template_part( 'templates-parts/lp/lp', 'cta' );
get_template_part( 'templates-parts/lp/lp', 'experiences' );
get_template_part( 'templates-parts/lp/lp', 'we-help' );
get_template_part( 'templates-parts/lp/lp', 'become-a-lion' );
echo '</article>';
get_footer();
