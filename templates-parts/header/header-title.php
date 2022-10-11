
    <?php if ( is_category() ) :
	   single_cat_title();					
	elseif (is_404()) :
		_e( '404', 'dev');
	elseif (is_page() ) :
		the_title();
	elseif ( is_tag() ) :
		single_tag_title();
	elseif ( is_author() ) :
		the_post();
		printf( __( '%s', 'dev' ), get_the_author() );
		rewind_posts();
	elseif ( is_day() ) :
		printf( __( 'Dzień: %s', 'dev' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
		printf( __( 'Miesiąc: %s', 'dev' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	elseif ( is_year() ) :
		printf( __( 'Rok: %s', 'dev' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
		_e( 'Asides', 'dev' );
	elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
		_e( 'Images', 'dev');
	elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
		_e( 'Videos', 'dev' );
	elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
		_e( 'Quotes', 'dev' );
	elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
		_e( 'Links', 'dev' );
	else :
		_e( 'Blog', 'dev' );
    endif; ?>