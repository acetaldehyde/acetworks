<?php get_header() ?>
<div id="content">
    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section>
        <?php
            $category_bredcrum = '';
            foreach (get_the_category() as $category){
                $category_bredcrum .= '>'.$category->cat_name;
            }
            $category_bredcrum[0] = NULL;
        ?>
        <h2><?php echo $category_bredcrum ?></h2>
        <article>
            <h3 class="single"><?php the_title() ?></h3>
            <?php the_content() ?>
        </article>
    </section
<?php endwhile; ?>
    
</div><!-- #content -->
<?php get_footer() ?>
