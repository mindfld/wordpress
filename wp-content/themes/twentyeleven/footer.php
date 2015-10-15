<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div><!-- #main -->
</div><!-- #page -->
<footer id="colophon" role="contentinfo">
	<div class="block-inner">
		<div class="dev">
			<?php if(get_locale() == 'ru_RU') { ?>
				Создано в студии<br>
			<?php } elseif(get_locale() == 'en_US') { ?>
				Created in the studio<br>
			<?php } else { ?>
				Створено в студії<br>
			<?php } ?>
			<a target="_blank" href="http://trendline.in.ua">
				<img src="<?php echo get_template_directory_uri(); ?>/images/trendline.png" alt="trendline">
			</a>
		</div>
		<div class="footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>
		<div class="footer-info">
			<?php if (!dynamic_sidebar("телефон в футере") ) : ?>
			<?php endif; ?>
			<?php if(get_locale() == 'ru_RU') { ?>
			  	<?php if (!dynamic_sidebar("адрес в шапке рус") ) : ?>
				<?php endif; ?>
			<?php } elseif(get_locale() == 'en_US') { ?>
			  	<?php if (!dynamic_sidebar("адрес в шапке англ") ) : ?>
				<?php endif; ?>
			<?php } else { ?>
				<?php if (!dynamic_sidebar("адрес в шапке укр") ) : ?>
				<?php endif; ?>
			<?php } ?>
			<div class="social">
				<img class="footer-logo" alt="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
				<a class="tw" rel="nofollow" href="https://twitter.com/BVIgroup"></a>
				<a class="yt" rel="nofollow" href="#"></a>
				<a class="fb" rel="nofollow" href="https://www.facebook.com/bvigroup"></a>
				<a class="g" rel="nofollow" href="#"></a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
  <div style="display: none;">
  <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31226696 = new Ya.Metrika({ id:31226696, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/31226696" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
  </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64732026-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>