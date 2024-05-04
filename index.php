<?php
get_header();
if(have_posts()) {
    while(have_posts()) {
	the_post();
?>
        <h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php //the_content(); ?>
	    <?php the_excerpt(); ?>
	    <div class="tags"><?php the_tags(); ?></div>
        </article>
<?php
    }
}

pagination_nav();

get_footer();
