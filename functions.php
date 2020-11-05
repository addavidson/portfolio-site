<?php
function photofocus_child_enqueues() {

    wp_enqueue_style( 'photofocus-parent-styles', get_template_directory_uri() .'/style.css' );

}
add_action ( 'wp_enqueue_scripts', 'photofocus_child_enqueues' );
?>

<?php
register_nav_menus( array(
    'social-links' => esc_html__( 'Footer Social Links', 'photofocus' ),
));
?>

<?php
function photofocus_header_title( $before = '', $after = '' ) {
    if ( is_front_page() ) {
        $header_media_title = get_theme_mod( 'photofocus_header_media_title' );
        if ( $header_media_title ) {
            echo $before . wp_kses_post( $header_media_title ) . $after;
        }
    } else if ( is_home() ) {
        if ( is_home() ) {
            echo $before;
            ?>Projects<?php
            echo $after;
        }
    } elseif ( is_singular() ) {
        if ( is_page() ) {
            the_title( $before, $after );
        } else {
            the_title( $before, $after );
        }
    } elseif ( is_404() ) {
        echo $before . esc_html__( 'Nothing Found', 'photofocus' ) . $after;
    } elseif ( is_search() ) {
        /* translators: %s: search query. */
        echo $before . sprintf( esc_html__( 'Search Results for: %s', 'photofocus' ), '<span>' . get_search_query() . '</span>' ) . $after;
    } else {
        the_archive_title( $before, $after );
    }
}
?>

<?php
function photofocus_header_description( $before = '', $after = '' ) {
    if ( is_front_page() ) {
        echo $before . '<p>' . wp_kses_post( get_theme_mod( 'photofocus_header_media_text' ) ) . '</p>' . $after;
    } elseif ( is_404() ) {
        echo $before . '<p>' . esc_html__( 'Oops! That page can&rsquo;t be found', 'photofocus' ) . '</p>' . $after;
    } else {
        the_archive_description( $before, $after );
    }
}
?>