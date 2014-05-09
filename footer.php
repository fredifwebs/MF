<footer>
		<div class="content">
			<figure class="logoFooter">
				<a href="http://www.meusfetiches.com/" title="">
					<img src="<?php bloginfo('template_directory'); ?>/images/logoFooter.png" alt="">
				</a>
			</figure>
			<nav class="menuFooter">
				<ul>
					<?php wp_nav_menu( $args ); ?>
				</ul>
			</nav>
			<figure class="ifwebs">
				<a href="http://www.ifwebs.com/" title="Ifwebs - Criação e desenvolvimento de site e blogs">
					<img src="<?php bloginfo('template_directory'); ?>/images/transparencia.png" alt="Ifwebs - Criação e desenvolvimento de site e blogs">
				</a>
			</figure>
			<div class="clear"></div>
		</div>
		<p class="copy">© Blog Meus fetiches 2014 - Todos os direitos reservados.</p>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>