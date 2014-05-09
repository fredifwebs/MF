<?php get_header(); ?>

<div class="content">
    <section class="wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="contPost-single">
            <h2><span itemprop="name">
                        <?php the_title(); ?>
                    </span></h2>
            <hr class="hr-single">
            <div class="conteudo-single">
                <?php the_content(); ?>
            </div>
        </div>
        <hr class="hr-single">
        <?php endwhile?>
        <?php else: ?>
        <?php endif; ?>
    </section>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>
