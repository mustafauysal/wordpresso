<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
	window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
<script>
	(function (b, o, i, l, e, r) {
		b.GoogleAnalyticsObject = l;
		b[l] || (b[l] =
				function () {
					(b[l].q = b[l].q || []).push(arguments)
				});
		b[l].l = +new Date;
		e = o.createElement(i);
		r = o.getElementsByTagName(i)[0];
		e.src = '//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e, r)
	}(window, document, 'script', 'ga'));
	ga('create', '<?php echo get_option('wordpresso_google_analytics_track_code'); ?>');
	ga('send', 'pageview');
</script>
</body>
</html>