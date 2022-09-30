<?php 
$blog_info    = get_bloginfo( 'name' );
$logo         = get_theme_mod('logo');
?>
<div class="nav-brand">
    <?php if ( $logo ) { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img loading="lazy" src="<?php echo esc_html($logo); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
    </a>
    <?php } else { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="99.1px"
            height="57px" viewBox="0 0 99.1 57" style="enable-background:new 0 0 99.1 57;" xml:space="preserve">
        <polygon fill="#034EA1" points="0,28.5 0,42.8 0,57 14.2,57 14.2,42.8 14.2,28.5 14.2,14.3 "/>
        <polygon fill="#034EA1" points="0,0 0,14.3 14.2,0 "/>
        <polygon fill="#034EA1" points="28.3,28.5 28.3,42.8 42.4,57 42.4,42.8 42.4,28.5 42.4,14.3 "/>
        <polygon fill="#034EA1" points="70.8,28.5 70.8,14.3 56.6,14.3 "/>
        <polygon fill="#034EA1" points="56.6,57 70.8,57 70.8,42.8 "/>
        <polygon fill="#034EA1" points="84.9,57 99.1,57 84.9,42.8 "/>
        <polygon fill="#034EA1" points="84.9,14.3 84.9,28.5 99.1,14.3 "/>
        </svg>

    </a>
    <?php } ?>
</div>
