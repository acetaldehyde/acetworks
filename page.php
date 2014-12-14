<?php get_header() ?>
<div id="content">
    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section>
        <h2><?php the_title() ?></h2>
        <article>
            <?php the_content(); ?>
        </article>
    </section
<?php endwhile; ?>
    
</div><!-- #content -->
<?php get_footer() ?>