<?php
/*
 * Template Name: Sounds
 */
get_header();
query_posts('category_name=sounds');
?>
<div id="content">
    <h2>SOUNDS</h2>
    <section>
        <article>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h3 class="single"><a href="<?php echo 'sounds/'.get_page_uri($post->ID) ?>" class="link_title"><?php echo the_title(); ?></a></h3>
        <?php endwhile; ?>
        </article>
    </section>
    
</div><!-- #content -->
<?php get_footer(); ?>