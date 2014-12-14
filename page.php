<?php get_header() ?>
<div id="content">
    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section>
        <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
    </section
<?php endwhile; ?>
    
</div><!-- #content -->
<?php get_footer() ?>