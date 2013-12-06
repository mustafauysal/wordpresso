<div class="Width">
	<h4 class="Section__title">AKTİVİTE</h4>
	<ul>
		<?php
		$args = array( 'posts_per_page' => 10, 'category_name' => 'ifttt' );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post );

			// first-tag
			$posttags = get_the_tags();
			$postTag;
			$count = 0;
			if ( $posttags ) {
				foreach ( $posttags as $tag ) {
					$count ++;
					if ( 1 == $count ) {
						$postTag = $tag->name;
					}
				}
			}

			$iconColor = "rss";
			$figure    = false;

			switch ( $postTag ) {
				case 'instagram-photo-like':
					$iconColor = "instagram";
					$figure    = true;
					break;
				case 'instagram-video-like':
					$iconColor = "instagram";
					$figure    = true;
					break;
				case 'instagram-photo-share':
					$iconColor = "instagram";
					$figure    = true;
					break;
				case 'instagram-video-share':
					$iconColor = "instagram";
					$figure    = true;
					break;
				case 'vimeo-video-favorite':
					$iconColor = "vimeo-square";
					break;
				case 'youtube-video-favorite':
					$iconColor = "youtube-play";
					break;
				case 'foursquare-checkin':
					$iconColor = "foursquare";
					$figure    = true;
					break;
				case 'soundcloud-track-favorite':
					$iconColor = "rss";
					$figure    = true;
					break;
				case 'facebook-status-share':
					$iconColor = "facebook";
					break;
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