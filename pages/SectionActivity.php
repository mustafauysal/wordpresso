<div class="Width">
	<h4 class="Section__title">AKTİVİTE</h4>
	<ul>
		<?php
		$args = array( 'posts_per_page' => 10, 'category_name' => 'ifttt' );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post );

			// first-tag
			$posttags = array_values( get_the_tags() );
			$postTag;
			$count = 0;
			
            if ( $posttags )
                $postTag = $posttags[0]->name;
                
                $icon_figure = array(
                'instagram-photo-like' => array('icon-color' => 'instagram','figure' => true),
                'instagram-video-like' => array('icon-color' => 'instagram','figure' => true),
                'instagram-photo-share' => array('icon-color' => 'instagram','figure' => true),
                'instagram-video-share' => array('icon-color' => 'instagram','figure' => true),
                'vimeo-video-favorite' => array('icon-color' => 'vimeo-square','figure' => false),
                'youtube-video-favorite' => array('icon-color' => 'youtube-play','figure' => false),
                'soundcloud-track-favorite' => array('icon-color' => 'rss','figure' => true),
                'facebook-status-share' => array('icon-color' => 'facebook','figure' => false),
                'facebook-status-share' => array('icon-color' => 'facebook','figure' => false),
                );
			

			$iconColor = "rss";
			$figure    = false;

			switch ( $postTag ) {
				case 'facebook-link-share':
					$iconColor = "facebook";
					break;
				case 'facebook-photo-share':
					$iconColor = "facebook";
					$figure    = true;
					break;
				case 'twitter-tweet-share':
					$iconColor = "twitter";
					break;
				case 'dribbble-shot-share':
					$iconColor = "dribbble";
					$figure    = true;
					break;
				case 'dribbble-shot-like':
					$iconColor = "dribbble";
					$figure    = true;
					break;
				case 'imdb-watchlist-update':
					break;
				case 'imdb-checkins-update':
					break;
				case 'github-repo-starred':
					$iconColor = "github";
					break;
				case 'behance-work-share':
					$figure = true;
					break;
				case 'pocket-add-url':
					break;
			};?>

			<li class="Event <?php echo 'Event--' . $iconColor;
			if ( $figure ) {
				echo ' Event--figure';
			} ?>">
				<span class="Event__icon"><i class="fa <?php echo 'fa-' . $iconColor; ?>"></i></span>

				<div class="Event__content">
					<?php the_content( false ); ?>
					<p class="Event__time">
						<time title="<?php the_time( 'j F Y - G:i' ) ?>" datetime="<?php the_time( 'Y-m-dTG:i:s' ) ?>"><?php the_time( 'j F Y - G:i' ) ?></time>
					</p>
				</div>
				<?php if ( $figure ): ?>
					<figure>
						<img src="<?php the_title(); ?>" alt="">
					</figure>
				<?php endif ?>
			</li>

		<?php endforeach;
		wp_reset_postdata();?>

	</ul>
	<a class="Button Section__button">TÜM AKTIVITELER</a>
</div>