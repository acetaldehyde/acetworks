<?php
/*
 * Template Name: Novels
 */
get_header();
query_posts('category_name=novels');
?>
<div id="content">
    <h2>NOVELS</h2>
    <section>
        <article>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php
                $category_bredcrum = '';
                $cat = get_the_category();
                $category_bredcrum .= $cat[1]->cat_name.'>';
            ?>
            <h3 class="single"><?php echo $category_bredcrum; ?><a href="<?php echo 'novels/'.get_page_uri($post->ID) ?>" class="link_title"><?php echo the_title(); ?></a></h3>
        <?php endwhile; ?>
        </article>
    </section>
    
</div><!-- #content -->
<?php get_footer(); ?>