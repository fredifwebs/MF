<?php get_header(); ?>

<div class="content">
    <section class="wrapper">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="contPost-single">
            <h2><a itemprop="url" href="<?php the_permalink() ?>"><span itemprop="name">
                        <?php the_title(); ?>
                    </span></a></h2>
            <time>
                <?php the_time('d/M/Y') ?>
                -</time>
            <p class="autorPost-single"><span>Por: </span>
                <?php the_author() ?>
            </p>
            <p class="catPost-single"><span>Em: </span>
                <?php the_category(', '); ?>
            </p>
            <hr class="hr-single">
            <div class="conteudo-single">
                <figure class="thumbs2">
                    <?php the_post_thumbnail(); ?>
                </figure><?php the_content(); ?>
            </div>
        </div>
        <hr class="hr-single">
        <div class="social-single">
            <h3>Compartilhe</h3>
            <ul>
                <li class="plus">
                    <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                    <div class="g-plusone" data-size="medium"></div>

                    <!-- Posicione esta tag depois da última tag do botão +1. -->
                    <script type="text/javascript">
                        window.___gcfg = {lang: 'pt-BR'};

                        (function() {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>
                </li>
                <li> <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-via="ocorujadpressao" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="horizontal">Tweet</a>
                    <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </li>
                <li class="fb">
                    <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="position:relative;top:-8px;"></div>
                </li>
                <li class="fb">
                    <div class="fb-share-button" data-href="<?php the_permalink() ?>" data-width="100" data-type="button_count" style="position:relative;top:-8px;"></div>
                </li>
            </ul>
        </div>
        <hr class="hr-single">
        <div class="comments">
					<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="730" data-num-posts="35" data-colorscheme="light"></div>
        </div>
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
