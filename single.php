<?php
get_header();
if(have_posts()) {
?>
        <h1><?php the_title(); ?></h1>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article>
<?php
}
get_footer();
