<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php
		/*
		* Print the <title> tag based on what is being viewed.
		*/
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			echo " | {$site_description}";
		}

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 ) {
			echo ' | ' . sprintf( __( 'Page %s', 'wordpresso' ), max( $paged, $page ) );
		}

		?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script type="text/javascript">
		(function () {
			var config = {
				kitId        : 'wak3pin',
				scriptTimeout: 3000
			};
			var h = document.getElementsByTagName("html")[0];
			h.className += " wf-loading";
			var t = setTimeout(function () {
				h.className = h.className.replace(/(\s|^)wf-loading(\s|$)/g, " ");
				h.className += " wf-inactive"
			}, config.scriptTimeout);
			var tk = document.createElement("script"),
					d = false;
			tk.src = '//use.typekit.net/' + config.kitId + '.js';
			tk.type = "text/javascript";
			tk.async = "true";
			tk.onload = tk.onreadystatechange = function () {
				var a = this.readyState;
				if (d || a && a != "complete" && a != "loaded") return;
				d = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (b) {
				}
			};
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(tk, s)
		})();
	</script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>