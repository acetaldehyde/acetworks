<?php
get_header();
?>
<div id="content">
    <section id="index-title">
        <span class="page-title">ACETWORKS</span>
        <p class="page-caption">Create any creation.</p>
        
        <div class="top-image-area">
            <?php
                query_posts('post_type=top_image&post_per_page=1');
                if ( have_posts() ) while ( have_posts() ) : the_post();
            ?>
            <a href="<?php echo get_field('image') ?>"><img src="<?php echo get_field('image') ?>"/></a>
            <?php endwhile; ?>
        </div>
        
        <p class="division">Latest posts</p>
        <div id="latest-posts">
            <?php
                query_posts('post_type=post&post_per_page=5');
                if ( have_posts() ) while ( have_posts() ) : the_post();
            ?>
            <div class="a-post">
                <p><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> > <a href="<?php  echo $cat[0]->slug.'/'.get_page_uri($post->ID); ?>"><?php the_title(); ?></a></p>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
</div><!-- /#content -->
<?php
//get_sidebar();
get_footer();
?>