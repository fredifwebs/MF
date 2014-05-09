<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-BR">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title><?php wp_title(''); ?></title>
<meta property="og:type" content="website">
<meta property="og:site_name" content="Meus Fetiches"/>
<meta property="og:url" content="http://www.meusfetiches.com/">
<meta property="og:title" content="<?php wp_title(''); ?>">
<meta property="og:description" content="">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/logo.png">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=865801573448311";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php show_admin_bar(true); ?>
<header>
  <nav>
    <div class="content">
      <ul>
        <?php wp_nav_menu( $args ); ?>
      </ul>
      <button onclick="window.open('<?php bloginfo('rss2_url'); ?>','_blank');" title="Assine nosso feed!"><img src="<?php bloginfo('template_directory'); ?>/images/btn_feed.png" alt="Assine nosso feed!"></button>
      <button onclick="window.open('https://www.facebook.com/meusfetiches','_blank');" title="Curta nossa página no Facebook!"><img src="<?php bloginfo('template_directory'); ?>/images/btn_facebook.png" alt="Curta nossa página no Facebook!"></button>
      <button onclick="location.href='#container-one'"><img src="<?php bloginfo('template_directory'); ?>/images/btn_busca.png" alt="O que procura?"></button>
    </div>
    <div class="stage" id="container-one">
      <form class="searchform" id="searchform" role="search" method="get" action="http://www.meusfetiches.com/">
        <input type="text" id="search" name="s" value="" placeholder="Pesquisar..." class="sb-search-input">
        <input type="image" src="<?php bloginfo('template_directory'); ?>/images/btn_busca.png" class="sidesubmit">
      </form>
    </div>
  </nav>
  <section class="content"> <a href="http://www.meusfetiches.com/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
    <div class="ads1">
      <script type="text/javascript">
  bb_bid = "1687160";
  bb_lang = "pt-BR";
  bb_name = "custom";
  bb_limit = "8";
  bb_format = "bbb";
</script>
<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
    </div>
  </section>
</header>
