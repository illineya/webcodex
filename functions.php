
<?php
/*
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_robots', 1 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );

function se_remove_all_scripts() {
    global $wp_scripts;
    $wp_scripts->queue = array();
}
add_action( 'wp_print_scripts', 'se_remove_all_scripts', 99 );

function se_remove_all_styles() {
    global $wp_styles;
    $wp_styles->queue = array();
}
add_action( 'wp_print_styles', 'se_remove_all_styles', 99 );
*/


function pagination_nav() {
    global $wp_query;

    if ($wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '← Назад' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Вперёд →' ); ?></div>
        </nav>
<?php }
}
